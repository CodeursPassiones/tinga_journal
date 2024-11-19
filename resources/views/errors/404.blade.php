@extends('base')
@section('banner')
    <!--************************************
                                         Inner Banner Start
                                       *************************************-->
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Ressoucre Introuvable</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Acceuil</a></li>
                            <li><a href="javascript:void(0);">404</a></li>
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
@section('web-content')
    <div class="sj-404error">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 offset-sm-0 col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                    <div class="sj-404content">
                        <div class="sj-404head">
                            <h2>404</h2>
                            <h3>Page Not Found :(</h3>
                        </div>
                        <div class="sj-description">
                            <p>La page recherchée est introuvable</p>
                        </div>
                        <span class="sj-gobackhome">Go back to <a href={{ route('home') }}>Hompage</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
