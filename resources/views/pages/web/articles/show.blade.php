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

                        <h1>Vol {{ $article->issue->volume->year . ', ' }}
                        </h1>
                        <h1>No {{ $article->issue->number . ', ' }}
                        </h1>

                        <h1> {{ $article->title }}
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
                            <ul class="sj-downloadprint">
                                <li><a href="javascript:void(0);" class="sj-action-link"><i
                                            class="fa fa-print"></i><span>Imprimer</span></a></li>

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
                            <figure class="sj-articledetailimg">
                                <img src="{{ $article->image_path === 'assets/images/thumbnails/img-02.jpg' ? asset($article->image_path) : Storage::url($article->image_path) }}"
                                    alt="Image de l'article" id="artId">
                                <style>
                                    #artId {
                                        width: 100%;
                                        height: 250px;
                                        object-fit: cover;
                                        border-radius: 8px;
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                    }
                                </style>
                            </figure>

                            <!-- Détails de l'article -->
                            <div class="sj-articledescription sj-sectioninnerspace">
                                <h4 class="article-title">{{ $article->title }}</h4>

                                <!-- Auteurs de l'article -->
                                <div class="sj-articleauthors">
                                    @foreach ($article->articleUsers as $author)
                                        <span class="sj-username"><a
                                                href="javascript:void(0);">{{ $author->user->firstname . ' ' . $author->user->lastname }}</a></span>
                                    @endforeach
                                </div>

                                <!-- Résumé et Contenu de l'article -->
                                <div class="sj-description">
                                    <h5><i class="fa fa-file-text"></i> Résumé</h5>
                                    <p>{!! $article->abstract !!}</p>

                                    {{-- <h5><i class="fa fa-file"></i> Contenu</h5>
                                    <p>{!! $article->content !!}</p> --}}
                                </div>
                                @if ($article->en_abstract)
                                    <div class="sj-description">
                                        <h5><i class="fa fa-file-text"></i> Résumé en Anglais</h5>
                                        <p>{!! $article->en_abstract !!}</p>

                                        {{-- <h5><i class="fa fa-file"></i> Contenu</h5>
                                    <p>{!! $article->content !!}</p> --}}
                                    </div>
                                @endif
                                @if ($article->citation)
                                    <div class="sj-description">
                                        <h5><i class="fa fa-file-text"></i> Citation</h5>
                                        <p>{!! $article->citation !!}</p>

                                        {{-- <h5><i class="fa fa-file"></i> Contenu</h5>
                                <p>{!! $article->content !!}</p> --}}
                                    </div>
                                @endif
                                <!-- Informations supplémentaires -->
                                <div class="sj-extrainfo">
                                    @if ($article->doi)
                                        <p><i class="fa fa-link"></i> <strong>DOI : </strong><a
                                                href="https://doi.org/{{ $article->doi }}"
                                                target="_blank">{{ $article->doi }}</a></p>
                                    @endif
                                    @if ($article->keywords)
                                        <p><i class="fa fa-tags"></i> <strong>Mots-clés : </strong>{{ $article->keywords }}
                                        </p>
                                    @endif
                                    @if ($article->references)
                                        <p><i class="fa fa-book"></i> <strong>Références : </strong>{!! $article->references !!}
                                        </p>
                                    @endif
                                    @if ($article->files->isNotEmpty())
                                        <p><i class="fa fa-paperclip"></i> <strong>Fichiers associés :</strong></p>
                                        <ul>
                                            @foreach ($article->files as $file)
                                                <li><a href="{{ Storage::url($file->path) }}" download
                                                        class="sj-file-link"><i class="fa fa-download"></i>
                                                        {{ $file->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    @if ($article->prefix)
                                        <p><i class="fa fa-tag"></i> <strong>Préfixe : </strong>{{ $article->prefix }}</p>
                                    @endif
                                    @if ($article->comment)
                                        <p><i class="fa fa-comments"></i> <strong>Commentaires :
                                            </strong>{!! $article->comment !!}</p>
                                    @endif
                                    @if ($article->matricule)
                                        <p><i class="fa fa-id-badge"></i> <strong>Matricule :
                                            </strong>{{ $article->matricule }}</p>
                                    @endif
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
                                    <h3><i class="fa fa-lightbulb-o"></i> Articles Similaires</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <ul class="sj-relatedarticles">
                                        @foreach ($similors as $simArticle)
                                            <li>
                                                <span class="sj-username"><a
                                                        href="{{ route('web.articles.show', $simArticle->id) }}">
                                                        @foreach ($simArticle->articleUsers as $author)
                                                            {{ $author->user->firstname . ' ' . $author->user->lastname }}
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
            text-decoration: underline;
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
