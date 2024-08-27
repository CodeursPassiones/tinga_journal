@extends('base')
@section('style')
    <!-- include summernote css/js -->
    <link href={{ asset('assets/plugins/summernote/summernote-lite.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/plugins/select2/css/select2.min.css') }} rel="stylesheet">
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
                <div id="sj-twocolumns" class="sj-twocolumns">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-right">
                        <div id="sj-content" class="sj-content sj-addarticleholdcontent">
                            <div class="sj-dashboardboxtitle">
                                <h2>Ajouter un Nouvel Article</h2>
                            </div>
                            <div class="sj-addarticlehold">
                                <form class="sj-formtheme sj-formarticle" id="articleAddForm">
                                    <input type="hidden" name="issue_id" value={{ $issue->id }}>
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Titre de l'article*">
                                        </div>
                                        <div class="form-group">
                                            <span class="sj-select">
                                                <select name="discipline">
                                                    <option value="">Choirsir la catégorie </option>
                                                    @foreach ($disciplines as $discipline)
                                                        <option value={{ $discipline->id }}> {{ $discipline->name }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <span class="sj-select">

                                                <select class="authors-select" name="authors[]" multiple="multiple"
                                                    id="authors" aria-placeholder="Auteurs">
                                                    @foreach ($authors as $author)
                                                        <option value={{ $author->id }}>
                                                            {{ $author->firstname . ' ' . $author->lastname }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </div>


                                        <div class="form-group">
                                            <textarea id="abstract" name="abstract" placeholder="Résumé" rows="1"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="content" name="content" placeholder="Contenu"></textarea>

                                        </div>
                                    </fieldset>



                                    <div class="sj-submitdetails">

                                        <button class="sj-btn sj-btnactive " id="articleAddBtn" type="submit">
                                            <span class="normal-status">
                                                Publier
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

                </div>
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
