<?php

namespace App\BladeDirectives;

use App\Models\Article;

class CustomDirectives
{
    public static function getLastArticle()
    {
        $lastArticle = Article::with(['issue', 'issue.volume'])->orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->first();

        return $lastArticle;
    }
}
