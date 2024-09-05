@extends('pages.admin.articles.view.base')

@section('article-form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 float-right">
        <div id="sj-content" class="sj-content sj-addarticleholdcontent">
            <div class="sj-dashboardboxtitle">
                <h2>Ajouter un Nouvel Article</h2>
            </div>
            <div class="sj-addarticlehold">
                <form class="sj-formtheme sj-formarticle" id="articleAddForm" enctype="multipart/form-data">
                    <input type="hidden" name="issue_id" value={{ $issue->id }}>
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Titre de l'article*">
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

                                <select class="authors-select" name="authors[]" multiple="multiple" id="authors"
                                    aria-placeholder="Auteurs">
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
