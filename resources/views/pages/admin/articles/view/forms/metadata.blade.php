@extends('pages.admin.articles.view.base')

@section('article-form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div id="sj-content" class="sj-content sj-addarticleholdcontent">
            <div class="sj-dashboardboxtitle">
                <h2>Métadonnées de l'article</h2>
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
                            <textarea id="abstract" name="abstract" placeholder="Résumé" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea id="content" name="content" placeholder="Contenu"></textarea>

                        </div>
                    </fieldset>




                </form>

            </div>
        </div>
    </div>
@endsection
