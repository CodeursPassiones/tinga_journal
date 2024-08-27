<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Issue;

class WebsiteWebController extends Controller
{
    public function home()
    {
        try {
            $lastArticle = Article::orderBy('publication_date', 'desc')->first();
            $latestIssues = Issue::with(['articles'])->whereHas('articles')->orderBy('publication_date', 'desc')->take(6)->get();
            $threeLatest = Article::orderBy('publication_date', 'desc')->take(3)->get();
            $latestArticles = Article::orderBy('publication_date', 'desc')->take(9)->get();
            // Regrouper les volumes par décennie

            return view('pages.web.home.index', compact('lastArticle', 'latestIssues', 'threeLatest', 'latestArticles'));
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
