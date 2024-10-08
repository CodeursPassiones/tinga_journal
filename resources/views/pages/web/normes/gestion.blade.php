@extends('base')
@section('title', 'Tɩ́ɩ́ŋá-comité de gestion')
@section('description', 'le comité de gestion de la revue Tɩ́ɩ́ŋá ')
@section('keywords', 'tinga, revue tinga,comité de gestion, "la Revue Langues, Littératures, Arts et Culture", LaLD,
    "CAMES" ')

@section('style')
    <link rel="stylesheet" href={{ asset('assets/css/css_custom/gestion.css') }}>
@endsection
@section('banner')
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Administration de la revue</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="#">Administation</a></li>
                            <li><a href="#">Comité de Gestion</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('web-content')
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div id="sj-content" class="sj-content">
                        <div class="sj-aboutus">
                            <figure class="sj-aboutusimg">
                                <img src="{{ asset('assets/images/A propos/gestion.jpg') }}" style="height: 400px;"
                                    alt="image description">
                            </figure>
                        </div>
                        <div class="container" style="margin-top: 400px;">
                            <div class="sj-borderheading" style="margin-top: 40px;">
                                <h3>Comité de gestion </h3>
                            </div>
                            <div class="row" style="margin-top: 550px;">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="{{ asset('assets/images/A propos/user.jpg') }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Professeur KADOUZA Padabô </h3>
                                            <h4 class="title">Doyen de la FLESH</h4>
                                        </div>
                                        <ul class="social">
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="{{ asset('assets/images/A propos/user.jpg') }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Docteur KASSAN Balaïbaou </h3>
                                            <h4 class="title">Directrice du Laboratoire</h4>
                                        </div>
                                        <ul class="social">
                                            Maître de Conférences
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="{{ asset('assets/images/A propos/user.jpg') }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Docteur ADOKI Kemealo </h3>
                                            <h4 class="title">Rapporteur du Laboratoire</h4>
                                        </div>
                                        <ul class="social">
                                            Maître-Assistante
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="{{ asset('assets/images/A propos/user.jpg') }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Docteur TAKAO Mawaya </h3>
                                            <h4 class="title">membre du Laboratoire</h4>
                                        </div>
                                        <ul class="social">
                                            Maître de Conférences
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="{{ asset('assets/images/A propos/user.jpg') }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Docteur KAMMANPOAL</h3>
                                            <h4 class="title">membre du Laboratoire</h4>
                                        </div>
                                        <ul class="social">
                                            Maître de Conférences
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="{{ asset('assets/images/A propos/user.jpg') }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Mme BILAO </h3>
                                            <h4 class="title">comptable de la FLESH UK</h4>
                                        </div>
                                        <ul class="social">
                                            comptable de la FLESH
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="{{ asset('assets/images/A propos/user.jpg') }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Docteur ADI Tchilabalo </h3>
                                            <h4 class="title">membre du Laboratoire</h4>
                                        </div>
                                        <ul class="social">
                                            Maître de Conférences
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 ml-auto ">
                    @include('partials.right-aside')
                </div>
            </div>
        </div>
    </div>
@endsection
