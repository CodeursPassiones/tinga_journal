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

    <div id="sj-contentvtwo" class="sj-content sj-addarticleholdcontent sj-addarticleholdvtwo">
        <div class="sj-dashboardboxtitle sj-titlewithform">
            <h2>Manager Diciplines</h2>
            <form class="sj-formtheme sj-formsearchvtwo" id="searchForm"
                data-model-url="{{ route('admin.disciplines.list') }}">
                <div class="sj-sortupdown">
                    <a href="javascript:void(0);" id="sortOrder" data-name="sort_order"
                        data-sortOrder={{ $sortOrder }}><i
                            class="fa fa-sort-amount-{{ $sortOrder === 'asc' ? 'down' : 'up' }}"></i></a>
                </div>
                <fieldset>
                    <input type="search" name="search" class="form-control" placeholder="Rechercher"
                        value="{{ request('search') }}">
                    <button type="submit" class="sj-btnsearch" id="searchBtn"><i class="lnr lnr-magnifier"></i></button>
                </fieldset>
            </form>
        </div>
        <div class="sj-manageallsession">
            <form class="sj-formtheme sj-managesessionform">
                <fieldset>
                    <div class="form-group">
                        <button type="button" class="sj-btn sj-btnactive" data-toggle="modal"
                            data-target="#addDisciplineModal">Créer</button>
                    </div>

                </fieldset>
            </form>
            <ul class="sj-allcategorys">

                @if ($disciplines->isEmpty())
                    <p>Aucune Disciplines Trouvée :)</p>
                @else
                    @foreach ($disciplines as $discipline)
                        @php
                            $discipline_id = Illuminate\Support\Facades\Crypt::encryptString($discipline->id);
                        @endphp
                        <li class="sj-categorysinfo parent">
                            <div class="sj-title">
                                <h3 class="discipline">{{ $discipline->name }}</h3>
                            </div>
                            <div class="sj-categorysrightarea">
                                <a href="javascript:void(0);" class="sj-pencilbtn" data-toggle="modal"
                                    data-target="#UpdateDisciplineModal{{ $discipline_id }}"><i class="ti-pencil"></i></a>
                                <a class="sj-trashbtn disciplineDeleteBtn" href="#" id="{{ $discipline_id }}"><i
                                        class="ti-trash normal-status"></i>
                                    </span>
                                    <span class="indicateur d-none">
                                        <span class="spinner-border spinner-border-sm me-1" role="status"
                                            aria-hidden="true"></span>
                                        Loading...
                                    </span>
                                </a>
                            </div>
                        </li>
                        @include('pages.admin.disciplines.update')
                    @endforeach
                @endif


            </ul>
            <nav class="sj-pagination">
                {{ $disciplines->links() }}
            </nav>
        </div>
    </div>
    @include('pages.admin.disciplines.create')
@endsection
@push('js')
    <script src={{ asset('app-js/filter/filter.js') }}></script>
    <script src={{ asset('app-js/admin/discipline/add.js') }}></script>
    <script src={{ asset('app-js/admin/discipline/update.js') }}></script>
    <script src={{ asset('app-js/admin/discipline/delete.js') }}></script>
@endpush
