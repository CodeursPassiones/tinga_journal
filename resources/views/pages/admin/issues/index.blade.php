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
                        <h1>Paramettres</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Paramettres</a></li>
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
    <div id="sj-content" class="sj-content sj-addarticleholdcontent sj-addarticleholdvtwo">
        <div class="sj-dashboardboxtitle sj-titlewithform">
            <h2>Vol. {{ $volume->year }} - Gestion Numéros</h2>
            <form class="sj-formtheme sj-formsearchvtwo">
                <div class="sj-sortupdown">
                    <a href="javascript:void(0);"><i class="fa fa-sort-amount-up"></i></a>
                </div>
                <fieldset>
                    <input type="search" name="search" class="form-control" placeholder="Rechercher" disabled>
                    <button type="submit" class="sj-btnsearch" disabled><i class="lnr lnr-magnifier"></i></button>
                </fieldset>
            </form>
        </div>
        <div class="sj-manageallsession">

            <ul class="sj-allcategorys">
                <li class="sj-addcategorys">
                    <form class="sj-formtheme sj-categorysform" id="issueAddForm">
                        <fieldset>
                            <div class="form-group">
                                <input type="date" name="publication_date" class="form-control"
                                    placeholder="Date de publication">
                            </div>

                            <div class="form-group sj-categorysbtn">
                                <button class="sj-btn sj-checkbtn" type="submit" id="issueAddBtn">
                                    <span class="normal-status">
                                        <i class="ti-check"></i>
                                    </span>
                                    <span class="indicateur d-none">
                                        <span><i class="fa fa-spinner text-secondary"></i>
                                            Chargement...
                                        </span>

                                </button>
                                <button class="" type="cancel">
                                    <span class="sj-btndecline">
                                        Annuler
                                    </span>


                                </button>
                            </div>
                        </fieldset>
                    </form>
                </li>
                @if ($issues->isEmpty())
                    <p>Auccun Numéro trouvé :)</p>
                @else
                    @foreach ($issues as $issue)
                        <li class="sj-categorysinfo">
                            <div class="sj-title">
                                <h3>Numéro {{ $issue->number }} <span>( @formatDate($issue->publication_date))</span></h3>
                            </div>
                            <div class="sj-categorysrightarea">
                                {{-- <a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
                                <a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a> --}}
                            </div>
                        </li>
                    @endforeach
                @endif

            </ul>
            <nav class="sj-pagination">
                {{ $issues->links() }}
            </nav>
        </div>
    </div>

@endsection
@push('js')
    <script src={{ asset('app-js/admin/general/add.js') }}></script>
@endpush
