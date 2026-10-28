@extends('base')
@section('title', $article->title . ' | Tɩ́ɩ́ŋá')
@section('description', \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($article->abstract ?? $article->title)))), 160))
@section('keywords', $article->keywords ?: 'tinga, revue tinga, "la Revue Langues, Littératures, Arts et Culture", LaLD, "CAMES" ')
@section('og_type', 'article')
@section('og_image', $article->image_path ? asset($article->image_path) : asset('assets/images/logo.png'))
@push('head')
    @php
        $authors = $article->articleUsers->map(fn ($a) => trim($a->user->lastname . ', ' . $a->user->firstname))->filter()->values();
        $pubDate = $article->publication_date;
        $pdf = $article->files->first(fn ($f) => str_ends_with(strtolower($f->path ?? ''), '.pdf'));
        $abstractText = trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($article->abstract ?? ''))));
        $ld = [
            '@context' => 'https://schema.org',
            '@type' => 'ScholarlyArticle',
            'headline' => $article->title,
            'name' => $article->title,
            'url' => route('web.articles.show', $article->id),
            'inLanguage' => 'fr',
            'abstract' => $abstractText ?: null,
            'keywords' => $article->keywords ?: null,
            'datePublished' => $pubDate?->toIso8601String(),
            'image' => $article->image_path ? asset($article->image_path) : null,
            'author' => $authors->map(fn ($n) => ['@type' => 'Person', 'name' => $n])->all(),
            'isPartOf' => [
                '@type' => 'PublicationIssue',
                'name' => $article->issue->title,
                'isPartOf' => [
                    '@type' => 'PublicationVolume',
                    'name' => $article->issue->volume->title,
                    'isPartOf' => ['@type' => 'Periodical', 'name' => 'Tɩ́ɩ́ŋá'],
                ],
            ],
            'identifier' => $article->doi ? 'https://doi.org/' . $article->doi : null,
        ];
        $ld = array_filter($ld, fn ($v) => $v !== null && $v !== []);
    @endphp
    {{-- Google Scholar (Highwire Press tags) --}}
    <meta name="citation_title" content="{{ $article->title }}">
    @foreach ($authors as $name)
        <meta name="citation_author" content="{{ $name }}">
    @endforeach
    @if ($pubDate)
        <meta name="citation_publication_date" content="{{ $pubDate->format('Y/m/d') }}">
    @endif
    <meta name="citation_journal_title" content="Tɩ́ɩ́ŋá">
    <meta name="citation_volume" content="{{ $article->issue->volume->title }}">
    <meta name="citation_issue" content="{{ $article->issue->title }}">
    <meta name="citation_language" content="fr">
    <meta name="citation_abstract_html_url" content="{{ route('web.articles.show', $article->id) }}">
    @if ($pdf)
        <meta name="citation_pdf_url" content="{{ asset($pdf->path) }}">
    @endif
    @if ($article->doi)
        <meta name="citation_doi" content="{{ $article->doi }}">
    @endif
    @if ($article->keywords)
        <meta name="citation_keywords" content="{{ $article->keywords }}">
    @endif
    <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}</script>
