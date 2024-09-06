<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleUser;
use App\Models\CategoryFile;
use App\Models\Discipline;
use App\Models\File;
use App\Models\Issue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Storage;

class ArticleAdminController extends Controller
{
    public function checkAndUpdateArticleValidity(Article $article)
    {
        if ($article->title !== null && $article->abstract !== null && !$article->files->isEmpty() && !$article->articleUsers->isEmpty()) {
            // Mise à jour de l'état de l'article si les conditions sont remplies
            $article->update([
                'state' => 'VALID',
            ]);
        } else {
            $article->update([
                'state' => 'INVALID',
            ]);
        }
    }

    public function index(Request $request, $status = 'DRAFT')
    {
        try {
            $search = $request->input('search');
            // $sortOrder = $request->input('sort_order', 'asc');

            $query = Article::with(['discipline', 'issue'])->orderBy('created_at', 'desc')->where('status', $status);
            if ($search) {
                $query->orWhere('title', 'LIKE', '%'.$search.'%');
                $query->orWhere('abstract', 'LIKE', '%'.$search.'%');
                $query->orWhere('content', 'LIKE', '%'.$search.'%');
            }
            $articles = $query->paginate(5);

            return view('pages.admin.articles.index', compact('articles', 'status'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function article(Request $request, $matricule = null)
    {
        try {
            // Récupérer l'issue_id de la requête
            $issue_id = $request->input('issue_id');

            // Vérifier si un issue_id est fourni et récupérer l'issue correspondante
            if ($issue_id) {
                $issue = Issue::find($issue_id);
            }

            // Si aucun issue_id n'est fourni ou si l'issue correspondante n'existe pas
            if (!isset($issue) || !$issue) {
                $issue = Issue::orderBy('number', 'desc')->first();
            }

            // Récupérer l'utilisateur authentifié
            $auth_user = auth()->user();

            // Créer ou récupérer le premier article basé sur le matricule, l'issue_id et l'user_id
            // dd($matricule);
            $article = Article::firstOrCreate(
                [
                    'matricule' => $matricule,
                ],
                [
                    'issue_id' => $issue->id,
                    'user_id' => $auth_user->id,
                ]
            );

            // Débugger si nécessaire
            // dd($article);

            // Récupérer les segments de l'URL
            $segments = $request->segments();
            $segment_before_id = count($segments) >= 2 ? ($matricule ? $segments[count($segments) - 2] : $segments[count($segments) - 1]) : null;

            // Gestion des différentes vues selon le segment avant l'ID
            switch ($segment_before_id) {
                case 'metadata':
                    $disciplines = Discipline::orderBy('name', 'asc')->get();

                    return view('pages.admin.articles.view.forms.metadata', compact('article', 'disciplines', 'issue'));

                case 'authors':
                    $authors = User::whereHas('roles', function ($query) {
                        $query->where('name', 'author');
                    })->orderBy('lastname', 'ASC')->get();

                    return view('pages.admin.articles.view.forms.authors', compact('authors', 'article', 'issue'));

                case 'files':
                    $category_files = CategoryFile::orderBy('name', 'asc')->get();

                    return view('pages.admin.articles.view.forms.files', compact('article', 'category_files', 'issue'));

                default:
                    abort(404); // Gestion des URI invalides
            }
        } catch (\Throwable $th) {
            // En cas d'exception, afficher un message d'erreur pour le débogage
            dd($th->getMessage(), $th->getLine());

            return view('errors.500');
        }
    }

    public function storeMetadata(Request $request)
    {
        try {
            // Validation des données du formulaire
            $validatedData = $request->validate([
                'title' => 'required|string|max:100',
                'discipline' => 'required|exists:disciplines,id',

                'abstract' => 'required|string|max:255',
                // 'prefix' => 'string|max:7',
                // 'subtitle' => 'string|max:40',
                // 'keywords' => 'string|max:100',
                'article_id' => 'required|int',
            ]);
            $article = Article::find($validatedData['article_id']);

            // Création de l'article
            $article->update([
                'title' => $request->input('title'),
                'abstract' => $request->input('abstract'),
                'prefix' => $request->input('prefix'),
                'subtitle' => $request->input('subtitle'),
                'keywords' => $request->input('keywords'),
                'discipline_id' => $request->input('discipline'),
            ]);
            $this->checkAndUpdateArticleValidity($article);

            // Redirection avec message de succès
            return response()->json(['message' => 'Article créé avec succès.', 'ok' => true]);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function storeFiles(Request $request, Article $article)
    {
        // Valider les fichiers et l'image
        $request->validate([
            'article_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validation pour l'image
            'files.*' => 'mimes:pdf|max:10240', // validation pour les fichiers PDF
        ]);
        // Créer un nouvel article
        $article = Article::find($request->input('article_id'));
        // Suppression de l'image existante si demandé
        if ($request->has('delete_image') && $article->image_path) {
            \Storage::delete($article->image_path); // Supprimer l'image existante
            $article->image_path = 'assets/images/thumbnails/img-02.jpg'; // Mettre à jour le champ dans la base de données
        }

        // Upload de la nouvelle image si fournie
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images/articles');
            $article->image_path = $imagePath;
        }

        $article->save(); // Mettre à jour l'article

        // Suppression des fichiers PDF existants si demandé
        if ($request->has('delete_files')) {
            foreach ($request->input('delete_files') as $fileId) {
                $file = File::find($fileId);
                if ($file) {
                    \Storage::delete($file->path); // Supprimer le fichier PDF du stockage
                    $file->delete(); // Supprimer l'entrée de la base de données
                }
            }
        }

        // Upload des nouveaux fichiers PDF
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $pdfFile) {
                $pdfPath = $pdfFile->store('public/files/articles');

                // Créer une nouvelle entrée pour chaque fichier PDF
                // Créer une entrée dans la table 'files'
                File::create([
                    'mime_type' => $pdfFile->getMimeType(),
                    'path' => $pdfPath,
                    'url' => \Storage::url($pdfPath), // Générer l'URL publique
                    'name' => $pdfFile->getClientOriginalName(),
                    'description' => $request->input('description') ?? '', // Description facultative
                    'article_id' => $article->id, // Lier le fichier à l'article
                    'category_file_id' => $request->input('category_file_id'), // Lier la catégorie de fichier, si disponible
                ]);
            }
        }

        $this->checkAndUpdateArticleValidity($article);

        return response()->json([
            'message' => 'Fichiers mis à jour avec succès',
            'ok' => true,
        ], 200);
    }

    public function syncAuthor($article_id, $author_id)
    {
        try {
            ArticleUser::create([
                'user_id' => $author_id,
                'article_id' => $article_id,
                'role' => 'author',
            ]);
            $article = Article::find($article_id);

            $this->checkAndUpdateArticleValidity($article);

            // Redirection avec message de succès
            return response()->json(['message' => 'Auteur associé avec succès.', 'ok' => true]);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function createAndSyncAuthor(Request $request)
    {
        try {
            $this->validate($request, [
                'lastname' => 'required|max:20',
                'firstname' => 'required|max:20',
                'article_id' => 'required|max:20',
                'email' => 'email|unique:users,email',
            ]);

            $user = User::create([
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'email' => $request->input('email'),
                'orcid' => $request->input('orcid'),
                'password' => Hash::make($request->input('secret')),
            ]);

            $user->syncRoles(['author']);
            ArticleUser::create([
                'user_id' => $user->id,
                'article_id' => $request->input('article_id'),
                'role' => 'author',
            ]);
            $article = Article::find($request->input('article_id'));
            $this->checkAndUpdateArticleValidity($article);

            return response()->json(['ok' => true, 'message' => 'Auteur créé et associé avec succès !'], 200);
        } catch (\Exception $e) {
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);
        }
    }

    public function submit(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'agree' => 'required',
            'article_id' => 'required',
        ], [
            'agree.required' => 'Vous devez accepter les termes et conditions pour soumettre l\'article.',
            'article_id.required' => 'L\'identifiant de l\'article est requis.',
        ]);

        try {
            $article = Article::find($request->input('article_id'));
            $article->status = 'SUBMITTED';
            $article->save();

            // Redirection avec message de succès
            return response()->json(['message' => 'Article soumis avec succès.', 'ok' => true]);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function edit($article_id)
    {
        try {
            // Récupérer les disciplines et auteurs
            $disciplines = Discipline::orderBy('name', 'asc')->get();
            $authors = User::whereHas('roles', function ($query) {
                $query->where('name', 'author');
            })
            ->orderBy('lastname', 'ASC')
            ->get();
            $article = Article::with(['discipline', 'issue'])->orderBy('created_at', 'desc')->find($article_id);

            return view('pages.admin.articles.edit', compact('article', 'authors', 'disciplines'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function update(Request $request, $article_id)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'issue_id' => 'required|exists:issues,id',
            'title' => 'required|string|max:255',
            'discipline' => 'required|exists:disciplines,id',
            'authors' => 'required|array',
            'authors.*' => 'exists:users,id',

            'abstract' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $article = Article::find($article_id);
            // Création de l'article
            $article->update([
                'issue_id' => $validatedData['issue_id'],
                'title' => $validatedData['title'],
                'discipline_id' => $validatedData['discipline'],
                'abstract' => $validatedData['abstract'],
                'content' => $validatedData['content'],
                'user_id' => auth()->user()->id,
            ]);
            // Gestion de l'upload de l'image (optionnelle)
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();

                // Stockez l'image dans le répertoire storage/app/public/images
                $image->storeAs('public/images', $imageName);

                // Enregistrez le chemin relatif de l'image dans la base de données
                $chemin = 'storage/images/'.$imageName;

                $article->image_path = $chemin;
                $article->save();
            }
            // Associer les auteurs à l'article
            foreach ($validatedData['authors'] as $value) {
                // code...
                ArticleUser::create([
                    'user_id' => $value,
                    'article_id' => $article->id,
                    'role' => 'author',
                ]);
            }

            // Redirection avec message de succès
            return response()->json(['message' => 'Article créé avec succès.', 'ok' => true, 'article_id' => $article->id]);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function publish($article_id)
    {
        try {
            $article = Article::find($article_id);
            // Création de l'article
            $article->update([
                'status' => 'PUBLISHED',
            ]);

            // Redirection avec message de succès
            // return response()->json(['message' => 'Article publié avec succès.', 'ok' => true, 'article_id' => $article->id]);

            $similors = Article::where('discipline_id', $article->discipline_id)->take(3)->get();

            return view('pages.web.articles.show', compact('article', 'similors'));
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function hide($article_id)
    {
        try {
            $article = Article::find($article_id);
            // Création de l'article
            $article->update([
                'status' => 'DRAFT',
            ]);

            // Redirection avec message de succès
            // return response()->json(['message' => 'Article publié avec succès.', 'ok' => true, 'article_id' => $article->id]);

            $similors = Article::where('discipline_id', $article->discipline_id)->take(3)->get();

            return view('pages.web.articles.show', compact('article', 'similors'));
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }
}
