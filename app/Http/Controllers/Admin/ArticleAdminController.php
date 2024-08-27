<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Issue;
use App\Models\Article;
use App\Models\Discipline;
use App\Models\ArticleUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleAdminController extends Controller
{
    public function index()
    {
        try {
            $articles = Article::with(['discipline', 'issue'])->orderBy('created_at', 'desc')->paginate(5);

            return view('pages.admin.articles.index', compact('articles'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function create(Request $request)
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

            // Récupérer les disciplines et auteurs
            $disciplines = Discipline::orderBy('name', 'asc')->get();
            $authors = User::whereHas('roles', function ($query) {
                $query->where('name', 'author');
            })
            ->orderBy('lastname', 'ASC')
            ->get();

            // Retourner la vue avec les données
            return view('pages.admin.articles.create', compact('disciplines', 'authors', 'issue'));
        } catch (\Throwable $th) {
            // En cas d'erreur, afficher le message et la page d'erreur 500
            dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function store(Request $request)
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
            // Création de l'article
            $article = Article::create([
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
