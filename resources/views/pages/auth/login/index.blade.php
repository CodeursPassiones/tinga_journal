@extends('pages.auth.base')
@section('banner')
    <!--************************************
                                                                                                                                                                                                                             Inner Banner Start
                                                                                                                                                                                                                           *************************************-->
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Connexion</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Login</a></li>
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
@section('guest-content')
    <div id="sj-content" class="sj-content">
        <div class="sj-registerarea">
            <div class="registernow ">
                <div class="sj-borderheading">
                    <h3>Se Connecter</h3>
                </div>
                <div class="sj-registerformholder">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">

                            <div class="sj-widget sj-widgetlogin">

                                <div class="sj-widgetcontent">
                                    <form class="sj-formtheme sj-formlogin" id="loginForm">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Mot De Passe">
                                            </div>
                                            <div class="form-group sj-forgotpass">
                                                <div class="sj-checkbox">
                                                    <input type="checkbox" id="login">
                                                    <label for="login">Se souvenir de moi</label>
                                                </div>
                                                <a class="sj-forgorpass" href="javascript:void(0);">Mot de passe oublié
                                                    ?</a>
                                            </div>
                                            <div class="sj-btnarea">
                                                {{-- <a class="sj-btn sj-btnactive" href="javascript:void(0);">Connexion</a> --}}
                                                <button class="sj-btn sj-btnactive" type="submit" id="submitBtn">
                                                    <span class="normal-status">
                                                        Se
                                                        Connecter
                                                    </span>
                                                    <span class="indicateur d-none">
                                                        <span><i class="fa fa-spinner text-secondary"></i>
                                                            Loading...
                                                        </span>

                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Section d'informations sur la page de connexion -->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="sj-howtoregister">
                                <h3>Bienvenue sur notre plateforme de connexion</h3>
                                <div class="sj-description">
                                    <p>Nous vous invitons à vous connecter pour accéder à vos fonctionnalités
                                        personnalisées. Si vous n'avez pas encore de compte, vous pouvez contacter le
                                        support pour en avoir.</p>
                                </div>
                                <ul class="sj-liststyle">
                                    <li><span>Publier des arcticles</span></li>

                                    <li><span>Gérez vos préférences</span></li>
                                    <li><span>Contactez notre support</span></li>
                                    <li><span>Accédez à vos documents</span></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('app-js/auth/login.js') }}"></script>
@endpush
