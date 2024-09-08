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
                        <h1>Paramètres</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Paramètres</a></li>
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
            <h2>Vol. {{ $volume->title }} {{ $volume->year }} - Gestion Numéros</h2>
            <form class="sj-formtheme sj-formsearchvtwo" id="searchForm"
                data-model-url="{{ route('admin.issues.list', $volume->id) }}">
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
                            data-target="#addIssueModal">Créer</button>
                    </div>
                    <div class="form-group sj-inputwithicon float-right">
                        <a href="#">
                            <i class="lnr lnr-sync"></i></a>
                        <span class="sj-select">
                            <select data-placeholder="All" name="sort_by" id="sortBy">
                                <option value="" disabled>Ordonner</option>
                                <option value="number" {{ request('sort_by') == 'number' ? 'selected' : '' }}>
                                    Numéro</option>

                                <option value="publication_date"
                                    {{ request('sort_by') == 'publication_date' ? 'selected' : '' }}>
                                    Date de publication</option>

                                <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>
                                    Date d'ajout</option>
                            </select>
                        </span>
                    </div>
                </fieldset>
            </form>
            <ul class="sj-allcategorys">

                @if ($issues->isEmpty())
                    <p>Auccun Numéro trouvé :)</p>
                @else
                    @foreach ($issues as $issue)
                        <li class="sj-categorysinfo parent">
                            <div class="sj-title model-value">

                                <h3>No. {{ $issue->title }} <span>( @formatDateOnly($issue->publication_date))</span>
                                </h3>
                                <h4>{{ $issue->title }} </h4>
                            </div>
                            <div class="sj-categorysrightarea">
                                <a href="{{ route('web.articles.list', ['issue_id' => $issue->id]) }}" class="sj-eyebtn"><i
                                        class="ti-eye"></i></a>
                                <a href="javascript:void(0);" class="sj-pencilbtn" data-toggle="modal"
                                    data-target="#UpdateIssueModal{{ $issue->id }}"><i class="ti-pencil"></i></a>
                                <a class="sj-trashbtn modelDeleteBtn" data-model-action="delete"
                                    data-model-parent-selector="li.parent"
                                    data-model-delete-url="{{ route('admin.issues.delete', $issue->id) }}" href="#"
                                    id="{{ $issue->id }}"><i class="ti-trash normal-status"></i>
                                    </span>
                                    <span class="indicateur d-none">
                                        <span class="spinner-border spinner-border-sm me-1" role="status"
                                            aria-hidden="true"></span>
                                        Loading...
                                    </span>
                                </a>
                            </div>
                        </li>
                        @include('pages.admin.issues.update')
                    @endforeach
                @endif

            </ul>
            <nav class="sj-pagination">
                {{ $issues->links() }}
            </nav>
        </div>
    </div>
    @include('pages.admin.issues.create')
@endsection
@push('js')
    <script src={{ asset('app-js/filter/filter.js') }}></script>
    <script src={{ asset('app-js/crud/post.js') }}></script>
    <script src={{ asset('app-js/crud/put.js') }}></script>
    <script src={{ asset('app-js/crud/delete.js') }}></script>
@endpush
