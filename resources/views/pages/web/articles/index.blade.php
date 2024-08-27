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
                        <h1>Liste Articles @if ($issue)
                                du Numéro : {{ $issue->number }}.
                            @endif
                        </h1>

                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Article/Liste</a></li>
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
                <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                    <aside id="sj-sidebarvtwo" class="sj-sidebar">
                        <div class="sj-widget sj-widgetsearch">
                            <div class="sj-widgetcontent">
                                <form class="sj-formtheme sj-formsearch" id="searchForm">
                                    <fieldset>
                                        <input type="search" name="search" class="form-control" placeholder="Recherche">
                                        <button type="submit" class="sj-btnsearch" id="searchBtn"><i
                                                class="lnr lnr-magnifier"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="sj-widget sj-widgetvolissue">

                            <div class="sj-widgetheading">
                                <h3>Par Volume et Numéro</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <form class="sj-formtheme sj-formissuevol">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="volissue" class="form-control"
                                                placeholder="Vol no.">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="issuenumber" class="form-control"
                                                placeholder="Issue no.">
                                        </div>

                                    </fieldset>
                                </form>
                            </div>

                        </div>

                        <div class="sj-widget sj-widgetrecentissues">
                            <div class="sj-widgetheading">
                                <h3>Numéros Récent</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <ul>
                                    <li>
                                        <a href={{ route('web.articles.list') }}>
                                            <span>

                                                Voir Tout
                                            </span>
                                            <em>({{ $counts['all'] }})</em>
                                        </a>
                                    </li>
                                    @foreach ($latestIssues as $index => $latestIssue)
                                        <li>
                                            <a href={{ route('web.articles.list', ['issue_id' => $latestIssue->id]) }}>
                                                <span>

                                                    @if ($index === 0)
                                                        Numéro Courant
                                                    @else
                                                        @formatDateOnly($latestIssue->publication_date)
                                                    @endif
                                                </span>
                                                <em>({{ $latestIssue->articles->count() }})</em>
                                            </a>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="sj-widget sj-widgetspeciality">
                            <div class="sj-widgetheading">
                                <h3>Par Disciplines</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <div class="sj-selectgroup">
                                    <span class="sj-checkbox">
                                        <input id="sj-viewall" type="checkbox" name="discipline[]" value="">
                                        <label for="sj-viewall">Voir Tout<em>({{ $counts['all'] }})</em></label>
                                    </span>

                                    @foreach ($disciplines as $discipline)
                                        <span class="sj-checkbox">
                                            <input id="sj-{{ $discipline->id }}" type="checkbox" name="discipline[]"
                                                value="{{ $discipline->name }}">
                                            <label
                                                for="sj-{{ $discipline->id }}">{{ $discipline->name }}<em>({{ $discipline->articles->count() }})</em></label>
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="sj-widget sj-widgetdate">
                            <div class="sj-widgetheading">
                                <h3>Par période</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <div class="sj-selectgroup">
                                    <span class="sj-checkbox">
                                        <input id="sj-viewallthree" type="checkbox" name="period[]" value="">
                                        <label for="sj-viewallthree">Toute les
                                            périodes<em>( {{ $counts['all'] }} )</em></label>
                                    </span>
                                    <span class="sj-checkbox">
                                        <input id="sj-today" type="checkbox" name="period[]" value="today">
                                        <label for="sj-today">Aujourd'hui<em>( {{ $counts['today'] }} )</em></label>
                                    </span>
                                    <span class="sj-checkbox">
                                        <input id="sj-thisweek" type="checkbox" name="period[]" value="this_week">
                                        <label for="sj-thisweek">Cette Semaine<em>( {{ $counts['this_week'] }}
                                                )</em></label>
                                    </span>
                                    <span class="sj-checkbox">
                                        <input id="sj-thismonth" type="checkbox" name="period[]" value="this_month">
                                        <label for="sj-thismonth">Cet mois<em>( {{ $counts['this_month'] }}
                                                )</em></label>
                                    </span>
                                    <span class="sj-checkbox">
                                        <input id="sj-thisyear" type="checkbox" name="period[]" value="this_year">
                                        <label for="sj-thisyear">Cette année<em>( {{ $counts['this_year'] }}
                                                )</em></label>
                                    </span>
                                    <span class="sj-checkbox">
                                        <input id="sj-lastyear" type="checkbox" name="period[]" value="last_year">
                                        <label for="sj-lastyear">L'année Passée<em>( {{ $counts['last_year'] }}
                                                )</em></label>
                                    </span>

                                    <span class="sj-checkbox">
                                        <input id="sj-last10years" type="checkbox" name="period[]"
                                            value="last_10_years">
                                        <label for="sj-last10years">10 Dernières années<em>(
                                                {{ $counts['last_10_years'] }}
                                                )</em></label>
                                    </span>


                                </div>
                                <div class="sj-filterbtns">
                                    <a class="sj-btn" href="javascript:void(0)">Appliquer</a>
                                    <a class="sj-btn" href="javascript:void(0)">Réinitialiser</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-4 col-xl-6">
                    <div id="sj-content" class="sj-content">

                        <span class="sj-showitems">
                            Affichage de <em>{{ $articles->firstItem() }}</em> à <em>{{ $articles->lastItem() }}</em> de
                            <em>{{ $articles->total() }}</em> Articles
                        </span>
                        @if ($issue)
                            @auth

                                <div class="sj-uploadarticle">
                                    <figure class="sj-uploadarticleimg">
                                        <img src={{ asset('assets/images/upload-articlebg.jpg') }} alt="image description">
                                        <figcaption>
                                            <div class="sj-uploadcontent">
                                                <span>Voulez vous publier un article pour ce numéro ?</span>

                                                <a class="sj-btn" href="javascript:void(0);">Publier maintenant </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                            @endauth
                        @endif
                        <div class="sj-articles">
                            <form class="sj-formtheme sj-formsortitems">
                                <fieldset>
                                    <div class="form-group">
                                        <em>Ordonner par: </em>
                                        <span class="sj-select">
                                            <select name="sortBy">
                                                <option value="title">Titre</option>
                                                <option value="user.lastname">Auteur</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <em>Arrangement: </em>
                                        <span class="sj-select">
                                            <select name="sortOrder">
                                                <option value="desc">Décroissant</option>
                                                <option value="asc">Croissant</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <em>Afficher: </em>
                                        <span class="sj-select">
                                            <select name="limit">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>

                                            </select>
                                        </span>
                                    </div>
                                </fieldset>
                            </form>
                            @if ($articles->isEmpty())
                                <h3>Aucun article trouvé :(</h3>
                            @else
                                @foreach ($articles as $article)
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="{{ asset($article->image_url) }}" alt="image description"
                                                class="artImg">
                                            <style>
                                                .artImg {
                                                    width: 200px;
                                                    height: 170px;
                                                    min-width: 200px;
                                                    max-width: 200px;
                                                    min-height: 170px;
                                                    max-height: 170px;
                                                    object-fit: fill !important;
                                                }
                                            </style>
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="article-head">
                                                    <time datetime="2018-12-12"
                                                        class="sj-posttimedate">@formatDate($article->publication_date)</time>
                                                    <span class="sj-username"><a href="javascript:void(0);">
                                                            {{ $article->user->firstname . ' ' . $article->user->lastname }}
                                                        </a>
                                                    </span>
                                                </span>


                                                <h3><a
                                                        href={{ route('web.articles.show', $article->id) }}>{{ $article->title }}</a>
                                                </h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>{{ $article->abstract }}</p>
                                            </div>
                                            <a class="sj-btn" href={{ route('web.articles.show', $article->id) }}>Voir
                                                tout
                                                l'article</a>
                                        </div>
                                    </article>
                                @endforeach

                                <!-- Liens de pagination -->
                                {!! $articles->withQueryString()->links() !!}
                            @endif
                        </div>
                    </div>




                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                    <aside id="sj-sidebar" class="sj-sidebar">


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
                                <figure class="sj-addimage"><a href="javascript:void(0);"><img
                                            src="images/widget-add.jpg" alt="image description"></a></figure>
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
@push('js')
    <script src={{ asset('app-js/web/article/filter.js') }}></script>
@endpush
