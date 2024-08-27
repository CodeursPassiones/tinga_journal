<?php

namespace App\Http\Controllers\Web;

use App\Models\Issue;
use App\Models\Article;
use App\Http\Controllers\Controller;

class WebsiteWebController extends Controller
{
    public function home()
    {
        try {
            $lastArticle = Article::orderBy('publication_date', 'desc')->first();
            $latestIssues = Issue::with(['articles' => function ($query) {
                $query->orderBy('publication_date', 'desc');
            }])
            ->whereHas('articles')
            ->orderBy('publication_date', 'desc')
            ->take(6)
            ->get();

            // Regrouper les articles par groupes de quatre
            $groupedIssues = $latestIssues->map(function ($issue) {
                $issue->groupedArticles = $issue->articles->chunk(4); // Grouper les articles par 4

                return $issue;
            });

            // Regrouper les articles par année pour chaque numéro
            $groupedIssues = $latestIssues->groupBy(function ($issue) {
                return $issue->publication_date->format('Y'); // Grouper par année
            });
            $threeLatest = Article::orderBy('publication_date', 'desc')->take(3)->get();
            $latestArticles = Article::orderBy('publication_date', 'desc')->take(6)->get()->chunk(3);
            // Regrouper les volumes par décennie

            return view('pages.web.home.index', compact('lastArticle', 'latestIssues', 'threeLatest', 'latestArticles', 'groupedIssues'));
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.404');
        }
    }

    public function aboutUs()
    {
        try {
            return view('pages.web.about.index');
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.404');
        }
    }
}
