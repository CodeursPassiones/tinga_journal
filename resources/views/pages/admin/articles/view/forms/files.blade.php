@extends('pages.admin.articles.view.base')
@section('form-style')
    <link href={{ asset('assets/plugins/filepond/dist/filepond.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/plugins/filepond/plugins/filepond-plugin-image-preview.css') }} rel="stylesheet" />
@endsection
@section('article-form')

    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div id="sj-content" class="sj-content sj-addarticleholdcontent">
            <div class="sj-dashboardboxtitle">
                <h2>Modification des fichiers</h2>
            </div>
            <div class="sj-addarticlehold">
                <form class="sj-formtheme sj-formarticle" id="articleFilesForm" enctype="multipart/form-data">
                    @csrf
                    @method('POST') <!-- Pour la mise à jour -->

                    <input type="hidden" name="article_id" value="{{ $article->id }}">

                    <!-- Affichage de l'image existante -->
                    @if ($article->image_path && $article->image_path !== '/assets/images/thumbnails/img-02.jpg')
                        <fieldset>
                            <div class="form-group">
                                <label>Image actuelle :</label>
                                <div class="current-image">
                                    <img src="{{ asset($article->image_path) }}" alt="Image de l'article" class="img-fluid"
                                        style="max-width: 100%; height: auto; border: 1px solid #ccc; padding: 5px; margin-bottom: 10px;">
                                </div>
                                <label>
                                    <input type="checkbox" name="delete_image" id="delete_image"> Supprimer cette image
                                </label>
                            </div>
                        </fieldset>
                    @endif

                    <!-- Upload d'une nouvelle image -->
                    <fieldset class="">
                        <div class="form-group">
                            <label for="imageUpload">Nouvelle image :</label>
                            <input type="file" name="image" id="imageUpload" accept="image/png, image/jpeg, image/gif"
                                class="">
                        </div>
                    </fieldset>

                    <!-- Affichage des fichiers PDF existants -->
                    @if ($article->files && $article->files->count() > 0)
                        <fieldset class="">
                            <div class="form-group">
                                <label>Fichiers PDF actuels :</label>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">


                                        <span>Fichiers PDFS</span>
                                        <label class="form-check-label">
                                            Supprimer ?
                                        </label>
                                    </li>
                                    @foreach ($article->files as $file)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">

                                            <i class="fa fa-file"></i>
                                            <a href="{{ asset($file->path) }}" target="_blank">{{ $file->name }}</a>
                                            <label class="form-check-label">
                                                <input type="checkbox" name="delete_files[]" value="{{ $file->id }}"
                                                    class="form-check-input">
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </fieldset>
                    @endif

                    <!-- Upload de nouveaux fichiers PDF -->
                    <fieldset class="">
                        <div class="form-group">
                            <label for="pdfUpload">Ajouter des fichiers PDF :</label>
                            <input type="file" name="files[]" id="pdfUpload" accept="application/pdf" multiple
                                class="">
                        </div>
                    </fieldset>

                    <div class="sj-submitdetails">
                        <button class="sj-btn sj-btnactive" id="articleFilesBtn" type="submit">
                            <span class="normal-status">
                                Mettre à jour
                            </span>
                            <span class="indicateur d-none">
                                <span><i class="fa fa-spinner text-secondary"></i> Chargement...</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script src={{ asset('assets/plugins/filepond/plugins/filepond-plugin-image-preview.js') }}></script>
    <script src={{ asset('assets/plugins/filepond/plugins/filepond-plugin-file-validate-type.js') }}></script>
    <script src={{ asset('assets/plugins/filepond/dist/filepond.min.js') }}></script>
    <script src={{ asset('app-js/admin/article/files.js') }}></script>
@endpush
