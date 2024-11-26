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
                        <h1>Créer un compte</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Register</a></li>
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
                    <h3>Créer un compte</h3>
                </div>
                <div class="sj-registerformholder">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <form class="sj-formtheme sj-formregister">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Mot De Passe*">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="re-typepassword" class="form-control"
                                            placeholder="Retaper Le Mot De Passe*">
                                    </div>
                                    <div class="form-group">
                                        <div class="sj-checkbox">
                                            <input type="checkbox" id="register">
                                            <label for="register">En créer le compte voua acceptez nos <a
                                                    href="#">Termes &amp;
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="sj-btnarea">
                                        <a class="sj-btn sj-btnactive" href="#">Soumettre</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="sj-howtoregister">
                                <h3>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</h3>
                                <div class="sj-description">
                                    <p>Quis nostrud exercitation ullamcoaris nisiuate aliquip ex ea commodo
                                        consequat aute irure dolor atem reprehenderit in esse.</p>
                                </div>
                                <ul class="sj-liststyle">
                                    <li><span>Proident sunt in culpa qui officia</span></li>
                                    <li><span>Deserunt mollit anim idestorum</span></li>
                                    <li><span>Sedutana perspiciatis</span></li>
                                    <li><span>Aunde omnis iste natus voluptatem</span></li>
                                    <li><span>Cullamcoaris nisiutia aliquip</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
