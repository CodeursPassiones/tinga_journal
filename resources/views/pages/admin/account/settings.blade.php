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
                <form class="sj-formtheme sj-formpassword">
                    <fieldset>
                        <div class="form-group sj-inputwithicon sj-password">
                            <i class="lnr lnr-lock"></i>
                            <input type="password" name="password" class="form-control" placeholder="Old Password">
                        </div>
                        <div class="form-group sj-inputwithicon sj-password">
                            <i class="lnr lnr-lock"></i>
                            <input type="password" name="newpassword" class="form-control"
                                placeholder="Nouveau Mot De Passe">
                        </div>
                        <div class="form-group sj-inputwithicon sj-password">
                            <i class="lnr lnr-lock"></i>
                            <input type="password" name="passwordComfirmation" class="form-control"
                                placeholder="Retaper Mot De passe">
                        </div>

                    </fieldset>
                </form>
                <div class="sj-btnarea sj-updatebtns">
                    <a href="javascript:void(0);" class="sj-btn sj-btnactive">Mette à Jour </a>
                    <a href="javascript:void(0);" class="sj-btncancel">Annuler</a>
                </div>
            </div>
        </div>

    </div>
@endsection
