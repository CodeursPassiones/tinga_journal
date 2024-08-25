<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;

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

    public function create()
    {
        try {
            return view('pages.admin.articles.create');
        } catch (\Throwable $th) {
            // throw $th;
            // throw $th;
            dd($th->getMessage());

            return view('errors.500');
        }
    }
}
