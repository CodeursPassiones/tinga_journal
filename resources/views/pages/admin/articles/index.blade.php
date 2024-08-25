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
                        <h1>Become A Member</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Login/Register</a></li>
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

            @if ($articles->isEmpty())
                <h3>Aucun article trouvé :(</h3>
            @else
                @foreach ($articles as $article)
                    <li id="heading{{ $article->id }}" class="sj-articleheader" data-toggle="collapse"
                        data-target="#collapse{{ $article->id }}" aria-expanded="true"
                        aria-controls="collapse{{ $article->id }}">
                        <div class="sj-detailstime">
                            <span><i class="ti-calendar"></i>@formatDate($article->publication_date)</span>
                            <span><i class="ti-layers"></i>{{ $article->discipline->name }}</span>
                            <span><i class="ti-bookmark"></i>ID: {{ $article->matricule }}</span>
                            <span><i class="ti-bookmark-alt"></i>Edition</span>
                            <h4>{{ $article->title }}</h4>
                        </div>
                        <div class="sj-nameandmail">
                            <span>Auteur</span>
                            <h4>{{ $article->user->firstname . ' ' . $article->user->lastname }}</h4>
                            <span class="sj-mailinfo">{{ $article->user->email }}</span>
                        </div>
                    </li>
                    <li id="collapse{{ $article->id }}" class="collapse sj-active sj-userinfohold"
                        aria-labelledby="heading{{ $article->id }}" data-parent="#accordion">
                        <div class="sj-userinfoimgname">
                            <figure class="sj-userinfimg">
                                <img src={{ asset($article->image_url) }} alt="img description">
                            </figure>
                            <div class="sj-userinfoname">
                                <span>04 days ago on Monday at 14:49

                                    @tempsEcoule($article->publication_date)
                                </span>
                                <h3>{{ $article->user->firstname . ' ' . $article->user->lastname }}
                                    {{ $article->user_id === auth()->user()->id ? '(Vous)' : '' }}</h3>
                            </div>
                            <div class="sj-userbtnarea">

                                <div class="sj-categorysrightarea">
                                    <a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
                                    <a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
                                </div>
                            </div>
                            <div class="sj-description">
                                <p>{{ $article->abstract }}</p>
                            </div>

                        </div>

                    </li>
                @endforeach

                <!-- Liens de pagination -->
                <div class="sj-pagination">
                    {{-- {{ $articles->links() }} --}}
                    {!! $articles->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            @endif

        </ul>
        <nav class="sj-pagination">
            <ul>
                <li class="sj-prevpage"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                <li class="sj-active"><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#">04</a></li>
                <li><a href="#">05</a></li>
                <li class="sj-nextpage"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
    </div>
@endsection
