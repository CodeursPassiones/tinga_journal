@extends('base')
@section('style')
    @yield('form-style')

    @auth
        <link rel="stylesheet" href={{ asset('assets/css/dashboard.css') }}>

    @endauth
@endsection
@section('banner')
    <!--************************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 Inner Banner Start
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               *************************************-->
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Créer un article dans le numéro {{ $issue->number }} du @formatDateOnly($issue->publication_date)</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Article/Créer</a></li>
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
    @auth
        <div class="container">
            <div class="row">
                @include('pages.admin.articles.view.left')

                @yield('article-form')
                @include('pages.admin.articles.view.right')
                {{-- <div id="sj-twocolumns" class="sj-twocolumns">
                   

                </div> --}}
            </div>
        </div>
    @endauth
@endsection
