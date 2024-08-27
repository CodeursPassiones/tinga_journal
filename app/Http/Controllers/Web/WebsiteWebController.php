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
            $latestIssues = Issue::with(['articles'])->whereHas('articles')->orderBy('publication_date', 'desc')->take(6)->get();
            $threeLatest = Article::orderBy('publication_date', 'desc')->take(3)->get();
            $latestArticles = Article::orderBy('publication_date', 'desc')->take(6)->get()->chunk(3);
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
