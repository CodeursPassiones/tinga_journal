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
        <div class="sj-addarticleholdcontent">
            <div class="sj-dashboardboxtitle">
                <h2>Changer Password</h2>
            </div>
            <div class="sj-acsettingthold">
                <form class="sj-formtheme sj-formpassword" id="passUpForm">
                    <input type="hidden" name="id" value={{ auth()->user()->id }}>
                    <fieldset>
                        <div class="form-group sj-inputwithicon sj-password">
                            <i class="lnr lnr-lock"></i>
                            <input type="password" name="current_password" class="form-control" placeholder="Old Password">
                        </div>
                        <div class="form-group sj-inputwithicon sj-password">
                            <i class="lnr lnr-lock"></i>
                            <input type="password" name="new_password" class="form-control"
                                placeholder="Nouveau Mot De Passe">
                        </div>
                        <div class="form-group sj-inputwithicon sj-password">
                            <i class="lnr lnr-lock"></i>
                            <input type="password" name="new_password_confirmation" class="form-control"
                                placeholder="Retaper Mot De passe">
                        </div>

                    </fieldset>
                    <div class="sj-btnarea sj-updatebtns">
                        <button class="sj-btn sj-btnactive" type="submit" id="passUpBtn">
                            <span class="normal-status">
                                Mettre à jour
                            </span>
                            <span class="indicateur d-none">
                                <span><i class="fa fa-spinner text-secondary"></i>
                                    Chargement...
                                </span>

                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection
@push('js')
    <script src={{ asset('app-js/admin/account/update-pass.js') }}></script>
@endpush
