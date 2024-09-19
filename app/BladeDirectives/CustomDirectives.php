<?php

namespace App\BladeDirectives;

use App\Models\Article;
use App\Models\Issue;

class CustomDirectives
{
    public static function getLastArticle()
    {
        $lastArticle = Article::with(['issue', 'issue.volume'])->orderBy('publication_date', 'desc')->where('status', '=', 'PUBLISHED')->where('state', '=', 'VALID')->first();

        return $lastArticle;
    }

    public static function getLastIssue()
    {
        $lastIssue = Issue::with(['volume'])->orderBy('created_at', 'desc')->first();

        return $lastIssue;
    }
}
