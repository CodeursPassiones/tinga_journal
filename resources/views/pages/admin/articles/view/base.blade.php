@extends('base')
@section('style')
    <!-- include summernote css/js -->
    <link href={{ asset('assets/plugins/summernote/summernote-lite.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/plugins/select2/css/select2.min.css') }} rel="stylesheet">

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
@push('js')
    <script src={{ asset('assets/plugins/summernote/summernote-lite.min.js') }}></script>
    <script src={{ asset('assets/plugins/summernote/lang/summernote-fr-FR.min.js') }}></script>
    <script src={{ asset('assets/plugins/select2/js/select2.min.js') }}></script>
    <script src={{ asset('app-js/admin/article/create.js') }}></script>
@endpush
