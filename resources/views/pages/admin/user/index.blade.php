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
                        <h1>Manage Users</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="#">Acceuil</a></li>
                            <li><a href="#">Users/Management</a></li>
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
            <h2>Manage User</h2>
            <form class="sj-formtheme sj-formsearchvtwo" id="searchForm" data-model-url="{{ route('admin.users.list') }}">
                <div class="sj-sortupdown">
                    <a href="#" id="sortOrder" data-name="sort_order" data-sortOrder={{ $sortOrder }}><i
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
                            data-target="#addUserModal">Ajouter Un Utilisateur</button>
                    </div>
                    <div class="form-group sj-inputwithicon float-right">
                        <a href="#">
                            <i class="lnr lnr-sync"></i></a>
                        <span class="sj-select">
                            <select data-placeholder="All" name="sort_by" id="sortBy">
                                <option value="" disabled>Ordonner</option>
                                <option value="firstname" {{ request('sort_by') == 'firstname' ? 'selected' : '' }}>
                                    Prénoms</option>
                                <option value="lastname" {{ request('sort_by') == 'lastname' ? 'selected' : '' }}>
                                    Nom</option>
                                <option value="username" {{ request('sort_by') == 'username' ? 'selected' : '' }}>
                                    Username</option>
                                <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>
                                    Date d'intégration</option>
                            </select>
                        </span>
                    </div>

                </fieldset>
            </form>
            <ul class="sj-allcategorys sj-allcategorysvtwo">
                @if ($users->isEmpty())
                    <p>Aucun utilisateur trouvé :(</p>
                @else
                    @foreach ($users as $user)
                        <li class="sj-categorysinfo parent">
                            <figure class="sj-assignuserimg">
                                <img src={{ asset($user->profile_picture) }} alt="img">
                            </figure>
                            <div class="sj-title">
                                <h3 class="model-value">{{ $user->firstname . ' ' . $user->lastname }} <span
                                        class="sj-assignedinfo" data-toggle="modal" data-target="#feedbackmodal">(
                                        {{ $user->articles->count() }}
                                        Articles publiées )</span>
                                </h3>
                            </div>
                            <div class="sj-categorysrightarea">

                                <div class="sj-addremove">
                                    <a href="#" class="sj-pencilbtn" data-toggle="modal"
                                        data-target="#UpdateUserModal{{ $user->id }}"><i class="ti-pencil"></i></a>

                                    <a class="sj-trashbtn modelDeleteBtn" href="#" id="{{ $user->id }}"
                                        data-model-action="delete" data-model-parent-selector="li.parent"
                                        data-model-delete-url="{{ route('admin.users.delete', $user->id) }}"><i
                                            class="ti-trash normal-status"></i>
                                        </span>
                                        <span class="indicateur d-none">
                                            <span class="spinner-border spinner-border-sm me-1" role="status"
                                                aria-hidden="true"></span>
                                            Loading...
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        @include('pages.admin.user.update')
                    @endforeach
                @endif




            </ul>
            <!-- Liens de pagination -->

            {!! $users->withQueryString()->links() !!}
        </div>
    </div>
    @include('pages.admin.user.create')
@endsection
@push('js')
    <script src={{ asset('app-js/filter/filter.js') }}></script>
    <script src={{ asset('app-js/crud/post.js') }}></script>
    <script src={{ asset('app-js/crud/put.js') }}></script>
    <script src={{ asset('app-js/crud/delete.js') }}></script>
@endpush
