@extends('pages.admin.articles.view.base')
@section('form-style')
    <link href={{ asset('assets/plugins/select2/css/select2.min.css') }} rel="stylesheet">
@endsection
@section('article-form')

    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
        <div id="sj-content" class="sj-content sj-addarticleholdcontent sj-addarticleholdvtwo">
            <div class="sj-dashboardboxtitle sj-titlewithform">
                <h2>Auteurs</h2>
                <form class="sj-formtheme sj-formsearchvtwo">
                    <div class="sj-sortupdown">
                        <a href="javascript:void(0);"><i class="fa fa-sort-amount-up" disabled></i></a>
                    </div>
                    <fieldset>
                        <input type="search" name="search" class="form-control" placeholder="Recherche" disabled>
                        <button type="submit" class="sj-btnsearch" disabled><i class="lnr lnr-magnifier"></i></button>
                    </fieldset>
                </form>
            </div>
            <div class="sj-manageallsession">
                <form class="sj-formtheme sj-managesessionform">
                    <fieldset>
                        <div class="form-group">
                            <button type="button" class="sj-btn sj-btnactive" data-toggle="modal"
                                data-target="#addAuthorModal">Ajouter Un Auteur</button>
                        </div>
                        <div class="form-group  float-right">



                            <select class="authors-select" name="author" id="authors" disabled>
                                <option></option>
                                @foreach ($authors as $author)
                                    <option value={{ $author->id }}>
                                        {{ $author->firstname . ' ' . $author->lastname }}</option>
                                @endforeach
                            </select>

                        </div>
                    </fieldset>
                </form>
                <ul class="sj-allcategorys sj-allcategorysvtwo">
                    @if ($article->articleUsers->isEmpty())
                        <p>Aucun auteur ajouté :(</p>
                    @else
                        @foreach ($article->articleUsers as $articleUsers)
                            <li class="sj-categorysinfo">
                                <figure class="sj-assignuserimg">
                                    <img src={{ asset($articleUsers->user->profile_picture) }} alt="img">
                                </figure>
                                <div class="sj-title">
                                    <h3>{{ $articleUsers->user->firstname . ' ' . $articleUsers->user->lastname }}
                                        <span class="sj-assignedinfo" data-toggle="modal" data-target="#feedbackmodal">(
                                            {{ $articleUsers->user->articles->count() }}
                                            Articles publiées )</span>
                                    </h3>
                                </div>
                                <div class="sj-categorysrightarea">

                                    <div class="sj-addremove">
                                        <a href="javascript:void(0);" class="sj-pencilbtn" data-toggle="modal"
                                            data-target="#updateAuthorModal{{ $articleUsers->user->id }}"><i
                                                class="ti-pencil"></i></a>
                                        <a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            @include('pages.admin.articles.view.forms.update-author')
                        @endforeach
                    @endif




                </ul>
                <!-- Liens de pagination -->


            </div>
        </div>
    </div>
    @include('pages.admin.articles.view.forms.create-author')
@endsection
@push('js')
    <script src={{ asset('assets/plugins/select2/js/select2.min.js') }}></script>
    <script src={{ asset('app-js/admin/article/authors.js') }}></script>
@endpush
