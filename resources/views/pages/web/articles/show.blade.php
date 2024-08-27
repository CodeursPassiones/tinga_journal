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
                                <li><a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Email Us</span></a>
                                </li>
                                <li><a href="javascript:void(0);"><i class="fa fa-download"></i><span>Download</span></a>
                                </li>
                            </ul>
                            <figure class="sj-articledetailimg">
                                <img src={{ asset($article->image_url) }} alt="image description" id="artId">
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
                        <div class="sj-widget sj-widgetsearch">
                            <div class="sj-widgetcontent">
                                <form class="sj-formtheme sj-formsearch">
                                    <fieldset>
                                        <input type="search" name="search" class="form-control" placeholder="Search here">
                                        <button type="submit" class="sj-btnsearch"><i
                                                class="lnr lnr-magnifier"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
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
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">{{ $author->user->firstname . ' ' . $author->user->lastnmae }}</a></span>
                                                        @endforeach
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

                        <div class="sj-widget sj-widgetimpactfector">
                            <div class="sj-widgetcontent">
                                <ul>
                                    <li>
                                        <h3>Impact Factor<span>2.125</span></h3>
                                        <h3>5 Year Impact Factor<span>2.853</span></h3>
                                    </li>
                                    <li>
                                        <h3>Dr. Desmond Bratton</h3>
                                        <div class="sj-description">
                                            <p>Consectetur adipisicing elit sedo amod tempor incididunt. <a
                                                    href="javascript:void(0)">Read More</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sj-widget sj-widgetnoticeboard">
                            <div class="sj-widgetheading">
                                <h3>Notice Board</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <ul>
                                    <li><a href="javascript:void(0);">Adipisicing elitaium sed dotas eiusm tempor
                                            incididunt utae labore etiate dolore magna aliqua enim.</a></li>
                                    <li><a href="javascript:void(0);">Labore etiat dolore magna aliquaen ad minim
                                            veniam.</a></li>
                                    <li><a href="javascript:void(0);">Duis aute irure dolor in reprehender</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sj-widget sj-widgetadd">
                            <span class="sj-headtitle">Advertisment 270 x270</span>
                            <div class="sj-widgetcontent">
                                <figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/widget-add.jpg"
                                            alt="image description"></a></figure>
                            </div>
                        </div>
                        <div class="sj-widget sj-widgetquestions">
                            <div class="sj-widgetheading">
                                <h3>Question Of The Week</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <div class="sj-description">
                                    <p>Consectetur adipisicing elit, sed aeiuse tempor incididunt ut labore etamiudon magna
                                        aliqua enim ad minim?</p>
                                </div>
                                <div class="sj-questions">
                                    <div class="sj-selectgroup">
                                        <span class="sj-radio">
                                            <input id="sj-qone" type="radio" name="question" value="qone"
                                                checked="">
                                            <label for="sj-qone">Sputum stain for acid-fast bacilli</label>
                                        </span>
                                        <span class="sj-radio">
                                            <input id="sj-qtwo" type="radio" name="question" value="qtwo">
                                            <label for="sj-qtwo">Pleural biopsy</label>
                                        </span>
                                        <span class="sj-radio">
                                            <input id="sj-qthree" type="radio" name="question" value="qthree">
                                            <label for="sj-qthree">Pleural fluid amylase</label>
                                        </span>
                                        <span class="sj-radio">
                                            <input id="sj-qfour" type="radio" name="question" value="qfour">
                                            <label for="sj-qfour">Pleural fluid cytology</label>
                                        </span>
                                    </div>
                                    <a class="sj-btn" href="javascript:void(0);">Submit Now</a>
                                </div>
                            </div>
                        </div>


                        <div class="sj-widget sj-widgetadd">
                            <div class="sj-widgetcontent">
                                <figure class="sj-addimage"><a href="javascript:void(0);"><img
                                            src="images/widget-add2.jpg" alt="image description"></a></figure>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
