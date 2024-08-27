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
                            <li><a href="javascript:void(0);">Acceuil</a></li>
                            <li><a href="javascript:void(0);">Users/Management</a></li>
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
            <form class="sj-formtheme sj-formsearchvtwo">
                <div class="sj-sortupdown">
                    <a href="javascript:void(0);"><i class="fa fa-sort-amount-up"></i></a>
                </div>
                <fieldset>
                    <input type="search" name="search" class="form-control" placeholder="Search here">
                    <button type="submit" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
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
                        <i class="lnr lnr-sync"></i>
                        <span class="sj-select">
                            <select data-placeholder="All" name="locations">
                                <option value="">Sort By</option>
                                <option value="aberdeen">Sort By1</option>
                                <option value="aldershot">Sort By2</option>
                                <option value="altrincham">Sort By</option>
                                <option value="aylesbury">Sort By4</option>
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
                        <li class="sj-categorysinfo">
                            <figure class="sj-assignuserimg">
                                <img src={{ asset($user->profile_picture) }} alt="img">
                            </figure>
                            <div class="sj-title">
                                <h3>{{ $user->firstname . ' ' . $user->lastname }} <span class="sj-assignedinfo"
                                        data-toggle="modal" data-target="#feedbackmodal">( {{ $user->articles->count() }}
                                        Articles publiées )</span>
                                </h3>
                            </div>
                            <div class="sj-categorysrightarea">

                                <div class="sj-addremove">
                                    <a href="javascript:void(0);" class="sj-pencilbtn" data-toggle="modal"
                                        data-target="#UpdateUserModal{{ $user->id }}"><i class="ti-pencil"></i></a>
                                    {{-- <a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a> --}}
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
    <script src={{ asset('app-js/admin/user/add.js') }}></script>
    <script src={{ asset('app-js/admin/user/update.js') }}></script>
@endpush
