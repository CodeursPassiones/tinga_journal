<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Volume;
use Illuminate\Support\Facades\Cache;

class SitemapWebController extends Controller
{
    public function index()
    {
        $xml = Cache::remember('sitemap.xml', 3600, function () {
            $urls = [['loc' => route('home'), 'priority' => '1.0']];

            foreach (['web.articles.list', 'web.volumes.list', 'web.administration.about', 'web.instructions.normes',
                'web.instructions.rapporteurs', 'web.administration.redaction', 'web.administration.gestion',
                'web.administration.scientifique'] as $name) {
                $urls[] = ['loc' => route($name), 'priority' => '0.7'];
            }

            foreach (Volume::all() as $volume) {
                $urls[] = ['loc' => route('web.issues.list', $volume->id), 'priority' => '0.6'];
            }

            Article::where('status', 'PUBLISHED')->where('state', 'VALID')
                ->orderBy('id')
                ->get(['id', 'updated_at'])
                ->each(function ($article) use (&$urls) {
                    $urls[] = [
                        'loc' => route('web.articles.show', $article->id),
                        'lastmod' => $article->updated_at?->toAtomString(),
                        'priority' => '0.8',
                    ];
                });

            return view('sitemap', compact('urls'))->render();
        });

        return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }
}
