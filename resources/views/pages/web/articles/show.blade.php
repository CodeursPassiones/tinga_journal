@extends('base')
@section('banner')
    <!--************************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         Inner Banner Start
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       *************************************-->
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Numéro : {{ $article->issue->title }} / {{ $article->title }}
                        </h1>

                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Article/Détails </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         Inner Banner End
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       *************************************-->
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
                                <h4 style="font-family:'Times New Roman', Times, serif"><strong>Volume :
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

                                {{-- <li><a href="javascript:void(0);" class="sj-action-link"><i
                                            class="fa fa-download"></i><span>Télécharger</span></a></li> --}}
                            </ul>

                            <!-- Image de l'article -->
                            <figure class="sj-postimg">
                                <img src="{{ asset($article->image_path) }}" alt="Image de l'article" id="artId">
                                <style>
                                    #artId {
                                        width: 800px;
                                        height: 360px;
                                        min-width: 200px;
                                        /* object-fit: fill !important; */
                                        min-height: 360px;
                                        max-height: 360px;
                                        border-radius: 8px;
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                    }
                                </style>
                            </figure>

                            <!-- Détails de l'article -->
                            <div class="sj-articledescription sj-sectioninnerspace">
                                <h3 class="article-title"
                                    style="font-family: 'Times New Roman', Times, serif; text-align:center; font-size:25px">
                                    <strong>Titre : {{ $article->title }}</strong>
                                </h3>
                                {{-- <h5 style="text-align: center">
                                    @foreach ($article->files as $file)
                                        <li><a href="{{ asset($file->path) }}" download class="sj-file-link"><i
                                                    class="fa fa-download"></i>
                                                {{ $file->name }}</a></li>
                                    @endforeach
                                </h5 style="text-align: center"> --}}
                                <style>
                                    .mt-100 {
                                        margin-top: 100px;
                                    }

                                    .mb-100 {
                                        margin-bottom: 100px;
                                    }

                                    .card {
                                        position: relative;
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        -webkit-box-orient: vertical;
                                        -webkit-box-direction: normal;
                                        -ms-flex-direction: column;
                                        flex-direction: column;
                                        min-width: 0;
                                        word-wrap: break-word;
                                        background-color: #fff;
                                        background-clip: border-box;
                                        border: 0px solid transparent;
                                        border-radius: 0px;
                                    }

                                    .card-body {
                                        -webkit-box-flex: 1;
                                        -ms-flex: 1 1 auto;
                                        flex: 1 1 auto;
                                        padding: 1.25rem;
                                    }

                                    ul.list-style-none li {
                                        list-style: none;
                                    }

                                    ul.list-style-none li a {
                                        color: #673AB7;
                                        padding: 8px 0px;
                                        display: block;
                                        text-decoration: none;
                                    }

                                    .m-t-5 {
                                        margin-top: 5px;
                                    }

                                    .w-30px {
                                        width: 30px;
                                    }
                                </style>
                                <div class="card">
                                    <ul class="list-style-none">
                                        <li class="d-flex no-block card-body border-top">
                                            <i class="ti-id-badge w-30px m-t-5"></i>
                                            <div>
                                                <p class="m-b-0 font-medium p-0" data-abc="true">Informations
                                                    sur le ou les auteur(s)</p>
                                                @foreach ($article->articleUsers as $author)
                                                    <p class="text-muted lnr lnr-user">
                                                        Nom :
                                                        {{ $author->user->firstname . ' ' . $author->user->lastname }}</p>
                                                    <p class="text-muted lnr lnr-envelope"> Email :
                                                        {{ $author->user->email }}
                                                    </p>
                                                @endforeach
                                            </div>
                                            <div class="ml-auto">
                                                <div class="tetx-right">
                                                    <span>Publier le :
                                                        {{ \Carbon\Carbon::parse($article->publication_date)->locale('fr')->isoFormat('D MMMM YYYY') }}
                                                    </span>
                                                    <h6> A :
                                                        {{ \Carbon\Carbon::parse($article->publication_date)->locale('fr')->isoFormat('HH:mm') }}
                                                    </h6>
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
                                                    <p class="m-b-0 font-medium p-0" data-abc="true">
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

    <style>
        .sj-action-link {
            color: #007bff;
            text-decoration: none;
        }

        .sj-action-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .article-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .sj-articleauthors .sj-username a {
            color: #007bff;
            text-decoration: none;
        }

        .sj-articleauthors .sj-username a:hover {
            text-decoration: none;
        }

        .sj-description h5 {
            color: #0056b3;
            margin-top: 1rem;
            font-size: 1.2rem;
        }

        .sj-extrainfo p {
            margin-bottom: 0.5rem;
        }

        .sj-file-link {
            color: #007bff;
            text-decoration: none;
        }

        .sj-file-link:hover {
            text-decoration: underline;
        }

        .sj-widgetheading h3 {
            color: #0056b3;
            font-size: 1.2rem;
        }

        .sj-relatedarticles li {
            margin-bottom: 1rem;
        }
    </style>
@endsection
