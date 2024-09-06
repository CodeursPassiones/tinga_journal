@extends('pages.admin.base')
@section('banner')
    <!--************************************
                                                                                                                                                                                                                                                                                                                                                                                     Inner Banner Start
                                                                                                                                                                                                                                                                                                                                                                                   *************************************-->
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Gestion Articles</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Acceuil</a></li>
                            <li><a href="javascript:void(0);">Admin/Article/Liste</a></li>
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
@section('admin-content')
    <div id="sj-content" class="sj-content sj-addarticleholdcontent">
        <div class="sj-dashboardboxtitle sj-titlewithform">
            <h2>Articles</h2>
            <form class="sj-formtheme sj-formsearchvtwo">
                <div class="sj-sortupdown">
                    <a href="javascript:void(0);"><i class="fa fa-sort-amount-up"></i></a>
                </div>
                <fieldset>
                    <input type="search" name="search" class="form-control" placeholder="Recherche">
                    <button type="Soumettre" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
                </fieldset>
            </form>
        </div>
        <ul id="accordion" class="sj-articledetails sj-articledetailsvtwo">
            <style>
                .userArticleListAdminImg {
                    width: 70px;
                    height: 70px;
                    min-width: 70px;
                    max-width: 70px;
                    min-height: 70px;
                    max-height: 70px;
                    object-fit: fill !important;
                }
            </style>
            @if ($articles->isEmpty())
                <h3>Aucun article trouvé :(</h3>
            @else
                @foreach ($articles as $article)
                    <li id="heading{{ $article->id }}" class="sj-articleheader" data-toggle="collapse"
                        data-target="#collapse{{ $article->id }}" aria-expanded="true"
                        aria-controls="collapse{{ $article->id }}">
                        <div class="sj-detailstime">
                            <span><i class="ti-calendar"></i>@formatDate($article->publication_date)</span>
                            <span><i
                                    class="ti-layers"></i>{{ $status === 'DRAFT' ? '' : $article->discipline->name }}</span>
                            <span><i class="ti-bookmark"></i>ID: {{ $article->matricule }}</span>
                            <span><i
                                    class="ti-bookmark-alt"></i>{{ $article->user->lastname . ' ' . $article->user->firstname }}</span>
                            <h4>{{ $article->title }}</h4>
                        </div>
                        <div class="sj-nameandmail">
                            <span>Auteurs</span>
                            @foreach ($article->articleUsers as $author)
                                <h4>{{ $author->user->firstname . ' ' . $author->user->lastname }}</h4>
                                <span class="sj-mailinfo">{{ $author->user->email }}</span>
                            @endforeach

                        </div>
                    </li>
                    <li id="collapse{{ $article->id }}" class="collapse sj-active sj-userinfohold"
                        aria-labelledby="heading{{ $article->id }}" data-parent="#accordion">
                        <div class="sj-userinfoimgname">
                            <figure class="sj-userinfimg">
                                <img src={{ asset($article->image_path) }} alt="img description"
                                    class="userArticleListAdminImg">
                            </figure>
                            <div class="sj-userinfoname">
                                <span>

                                    @tempsEcoule($article->publication_date)
                                </span>
                                @if ($status != 'DRAFT')
                                    <h3>
                                        @foreach ($article->articleUsers as $author)
                                            {{ $author->user->firstname . ' ' . $author->user->lastnmae }}
                                            {{ $author->user_id === auth()->user()->id ? '(Vous)' : '' }}
                                            |
                                        @endforeach

                                    </h3>
                                @endif

                            </div>
                            <div class="sj-userbtnarea">

                                <div class="sj-categorysrightarea">
                                    @switch($article->status)
                                        @case('SUBMITED')
                                            <a href={{ route('admin.articles.publish', $article->id) }}><i class="fa fa-share"
                                                    id="shareArticle"></i></a>
                                        @break

                                        @case('PUBLISHED')
                                            <a href={{ route('admin.articles.hide', $article->id) }}><i class="fa fa-eye-slash"
                                                    id="hideArticle"></i></a>
                                        @break

                                        @default
                            <li><a href="#"><i class="fa fa-share" id="hideArticle"></i><span>Cacher</span></a>
                            </li>
                    @endswitch
                    <a href={{ route('web.articles.show', $article->id) }} class="sj-eyebtn" target="_blank"><i
                            class="ti-eye"></i></a>
                    <a href={{ route('admin.articles.edit', $article->id) }} class="sj-pencilbtn"><i
                            class="ti-pencil"></i></a>
                    <a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
    </div>
    </div>
    <div class="sj-description">
        <p>>{{ Str::limit($article->abstract, 100) }}...</p>
    </div>

    </div>

    </li>
    @endforeach
    @endif

    </ul>
    {!! $articles->withQueryString()->links() !!}
    </div>
@endsection
