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
            <h2>Gestion Volumes</h2>
            <form class="sj-formtheme sj-formsearchvtwo" id="searchForm" data-model-url="{{ route('admin.volumes.list') }}">
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
                            data-target="#addVolumeModal">Créer</button>
                    </div>
                    <div class="form-group sj-inputwithicon float-right">
                        <a href="#">
                            <i class="lnr lnr-sync"></i></a>
                        <span class="sj-select">
                            <select data-placeholder="All" name="sort_by" id="sortBy">
                                <option value="" disabled>Ordonner</option>
                                <option value="title" {{ request('sort_by') == 'title' ? 'selected' : '' }}>
                                    Titre</option>

                                <option value="year" {{ request('sort_by') == 'year' ? 'selected' : '' }}>
                                    Année</option>

                                <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>
                                    Date d'ajout</option>
                            </select>
                        </span>
                    </div>
                </fieldset>
            </form>
            <ul class="sj-allcategorys">

                @if ($volumes->isEmpty())
                    <p>Auccun Volumes trouvé :)</p>
                @else
                    @foreach ($volumes as $volume)
                        @php
                            $volume_id = Illuminate\Support\Facades\Crypt::encryptString($volume->id);
                        @endphp
                        <li class="sj-categorysinfo parent">
                            <div class="sj-title volume">
                                <h3 class="">Vol. {{ $volume->title . ' ' . $volume->year }} <span
                                        class="sj-assignedinfo">(
                                        {{ $volume->issues->count() }}
                                        numéros )</span>
                                </h3>

                            </div>
                            <div class="sj-categorysrightarea">
                                <a href="{{ route('admin.issues.list', $volume->id) }}" class="sj-eyebtn"><i
                                        class="ti-eye"></i></a>
                                <a href="javascript:void(0);" class="sj-pencilbtn" data-toggle="modal"
                                    data-target="#UpdateVolumeModal{{ $volume_id }}"><i class="ti-pencil"></i></a>
                                <a class="sj-trashbtn volumeDeleteBtn" href="#" id="{{ $volume_id }}"><i
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
                        @include('pages.admin.volumes.update')
                    @endforeach
                @endif

            </ul>
            <nav class="sj-pagination">
                {{ $volumes->links() }}
            </nav>
        </div>
    </div>
    @include('pages.admin.volumes.create')
@endsection
@push('js')
    <script src={{ asset('app-js/filter/filter.js') }}></script>

    <script src={{ asset('app-js/admin/volume/add.js') }}></script>
    <script src={{ asset('app-js/admin/volume/update.js') }}></script>
    <script src={{ asset('app-js/admin/volume/delete.js') }}></script>
@endpush
