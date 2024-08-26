@extends('base')
@section('style')
    <!-- include summernote css/js -->
    <link href={{ asset('assets/plugins/summernote/summernote-bs4.min.css') }} rel="stylesheet">

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> --}}
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
                        <h1>Créer un article</h1>
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
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 float-right">
                        <div id="sj-content" class="sj-content sj-addarticleholdcontent">
                            <div class="sj-dashboardboxtitle">
                                <h2>Ajouter un Nouvel Article</h2>
                            </div>
                            <div class="sj-addarticlehold">
                                <form class="sj-formtheme sj-formarticle">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Title of Article *">
                                        </div>
                                        <div class="form-group">
                                            <span class="sj-select">
                                                <select name="discipline">
                                                    <option>Choirsir la catégorie (Optional)</option>
                                                    @foreach ($disciplines as $discipline)
                                                        <option value={{ $discipline->id }}> {{ $discipline->name }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group sj-authorhold">
                                            <span class="sj-select">
                                                <select>
                                                    <option>Select Author</option>
                                                    <option>Name 2</option>
                                                    <option>Name 3</option>
                                                    <option>Name 4</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group sj-authorholdvtwo">
                                            <span class="sj-select">
                                                <select>
                                                    <option>Select Author</option>
                                                    <option>Name 2</option>
                                                    <option>Name 3</option>
                                                    <option>Name 4</option>
                                                </select>
                                            </span>
                                            <div class="sj-adddelbtns">
                                                <a href="javascript:void(0);" class="sj-addbtn"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-group sj-authorhold">
                                            <span class="sj-select">
                                                <select>
                                                    <option>Select Author</option>
                                                    <option>Name 2</option>
                                                    <option>Name 3</option>
                                                    <option>Name 4</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group sj-authorholdvtwo">
                                            <span class="sj-select">
                                                <select>
                                                    <option>Select Author</option>
                                                    <option>Name 2</option>
                                                    <option>Name 3</option>
                                                    <option>Name 4</option>
                                                </select>
                                            </span>
                                            <div class="sj-adddelbtns">
                                                <a href="javascript:void(0);" class="sj-addbtn sj-delbtn"><i
                                                        class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Corresponding" class="form-control"
                                                placeholder="Corresponding Author Title Here">
                                        </div>
                                        <div class="form-group">
                                            <textarea id="abstract" name="abstract" placeholder="Résumé"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <textarea id="content" name="content" placeholder="Contenu"></textarea>

                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 float-left">
                        <aside id="sj-sidebarvtwo" class="sj-sidebar">
                            <div class="sj-profilestrenght">
                                <div class="sj-headerhold">
                                    <div class="sj-dashboardboxtitle">
                                        <h2>Article Strength</h2>
                                        <span>Consectetur adipisicing elit eiusmod</span>
                                    </div>
                                    <div id="sj-ourskill" class="sj-ourskill">
                                        <div class="sj-skill">
                                            <div class="sj-skillholder" data-percent="84%">
                                                <div class="sj-skillbar" style="width: 0%;"></div>
                                            </div>
                                            <span class="sj-strenghtcomplete">84% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="sj-profilecomplete">
                                    <li class="sj-profilecompleted"><i class="ti-check"></i><span>Article Title</span></li>
                                    <li class="sj-profilecompleted"><i class="ti-check"></i><span>First Author</span></li>
                                    <li class="sj-profileerror"><i class="ti-na"></i><span>Your Abstract</span></li>
                                    <li class="sj-profilecompleted"><i class="ti-check"></i><span>Upload Document(s)</span></li>
                                </ul>
                                <div class="sj-submitdetails">
                                    <span>I accept all the submiting article’s<a href="javascript:void(0);">Terms &amp;
                                            Conditions</a></span>
                                    <a href="javascript:void(0);" class="sj-btn sj-btnactive">Submit Now</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
@push('js')
    {{-- <script src={{ asset('assets/plugins/summernote/summernote-lite.min.js') }}></script> --}}
    <script src={{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}></script>
    <script src={{ asset('assets/plugins/summernote/lang/summernote-fr-FR.min.js') }}></script>

    <script src={{ asset('app-js/admin/article/create.js') }}></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
@endpush
