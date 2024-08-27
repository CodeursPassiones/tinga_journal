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
                        <h1>Article dans le numéro {{ $article->issue->number }} du @formatDateOnly($article->issue->publication_date)</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Article/Mettre à Jour</a></li>
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
                                <h2>{{ $article->title }}</h2>
                            </div>
                            <div class="sj-addarticlehold">
                                <form class="sj-formtheme sj-formarticle" id="articleUpdateForm" enctype="multipart/form-data">
                                    <input type="hidden" name="issue_id" value={{ $article->issue->id }}>
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Titre de l'article*" value={{ $article->title }}>
                                        </div>
                                        <div class="form-group">
                                            <span class="sj-select">
                                                <select name="discipline">
                                                    <option value="">Choirsir la catégorie </option>
                                                    @foreach ($disciplines as $discipline)
                                                        <option value={{ $discipline->id }}
                                                            {{ $article->discipline_id === $discipline->id ? 'selected' : '' }}>
                                                            {{ $discipline->name }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <span class="sj-select">

                                                <select class="authors-select" name="authors[]" multiple="multiple"
                                                    id="authors" aria-placeholder="Auteurs">
                                                    @foreach ($authors as $author)
                                                        <option value={{ $author->id }}
                                                            @foreach ($article->articleUsers as $value)
                                                            {{ $value->user_id === $author->id ? 'selected' : '' }} @endforeach>
                                                            {{ $author->firstname . ' ' . $author->lastname }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </div>


                                        <div class="form-group">
                                            <textarea id="abstract" name="abstract" placeholder="Résumé" rows="1">{{ $article->abstract }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="content" name="content" placeholder="Contenu">{{ $article->content }}</textarea>

                                        </div>
                                    </fieldset>

                                    <fieldset class="">
                                        <div class="">
                                            <div class="sj-title">
                                                <h3>Charger l'image de l'article</h3>
                                            </div>
                                            <label for="imageUpload">
                                                <span>Charger ici</span>
                                                <span><i class="ti-upload"></i></span>
                                                <input type="file" name="image" id="imageUpload"
                                                    accept="image/png, image/jpeg, image/gif">
                                            </label>
                                            <div class="sj-filedetails">
                                                <span>Le fichier doit avoir une taille maximale de 500 Ko</span>
                                                <em>Pas encore téléchargé</em>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="sj-submitdetails">

                                        <button class="sj-btn sj-btnactive " id="articleUpdateBtn" type="submit">
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

                </div>
            </div>
        </div>
    @endauth
@endsection
@push('js')
    <script src={{ asset('assets/plugins/summernote/summernote-lite.min.js') }}></script>
    <script src={{ asset('assets/plugins/summernote/lang/summernote-fr-FR.min.js') }}></script>
    <script src={{ asset('assets/plugins/select2/js/select2.min.js') }}></script>
    <script src={{ asset('app-js/admin/article/update.js') }}></script>
@endpush
