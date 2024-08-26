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
                        <h1>Mon compte</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Acceuil</a></li>
                            <li><a href="javascript:void(0);">Compte/Parametres</a></li>
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
    <div id="sj-content" class="sj-content">
        <div class="sj-addarticleholdcontent">
            <div class="sj-dashboardboxtitle">
                <h2>Paramettres Compte</h2>
            </div>

        </div>
        @include('pages.admin.account.informations')
        @include('pages.admin.account.password')

    </div>
@endsection
@push('js')
    <script src={{ asset('app-js/admin/account/update-pass.js') }}></script>
@endpush
