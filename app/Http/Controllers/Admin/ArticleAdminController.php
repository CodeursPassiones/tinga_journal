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
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

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

            $sortOrder = $request->input('sort_order', 'asc'); // Par défaut ascendant
            $sortBy = $request->input('sort_by', 'title'); // Par défaut tri par titre
            $limit = $request->input('limit', 5); // Par défaut 6 articles par page
            $query = Article::with(['discipline', 'issue']);
            // Application du tri
            $query->orderBy($sortBy, $sortOrder);

            if ($search) {
                $query->where('title', 'ILIKE', '%'.$search.'%');
            }
            if ($status !== 'DRAFT') {
                $query->where('status', $status);
                $query->where('state', '=', 'VALID');
            } else {
                // $query->where('status', $status);
                $query->where('state', '=', 'INVALID');
            }
            $articles = $query->paginate($limit);

            return view('pages.admin.articles.index', compact('articles', 'status', 'sortOrder'));
        } catch (\Throwable $th) {
            // dd($th->getMessage());

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

            $article = Article::firstOrCreate(
                [
                    'matricule' => $matricule,
                ],
                [
                    'issue_id' => $issue->id,
                    'user_id' => $auth_user->id,
                ]
            );

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
            // dd($th->getMessage(), $th->getLine());

            return view('errors.500');
        }
    }

    public function storeMetadata(Request $request)
    {
        try {
            // Validation des données du formulaire
            $validatedData = $request->validate([
                'title' => 'required|string|min:2',
                'discipline' => 'required|exists:disciplines,id',

                'abstract' => 'required|string',

                'article_id' => 'required|exists:articles,id',
            ]);
            $article_id = $request->input('article_id');

            $article = Article::find($article_id);

            // Création de l'article
            $article->update([
                'title' => $request->input('title'),
                'abstract' => $request->input('abstract'),
                'en_abstract' => $request->input('en_abstract'),
                'prefix' => $request->input('prefix'),
                'subtitle' => $request->input('subtitle'),
                'citation' => $request->input('citation'),
                'keywords' => $request->input('keywords'),
                'discipline_id' => $request->input('discipline'),
            ]);
            $this->checkAndUpdateArticleValidity($article);

            // Redirection avec message de succès
            return response()->json(['message' => 'Article créé avec succès.', 'ok' => true]);
        } catch (ValidationException $e) {
            // Gestion des erreurs de validation
            // return response()->json(['ok' => false, 'errors' => $e->errors(), 'message' => 'Données invalides. Veuillez vérifier votre saisie.']);
            return response()->json(['ok' => false, 'message' => $e->getMessage()]);
        } catch (ModelNotFoundException $e) {
            // Gestion des erreurs si l'article ou la discipline n'est pas trouvé
            return response()->json(['ok' => false, 'message' => 'Article ou discipline non trouvé.']);
        } catch (\Exception $e) {
            // return response()->json(['ok' => false, 'message' => $th->getMessage()]);

            // Gestion des autres erreurs
            return response()->json(['ok' => false, 'message' => 'Une erreur inattendue s\'est produite. Veuillez réessayer.']);
        }
    }

    public function storeFiles(Request $request, Article $article)
    {
        try {
            // code...

            // Valider les fichiers et l'image
            $request->validate([
                'article_id' => 'required|exists:articles,id',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validation pour l'image
                'files.*' => 'mimes:pdf|max:10240', // validation pour les fichiers PDF
            ]);
            // Créer un nouvel article
            $article_id = $request->input('article_id');

            $article = Article::find($article_id);
            // Suppression de l'image existante si demandé
            if ($request->has('delete_image') && $article->image_path) {
                \Storage::delete($article->image_path); // Supprimer l'image existante
                $article->image_path = '/assets/images/thumbnails/img-02.jpg'; // Mettre à jour le champ dans la base de données
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
                    // Générer un nom de fichier unique en conservant l'extension
                    $originalName = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $pdfFile->getClientOriginalExtension();
                    $filename = Str::slug($originalName).'_'.uniqid().'_'.time().'.'.$extension;

                    // Sauvegarder le fichier dans le dossier public
                    $pdfPath = $pdfFile->storeAs('public/files/articles', $filename);

                    // Vérifier si l'article existe avant de créer l'entrée
                    if (isset($article)) {
                        File::create([
                            'mime_type' => $pdfFile->getMimeType(),
                            'path' => $pdfPath,
                            'url' => Storage::url($pdfPath), // Générer l'URL publique
                            'name' => $pdfFile->getClientOriginalName(),
                            'description' => $request->input('description', ''), // Description facultative
                            'article_id' => $article->id, // Lier le fichier à l'article
                            'category_file_id' => $request->input('category_file_id'), // Lier la catégorie de fichier, si disponible
                        ]);
                    } else {
                        // Gérer le cas où l'article n'existe pas
                        return response()->json(['error' => 'Article not found.'], 404);
                    }
                }
            }

            $this->checkAndUpdateArticleValidity($article);

            return response()->json([
                'message' => 'Fichiers mis à jour avec succès',
                'ok' => true,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function syncAuthor(Request $request)
    {
        try {
            $this->validate($request, [
                'user_id' => 'required',
                'article_id' => 'required',
            ]);
            $article_id = $request->input('article_id');
            ArticleUser::create([
                'user_id' => $request->input('user_id'),
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
                'lastname' => 'required',
                'firstname' => 'required',
                'article_id' => 'required|exists:articles,id',
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
            $article_id = $request->input('article_id');

            $article = Article::find($article_id);
            ArticleUser::create([
                'user_id' => $user->id,
                'article_id' => $article_id,
                'role' => 'author',
            ]);

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
        $request->validate([
            'agree' => 'required',
            'article_id' => 'required',
        ], [
            'agree.required' => 'Vous devez accepter les termes et conditions pour soumettre l\'article.',
            'article_id.required' => 'L\'identifiant de l\'article est requis.',
        ]);

        try {
            $article_id = $request->input('article_id');

            $article = Article::find($article_id);
            $article->status = 'SUBMITTED';
            $article->save();

            // Redirection avec message de succès
            return response()->json(['message' => 'Article soumis avec succès.', 'ok' => true]);
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
                'publication_date' => now(),
            ]);

            return to_route('admin.articles.list', 'PUBLISHED');
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
                'status' => 'SUBMITTED',
            ]);

            // Redirection avec message de succès
            // return response()->json(['message' => 'Article publié avec succès.', 'ok' => true, 'article_id' => $article->id]);
            Article::where('discipline_id', $article->discipline_id)->take(3)->get();

            return to_route('admin.articles.list', 'SUBMITTED');
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function destroy(string $id)
    {
        try {
            $article = Article::find($id);
            if ($article->image_path !== '/assets/images/thumbnails/img-02.jpg') {
                \Storage::delete($article->image_path); // Supprimer l'image existante
            }

            foreach ($article->files as $file) {
                $file = File::find($file->id);
                if ($file) {
                    \Storage::delete($file->path); // Supprimer le fichier PDF du stockage
                    $file->delete(); // Supprimer l'entrée de la base de données
                }
            }
            DB::table('articles')->where('id', $id)->delete();

            return response()->json(['ok' => true, 'message' => 'L\'article a été supprimé avec succès.']);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function detachAuthor(string $id)
    {
        try {
            DB::table('article_users')->where('id', $id)->delete();

            return response()->json(['ok' => true, 'message' => 'L\'auteur a été retiré avec succès.']);
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'message' => $th->getMessage()]);
            // return response()->json(['ok' => false, 'message' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }
}
