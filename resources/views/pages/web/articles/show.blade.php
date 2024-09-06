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
                        <h1>{{ $article->title }}
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
                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div id="sj-content" class="sj-content">
                        <div class="sj-articledetail">
                            <ul class="sj-downloadprint">
                                <li><a href="javascript:void(0);"><i class="fa fa-print"></i><span>Print Now</span></a></li>

                                @auth
                                    <li><a href={{ route('admin.articles.view.metadata', $article->matricule) }}><i
                                                class="fa fa-pencil"></i><span>Modifier</span></a>
                                    </li>
                                    @switch($article->status)
                                        @case('DRAFT')
                                            <li><a href={{ route('admin.articles.publish', $article->id) }}><i class="fa fa-share"
                                                        id="shareArticle"></i><span>Publier</span></a>
                                            </li>
                                        @break

                                        @case('PUBLISHED')
                                            <li><a href={{ route('admin.articles.hide', $article->id) }}><i class="fa fa-eye-slash"
                                                        id="hideArticle"></i><span>Cacher</span></a>
                                            </li>
                                        @break

                                        @default
                                            <li><a href="#"><i class="fa fa-share" id="hideArticle"></i><span>Cacher</span></a>
                                            </li>
                                    @endswitch


                                @endauth
                                <li><a href="javascript:void(0);"><i class="fa fa-download"></i><span>Download</span></a>
                                </li>
                            </ul>
                            <figure class="sj-articledetailimg">
                                <img src={{ asset($article->image_path) }} alt="image description" id="artId">
                                <style>
                                    #artId {
                                        width: 870px;
                                        height: 250px;
                                        min-width: 870px;
                                        max-width: 870px;
                                        min-height: 250px;
                                        max-height: 250px;
                                        object-fit: contain !important;
                                    }
                                </style>
                            </figure>
                            <div class="sj-articledescription sj-sectioninnerspace">

                                @foreach ($article->articleUsers as $author)
                                    <span class="sj-username"><a
                                            href="javascript:void(0);">{{ $author->user->firstname . ' ' . $author->user->lastnmae }}</a></span>
                                @endforeach

                                <h4>{{ $article->title }}</h4>
                                <div class="sj-description">
                                    <p>{!! $article->abstract !!}
                                    </p>
                                    <p>{!! $article->content !!}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <aside id="sj-sidebar" class="sj-sidebar">

                        @if ($similors->isEmpty())
                            <p></p>
                        @else
                            <div class="sj-widget sj-widgetrelatedarticles">

                                <div class="sj-widgetheading">
                                    <h3> Articles Similares</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <ul>
                                        @foreach ($similors as $simArticle)
                                            <li>
                                                <span class="sj-username"><a
                                                        href={{ route('web.articles.show', $simArticle->id) }}>
                                                        @foreach ($simArticle->articleUsers as $author)
                                                            {{ $author->user->firstname . ' ' . $author->user->lastnmae }} |
                                                        @endforeach
                                                    </a></span>
                                                <span class="sj-cal"><a
                                                        href={{ route('web.articles.show', $simArticle->id) }}>
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
