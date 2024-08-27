@extends('base')
@section('style')
    <link rel="stylesheet" href={{ asset('assets/css/css_custom/scientifique.css') }}>
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
                            <li><a href="#">Comité scientifique et de lecture</a></li>
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
                                <img src="{{ asset('assets/images/A propos/lecture.jpg') }}" style="height: 400px;"
                                    alt="image description">
                            </figure>
                        </div>
                        <div class="animated-container">
                            <div class="void" id="void">
                                <div class="crop">
                                    <ul id="card-list" style="--count: 9;">
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Issa TAKASSI</span>
                                                    <span>Professeur titulaire, Université de Lomé, Togo ;</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Kossi Antoine AFELI</span>
                                                    <span>Professeur titulaire, Université de Lomé, Togo ;</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Komla Messan NUBUKPO</span>
                                                    <span>Professeur titulaire, Université de Lomé, Togo ;</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Kokou Essodina PERE-KEWEZIMA</span>
                                                    <span>Professeur titulaire, Université de Lomé, Togo ;</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Alou KEITA</span>
                                                    <span>Professeur titulaire, Université de Ouagadougou ;</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Bernard KABORE</span>
                                                    <span>Professeur titulaire, Université de Ouagadougou ;</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Laré KANTCHOA</span>
                                                    <span>Professeur titulaire, Université de Kara, Togo ;</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card">
                                                <a href="">
                                                    <span class="model-name">Coffi SAMBIENI</span>
                                                    <span>Professeur titulaire, Université d’Abomey-Calavi ;</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="center-circle"></div>
                                    <div class="second-circle"></div>
                                    <div class="last-circle"></div>
                                    <div class="mask"></div>
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
    @endsection
