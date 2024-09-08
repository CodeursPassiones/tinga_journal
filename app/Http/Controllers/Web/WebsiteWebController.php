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
            $lastArticle = Article::orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->first();
            $latestIssues = Issue::with(['articles' => function ($query) {
                $query->orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
            }])
            ->whereHas('articles', function ($query) {
                $query->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID');
            })
            ->orderBy('publication_date', 'desc')
            ->take(6)
            ->get();

            $threeLatest = Article::orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->take(3)->get();
            $latestArticles = Article::orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->take(6)->get()->chunk(3);

            return view('pages.web.home.index', compact('lastArticle', 'latestIssues', 'threeLatest', 'latestArticles'));
        } catch (\Throwable $th) {
            // dd($th->getMessage());

            return view('errors.404');
        }
    }

    public function aboutUs()
    {
        try {
            return view('pages.web.about.index');
        } catch (\Throwable $th) {
            // dd($th->getMessage());

            return view('errors.404');
        }
    }
}
