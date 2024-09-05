@extends('pages.admin.articles.view.base')

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
