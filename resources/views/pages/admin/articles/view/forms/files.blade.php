@extends('pages.admin.articles.view.base')
@section('form-style')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    {{-- <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" /> --}}
@endsection
@section('article-form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
        <div id="sj-content" class="sj-content sj-addarticleholdcontent">
            <div class="sj-dashboardboxtitle">
                <h2>Chargement des fichers</h2>
            </div>
            <div class="sj-addarticlehold">
                <form class="sj-formtheme sj-formarticle" id="articleAddForm" enctype="multipart/form-data">


                    <fieldset class="">
                        <div class="">
                            <input type="file" name="image" id="imageUpload" accept="image/png, image/jpeg, image/gif">
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
@endsection
@push('js')
    {{-- <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script> --}}
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src={{ asset('app-js/admin/article/files.js') }}></script>
@endpush
