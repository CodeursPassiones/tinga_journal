@extends('pages.admin.articles.view.base')
@section('form-style')
    <!-- include summernote css/js -->
    <link href={{ asset('assets/plugins/summernote/summernote-lite.min.css') }} rel="stylesheet">
@endsection
@section('article-form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div id="sj-content" class="sj-content sj-addarticleholdcontent">
            <div class="sj-dashboardboxtitle">
                <h2>Métadonnées de l'article</h2>
            </div>
            <div class="sj-addarticlehold">

                <form class="sj-formtheme sj-formarticle" id="articleMetadataForm">
                    @csrf
                    <input type="hidden" name="article_id" value={{ $article->id }}>
                    <fieldset>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-4">
                                <div class="form-group"></div>
                                <label for="prefix" class="">Préfix </label>
                                <input type="text" name="prefix" class="form-control " placeholder="Préfix"
                                    id="prefix" value="{{ $article->prefix }}">
                                <label class="f6">exemple : "Un","Le"</label>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-8">
                                <div class="form-group"></div>
                                <label for="title" class="required">Titre </label>
                                <input type="text" name="title" class="form-control " placeholder="Titre de l'article*"
                                    id="title" value="{{ $article->title }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="subtitle" class="">Sous-Titre </label>
                            <input type="text" name="subtitle" class="form-control "
                                placeholder="Sous-Titre de l'article" id="subtitle" value="{{ $article->subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="keywords" class="">Mots clés </label>
                            <input type="text" name="keywords" class="form-control " placeholder="Mots clés"
                                id="keywords" value="{{ $article->keywords }}">
                        </div>
                        <div class="form-group">
                            <label for="discipline" class="required">Discipline</label>

                            <span class="sj-select">
                                <select name="discipline" id="discipline">
                                    <option value="">Choirsir la discipline </option>
                                    @foreach ($disciplines as $discipline)
                                        <option value={{ $discipline->id }}
                                            {{ $article->discipline_id === $discipline->id ? 'selected' : '' }}>
                                            {{ $discipline->name }}</option>
                                    @endforeach
                                </select>
                            </span>
                        </div>




                        <div class="form-group">
                            <label for="citation" class="">Citation</label>
                            <textarea id="citation" name="citation" class="summernotes">{!! $article->citation !!}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="abstract" class="required">Résumé</label>
                            <textarea id="abstract" name="abstract" class="summernotes">{!! $article->abstract !!}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="en_abstract" class="required">Résumé En Anglais</label>
                            <textarea id="en_abstract" name="en_abstract" class="summernotes">{!! $article->en_abstract !!}</textarea>

                        </div>
                    </fieldset>

                    <div class="sj-submitdetails">

                        <button class="sj-btn sj-btnactive" id="articleMetadataBtn" type="submit">
                            <span class="normal-status">
                                Enregistrer Et Continuer
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
@endsection
@push('js')
    <script>
        window.articleMtl = "{{ $article->matricule }}"
    </script>
    <script src={{ asset('assets/plugins/summernote/summernote-lite.min.js') }}></script>
    <script src={{ asset('assets/plugins/summernote/lang/summernote-fr-FR.min.js') }}></script>
    <script src={{ asset('app-js/admin/article/metadata.js') }}></script>
@endpush
