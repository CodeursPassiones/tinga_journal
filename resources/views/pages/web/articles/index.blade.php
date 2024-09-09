@extends('base')
@section('banner')
    <x-banner
        title="{{ 'Liste des articles' .($issue? ' du Numéro : ' .$issue->title .' (' .\Carbon\Carbon::parse($issue->publication_date)->locale('fr')->isoFormat('D MMMM YYYY') .')': '') }}"
        main="Articles/Liste" />
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
                                <h3>Par Numéro</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <form class="sj-formtheme sj-formsearch" id="issueForm">
                                    <fieldset>
                                        <input type="search" name="issue" class="form-control" placeholder="Numéro no">
                                        <button type="submit" class="sj-btnsearch" id="issueBtn"><i
                                                class="lnr lnr-magnifier"></i></button>
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
                                                        ({{ $latestIssue->title }})
                                                    @endif
                                                </span>
                                                <em>({{ $latestIssue->articles->count() }})</em>
                                            </a>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <form action="" id="filterForm">
                            <div class="sj-widget sj-widgetspeciality">
                                <div class="sj-widgetheading">
                                    <h3>Par Disciplines</h3>
                                </div>
                                <div class="sj-widgetcontent">
                                    <div class="sj-selectgroup">
                                        <span class="sj-checkbox">
                                            <input id="sj-viewall" type="checkbox" name="discipline[]" value=""
                                                @if (!request()->has('discipline') || in_array('', request()->get('discipline', []))) checked @endif>
                                            <label for="sj-viewall">Voir Tout<em>({{ $counts['all'] }})</em></label>
                                        </span>

                                        @foreach ($disciplines as $discipline)
                                            <span class="sj-checkbox">
                                                <input id="sj-{{ $discipline->id }}" type="checkbox" name="discipline[]"
                                                    value="{{ $discipline->name }}"
                                                    @if (request()->has('discipline') && in_array($discipline->name, request()->get('discipline', []))) checked @endif>
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
                                            <input id="sj-viewallthree" type="checkbox" name="period[]" value=""
                                                @if (!request()->has('period') || in_array('', request()->get('period', []))) checked @endif />
                                            <label for="sj-viewallthree">Toutes les
                                                périodes<em>({{ $counts['all'] }})</em></label>
                                        </span>
                                        <span class="sj-checkbox">
                                            <input id="sj-today" type="checkbox" name="period[]" value="today"
                                                @if (request()->has('period') && in_array('today', request()->get('period', []))) checked @endif>
                                            <label for="sj-today">Aujourd'hui<em>( {{ $counts['today'] }} )</em></label>
                                        </span>
                                        <span class="sj-checkbox">
                                            <input id="sj-thisweek" type="checkbox" name="period[]" value="this_week"
                                                @if (request()->has('period') && in_array('this_week', request()->get('period', []))) checked @endif>
                                            <label for="sj-thisweek">Cette Semaine<em>( {{ $counts['this_week'] }}
                                                    )</em></label>
                                        </span>
                                        <span class="sj-checkbox">
                                            <input id="sj-thismonth" type="checkbox" name="period[]" value="this_month"
                                                @if (request()->has('period') && in_array('this_month', request()->get('period', []))) checked @endif>
                                            <label for="sj-thismonth">Ce mois<em>( {{ $counts['this_month'] }}
                                                    )</em></label>
                                        </span>
                                        <span class="sj-checkbox">
                                            <input id="sj-thisyear" type="checkbox" name="period[]" value="this_year"
                                                @if (request()->has('period') && in_array('this_year', request()->get('period', []))) checked @endif>
                                            <label for="sj-thisyear">Cette année<em>( {{ $counts['this_year'] }}
                                                    )</em></label>
                                        </span>
                                        <span class="sj-checkbox">
                                            <input id="sj-lastyear" type="checkbox" name="period[]" value="last_year"
                                                @if (request()->has('period') && in_array('last_year', request()->get('period', []))) checked @endif>
                                            <label for="sj-lastyear">L'année Passée<em>( {{ $counts['last_year'] }}
                                                    )</em></label>
                                        </span>
                                        <span class="sj-checkbox">
                                            <input id="sj-last10years" type="checkbox" name="period[]" value="last_10_years"
                                                @if (request()->has('period') && in_array('last_10_years', request()->get('period', []))) checked @endif>
                                            <label for="sj-last10years">10 Dernières années<em>(
                                                    {{ $counts['last_10_years'] }} )</em></label>
                                        </span>
                                    </div>
                                    <div class="sj-filterbtns">
                                        <a class="sj-btn" href="javascript:void(0)" id="filterSubmitBtn">Appliquer</a>
                                        <a class="sj-btn" href="javascript:void(0)" id="filterResetBtn">Réinitialiser</a>
                                    </div>
                                </div>
                            </div>
                        </form>

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
                                        <img src={{ asset('assets/images/aside.jpg') }} alt="image description"
                                            style="height: 300px">
                                        <figcaption>
                                            <div class="sj-uploadcontent">
                                                <span>Voulez vous publier un article pour ce numéro ?</span>

                                                <a class="sj-btn"
                                                    href={{ route('admin.articles.view.metadata', ['issue_id' => $issue->id]) }}>Publier
                                                    Dans ce Numéro </a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                            @endauth
                        @endif
                        <div class="sj-articles">
                            <form class="sj-formtheme sj-formsortitems" id="sortForm">
                                <fieldset class="humm">
                                    <style>
                                        .humm {
                                            display: grid;
                                            grid-template-columns: repeat(2, 1fr);
                                            gap: 15px;
                                        }

                                        .form-group {
                                            display: flex;
                                            align-items: center;
                                            justify-content: space-between;
                                            padding: 10px;
                                            border-radius: 5px;
                                            background-color: #badcf0;
                                            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                                        }

                                        .form-group em {
                                            font-style: normal;
                                            font-weight: bold;
                                            color: #333;
                                            margin-right: 10px;
                                        }

                                        .sj-select select {
                                            width: 200px;
                                            padding: 8px;
                                            border-radius: 5px;
                                            border: 1px solid #ccc;
                                            background-color: #fff;
                                            color: #333;
                                            font-size: 14px;
                                            appearance: none;
                                            outline: none;
                                            transition: border-color 0.3s ease;
                                        }
                                    </style>

                                    <div class="form-group">
                                        <em>Ordonner par:</em>
                                        <span class="sj-select">
                                            <select name="sort_by" id="sortBy">
                                                <option value=""></option>
                                                <option value="publication_date"
                                                    {{ request('sort_by') == 'publication_date' ? 'selected' : '' }}>
                                                    Date de publication
                                                </option>
                                                <option value="title"
                                                    {{ request('sort_by') == 'title' ? 'selected' : '' }}>
                                                    Titre
                                                </option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <em>Arrangement: </em>
                                        <span class="sj-select">
                                            <select name="sort_order" id="sortOrder">
                                                <option value=""></option>
                                                <option value="desc"
                                                    {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Décroissant
                                                </option>
                                                <option value="asc"
                                                    {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Croissant
                                                </option>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <em>Afficher: </em>
                                        <span class="sj-select">
                                            <select name="limit" id="sortLimit">
                                                <option value=""></option>
                                                <option value="1" {{ request('limit') == 1 ? 'selected' : '' }}>1
                                                </option>
                                                <option value="2" {{ request('limit') == 2 ? 'selected' : '' }}>2
                                                </option>
                                                <option value="3" {{ request('limit') == 3 ? 'selected' : '' }}>3
                                                </option>
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
                                            <img src="{{ $article->image_path === 'assets/images/thumbnails/img-02.jpg' ? asset($article->image_path) : Storage::url($article->image_path) }}"
                                                alt="image description" class="artImg">
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
                                                    <span class="sj-username">
                                                        <a href="javascript:void(0);">
                                                            @foreach ($article->articleUsers as $author)
                                                                {{ $author->user->firstname . ' ' . $author->user->lastname }}
                                                                |
                                                            @endforeach
                                                        </a>
                                                    </span>
                                                </span>


                                                <h3><a
                                                        href={{ route('web.articles.show', $article->id) }}>{{ $article->title }}</a>
                                                </h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>>{!! Str::limit($article->abstract, 100) !!}...</p>
                                            </div>
                                            <a class="sj-btn" href={{ route('web.articles.show', $article->id) }}>Voir
                                                le contenu</a>
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
                    @include('partials.right-aside')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src={{ asset('app-js/web/article/filter.js') }}></script>
@endpush