@endpush
@section('banner')

    <div class="sj-innerbanner show-article">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Numéro : {{ $article->issue->title }} / {{ $article->title }}
                        </h1>

                        <ol class="sj-breadcrumb">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Article/Détails </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('web-content')
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <!-- Contenu principal de l'article -->
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div id="sj-content" class="sj-content">
                        <div class="sj-articledetail">
                            <!-- Barre d'action -->
                            <span style="text-align: center;">
                                <h4 class="article-tnr"><strong>Volume :
                                        {{ $article->issue->volume->title }}
                                        ({{ $article->issue->volume->year }})</strong></h4>
                            </span>
                            <span style="text-align: center">
                                <h4>Numéro : {{ $article->issue->title }}
                                    ({{ \Carbon\Carbon::parse($article->issue->publication_date)->locale('fr')->isoFormat('D MMMM YYYY') }}
                                    )</h4>
                            </span>
                            <ul class="sj-downloadprint">


                                @auth

                                    @switch($article->status)
                                        @case('PUBLISHED')
                                            <li><a href="{{ route('admin.articles.hide', $article->id) }}" class="sj-action-link"><i
                                                        class="fa fa-eye-slash"></i><span>Cacher</span></a></li>
                                        @break

                                        @default
                                            {{-- <li><a href="#" class="sj-action-link"><i
                                                        class="fa fa-ban"></i><span>Archiver</span></a></li> --}}
                                    @endswitch
                                @endauth

                                {{-- <li><a href="#" class="sj-action-link"><i
                                            class="fa fa-download"></i><span>Télécharger</span></a></li> --}}
                            </ul>

                            <!-- Image de l'article -->
                            <figure class="sj-postimg">
                                <img src="{{ asset($article->image_path) }}" alt="Image de l'article" id="artId">

                            </figure>

                            <!-- Détails de l'article -->
                            <div class="sj-articledescription sj-sectioninnerspace">
                                <h3 class="article-title">
                                    <strong>Titre : {{ $article->title }}</strong>
                                </h3>
                                <h5 style="text-align: center">
                                    @foreach ($article->files as $file)
                                        <li><a href="{{ asset($file->path) }}" download class="sj-file-link"><i
                                                    class="fa fa-download"></i>
                                                {{ $file->name }}</a></li>
                                    @endforeach
                                </h5 style="text-align: center">

                                <div class="card">
                                    <ul class="list-style-none">
                                        <li class="d-flex no-block card-body border-top">
                                            <i class="ti-id-badge w-30px m-t-5"></i>
                                            <div class="row w-100">
                                                <div class="col-md-8 col-sm-12">
                                                    <p class="m-b-0 font-medium p-0" data-abc="true">Informations sur le ou
                                                        les auteur(s)</p>
                                                    @foreach ($article->articleUsers as $author)
                                                        <p class="text-muted lnr lnr-user">
                                                            Nom :
                                                            {{ $author->user->firstname . ' ' . $author->user->lastname }}
                                                        </p>
                                                        <p class="text-muted lnr lnr-envelope"> Email :
                                                            {{ $author->user->email }}</p>
                                                    @endforeach
                                                </div>
                                                <div class="col-md-4 col-sm-12 ml-auto">
                                                    <div class="text-right">
                                                        <span>Publier le :
                                                            {{ \Carbon\Carbon::parse($article->publication_date)->locale('fr')->isoFormat('D MMMM YYYY') }}</span>
                                                        <h6> A :
                                                            {{ \Carbon\Carbon::parse($article->publication_date)->locale('fr')->isoFormat('HH:mm') }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="d-flex no-block card-body border-top">
                                            <i class="ti-agenda w-30px m-t-5"></i>
                                            <div>
                                                <p class="m-b-0 font-medium p-0" data-abc="true" style="margin-left: 20px">
                                                    Le résumé</p>
                                                <p class="text-muted">
                                                    {!! $article->abstract !!}
                                                </p>
                                            </div>
                                        </li>
                                        @if ($article->en_abstract)
                                            <li class="d-flex no-block card-body border-top">
                                                <i class="lnr lnr-book w-30px m-t-5"></i>
                                                <div>
                                                    <p class="m-b-0 font-medium p-0" data-abc="true"
                                                        style="margin-left: 20px">
                                                        Abstract</p>
                                                    <p class="text-muted">
                                                        {!! $article->en_abstract !!}
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                        @if ($article->files->isNotEmpty())
                                            <li class="d-flex no-block card-body border-top">
                                                <i class="fa fa-paperclip w-30px m-t-5"></i>
                                                <div>
                                                    <p class="m-b-0 font-medium p-0" data-abc="true">
                                                        fichier(s) associé(s)</p>
                                                    <p class="text-muted">
                                                    <ul>
                                                        @foreach ($article->files as $file)
                                                            <li><a href="{{ route('web.files.download', $file->id) }}"
                                                                    class="sj-file-link"><i class="fa fa-download"></i>
                                                                    {{ $file->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                        <li class="d-flex no-block card-body border-top">
                                            <i class="fa fa-tags w-30px m-t-5"></i>
                                            <div>
                                                <p class="m-b-0 font-medium p-0" data-abc="true">
                                                    Les mots clés</p>
                                                <p class="text-muted">
                                                    {{ $article->keywords }}
                                                </p>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="tetx-right">
                                                    <span><i class="fa fa-id-badge"></i> Matricule :
                                                        {{ $article->matricule }}
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        @if ($article->citation)
                                            <li class="d-flex no-block card-body border-top">
                                                <i class="lnr lnr-pencil w-30px m-t-5"></i>
                                                <div>
                                                    <p class="m-b-0 font-medium p-0" data-abc="true"
                                                        style="margin-left: 20px">
                                                        Comment citer l'article</p>
                                                    <p class="text-muted">
                                                        {!! $article->citation !!}
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div> <!-- Informations supplémentaires -->
                                <div class="sj-extrainfo">
                                    <!-- Informations supplémentaires -->
                                    <div class="sj-extrainfo">
                                        @if ($article->doi)
                                            <p><i class="fa fa-link"></i> <strong>DOI : </strong><a
                                                    href="https://doi.org/{{ $article->doi }}"
                                                    target="_blank">{{ $article->doi }}</a></p>
                                        @endif

                                        @if ($article->references)
                                            <p><i class="fa fa-book"></i> <strong>Références :
                                                </strong>{!! $article->references !!}
                                            </p>
                                        @endif
                                        @if ($article->prefix)
                                            <p><i class="fa fa-tag"></i> <strong>Préfixe : </strong>{{ $article->prefix }}
                                            </p>
                                        @endif
                                        @if ($article->comment)
                                            <p><i class="fa fa-comments"></i> <strong>Commentaires :
                                                </strong>{!! $article->comment !!}</p>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar: Articles Similaires -->
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <aside id="sj-sidebar" class="sj-sidebar">
                        @if ($similors->isEmpty())
                            <p>Aucun article similaire trouvé.</p>
                        @else
                            <div class="sj-widget sj-widgetrelatedarticles">
                                <div class="sj-widgetheading">
                                    <h3 style="text-align: center"><i class="fa fa-lightbulb-o"></i> Articles Similaires
                                    </h3>
                                </div>
                                <div class="sj-widgetcontent" style="margin-left:10px">
                                    <ul class="sj-relatedarticles">
                                        @foreach ($similors as $simArticle)
                                            <li>
                                                <span class="sj-username"><a
                                                        href="{{ route('web.articles.show', $simArticle->id) }}">
                                                        @foreach ($simArticle->articleUsers as $author)
                                                            {{ $author->user->lastname }}
                                                            |
                                                        @endforeach
                                                    </a></span>
                                                <span class="sj-cal"><a
                                                        href="{{ route('web.articles.show', $simArticle->id) }}">
                                                        @formatDate($simArticle->publication_date)
                                                    </a></span>
                                                <div class="sj-description">
                                                    <p>{{ $simArticle->title }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </div>


@endsection
