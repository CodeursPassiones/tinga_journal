@extends('base')
@section('banner')
    <!--************************************
                                                                                                                                                                                                                                                                                                     Home Banner Start
                                                                                                                                                                                                                                                                                                   *************************************-->
    @if ($lastArticle)
        <div id="sj-homebanner" class="sj-homebanner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="sj-postbook">
                            <figure class="sj-featureimg">
                                <a class="sj-btnvideo" href="#"><i class="lnr lnr-book"></i><span>Dernière
                                        publication</span></a>
                                <div class="sj-bookimg">
                                    <div class="sj-frontcover"><img
                                            src={{ $lastArticle->image_path === 'assets/images/thumbnails/img-02.jpg' ? asset($lastArticle->image_path) : asset($lastArticle->image_path) }}
                                            alt="image description" id="bannerImgArt">

                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="sj-bannercontent">
                            <h1 class="article-tnr">
                                {{ Str::limit($lastArticle->abstract, 125) }}</h1>
                            <div class="sj-description">
                                <p>{{ Str::limit($lastArticle->abstract, 250) }}<strong>...
                                        <a href={{ route('web.articles.show', $lastArticle->id) }}>Lire
                                            Plus
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

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
