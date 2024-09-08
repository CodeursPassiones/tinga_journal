@extends('base')
@section('banner')
    <!--************************************
                                                                                                                                                 Home Banner Start
                                                                                                                                               *************************************-->
    <div id="sj-homebanner" class="sj-homebanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="sj-postbook">
                        <figure class="sj-featureimg">
                            <a class="sj-btnvideo" href="javascript:void(0);"><i class="lnr lnr-book"></i><span>Dernière
                                    publication</span></a>
                            <div class="sj-bookimg">
                                <div class="sj-frontcover"><img
                                        src={{ $article->image_path === 'assets/images/thumbnails/img-02.jpg' ? asset($article->image_path) : Storage::url($article->image_path) }}
                                        alt="image description" id="bannerImgArt">
                                    <style>
                                        #bannerImgArt {
                                            width: 443px;
                                            height: 552px;
                                            min-width: 443px;
                                            max-width: 443px;
                                            min-height: 552px;
                                            max-height: 552px;
                                            object-fit: contain !important;
                                        }
                                    </style>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="sj-bannercontent">
                        <h1>{{ $lastArticle->title }}</h1>
                        <div class="sj-description">
                            <p>>{!! Str::limit($lastArticle->abstract, 100) !!}... <a href={{ route('web.articles.show', $lastArticle->id) }}>Lire
                                    Plus</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
                                                                                                                                                 Home Banner End
                                                                                                                                               *************************************-->
@endsection
@section('web-content')
    @include('pages.web.home.salutation')
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-9">
                    <div id="sj-content" class="sj-content">
                        <!--************************************
                                                                                                                                                                Editor's Pick Start
                                                                                                                                                        *************************************-->
                        @include('pages.web.home.latest-articles')
                        <!--************************************
                                                                                                                                                                Editor's Pick End
                                                                                                                                                        *************************************-->
                        <!--************************************
                                                                                                                                                                Previous Posts Start
                                                                                                                                                        *************************************-->
                        @include('pages.web.home.lates-issues')
                        <!--************************************
                                                                                                                                                                Previous Posts End
                                                                                                                                                        *************************************-->

                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-3 ">
                    @include('partials.right-aside')
                </div>
            </div>
        </div>
    </div>
@endsection
