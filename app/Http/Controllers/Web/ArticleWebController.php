<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Volume;
use App\Models\Discipline;
use App\Models\Issue;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleWebController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Calculer le nombre d'articles pour chaque période
            $counts = [
                'all' => Article::where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->count(),
                'today' => Article::whereDate('created_at', Carbon::today())->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->count(),
                'this_week' => Article::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->count(),
                'this_month' => Article::whereMonth('created_at', Carbon::now()->month)->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->count(),
                'this_year' => Article::whereYear('created_at', Carbon::now()->year)->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->count(),
                'last_year' => Article::whereYear('created_at', Carbon::now()->subYear()->year)->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->count(),
                'last_10_years' => Article::whereYear('created_at', '>=', Carbon::now()->subYears(10)->year)->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->count(),
            ];
            // Récupération des filtres depuis la requête
            $filterDiscipline = $request->input('discipline');
            $search = $request->input('search');
            $issue_id = $request->input('issue_id');
            $filterPeriods = $request->input('period');
            $sortOrder = $request->input('sort_order', 'asc'); // Par défaut ascendant
            $sortBy = $request->input('sort_by', 'title'); // Par défaut tri par titre
            $limit = $request->input('limit', 10); // Par défaut 6 articles par page

            // Initialisation de la requête de base pour les articles
            $query = Article::with(['user', 'discipline'])->where('status', 'PUBLISHED')->where('state', 'VALID');

            // Filtrer par catégorie
            if (!empty($filterDiscipline) && !in_array('', $filterDiscipline)) {
                $query->whereHas('discipline', function ($q) use ($filterDiscipline) {
                    $q->where('name', $filterDiscipline);
                });
            }

            // Filtrer par plusieurs périodes
            if (!empty($filterPeriods) && !in_array('', $filterPeriods)) {
                $query->where(function ($q) use ($filterPeriods) {
                    foreach ($filterPeriods as $period) {
                        switch ($period) {
                            case 'today':
                                $q->orWhereDate('created_at', Carbon::today());
                                break;
                            case 'this_week':
                                $q->orWhereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                                break;
                            case 'this_month':
                                $q->orWhereMonth('created_at', Carbon::now()->month);
                                break;
                            case 'this_year':
                                $q->orWhereYear('created_at', Carbon::now()->year);
                                break;
                            case 'last_year':
                                $q->orWhereYear('created_at', Carbon::now()->subYear()->year);
                                break;
                            case 'last_10_years':
                                $q->orWhereYear('created_at', '>=', Carbon::now()->subYears(10)->year);
                                break;
                            default:
                                break;
                        }
                    }
                });
            }

            $issue = null;
            if ($issue_id) {
                $query->where('issue_id', $issue_id);
                $issue = Issue::with(['articles' => function ($query) {
                    $query->orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
                }])
                ->whereHas('articles', function ($query) {
                    $query->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
                })->find($issue_id);
            }
            if ($search) {
                // dd($search);
                $query->where('title', 'LIKE', '%'.$search.'%');
                $query->orWhere('abstract', 'LIKE', '%'.$search.'%');
                $query->orWhere('content', 'LIKE', '%'.$search.'%');
            }

            // Application du tri
            $query->orderBy($sortBy, $sortOrder);

            // Paginer les résultats
            $articles = $query->paginate($limit);

            // Récupération de toutes les disciplines pour le filtre
            $disciplines = Discipline::with(['articles' => function ($query) {
                $query->orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
            }])
            ->whereHas('articles', function ($query) {
                $query->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
            })->orderBy('name')->get();
            $latestIssues = Issue::with(['articles' => function ($query) {
                $query->orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
            }])
            ->whereHas('articles', function ($query) {
                $query->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
            })->orderBy('publication_date', 'desc')->take(6)->get();

            return view('pages.web.articles.index', compact('articles', 'disciplines', 'counts', 'latestIssues', 'issue'));
        } catch (\Throwable $th) {
            // dd($th->getMessage());

            return view('errors.500');
        }
    }

    public function show($article_id)
    {
        try {
            $article = Article::with(['issue', 'issue.volume', 'files', 'articleUsers', 'user'])->find($article_id);
            $similors = Article::where('discipline_id', $article->discipline_id)->take(10)->get();

            return view('pages.web.articles.show', compact('article', 'similors'));
        } catch (\Throwable $th) {
            // dd($th->getMessage(), $th->getLine());

            return view('errors.500');
        }
    }
}
