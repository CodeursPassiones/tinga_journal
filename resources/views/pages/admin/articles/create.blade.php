@extends('base')
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
                                <h2>Add A New Article</h2>
                            </div>
                            <div class="sj-addarticlehold">
                                <form class="sj-formtheme sj-formarticle">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="Title" class="form-control"
                                                placeholder="Title of Article *">
                                        </div>
                                        <div class="form-group">
                                            <span class="sj-select">
                                                <select>
                                                    <option>Select Category (Optional)</option>
                                                    <option>Name 2</option>
                                                    <option>Name 3</option>
                                                    <option>Name 4</option>
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
                                            <textarea placeholder="Add Your Abstract"></textarea>
                                        </div>
                                    </fieldset>
                                </form>
                                <form class="sj-formtheme sj-formaddproject">
                                    <fieldset class="sj-dragdropimg">
                                        <div class="sj-inputtyfile">
                                            <div class="sj-title">
                                                <h3>Upload Powerpoint</h3>
                                            </div>
                                            <label for="sj-uploadimgvtwo">
                                                <span>Upload Your File Here</span>
                                                <span><i class="ti-upload"></i></span>
                                                <input type="file" name="uploadimgvtwo" id="sj-uploadimgvtwo">
                                            </label>
                                            <div class="sj-filedetails">
                                                <span>File should be max 500kb </span>
                                                <em>Not Uploaded Yet</em>
                                            </div>
                                        </div>
                                        <div class="sj-inputtyfile sj-uploading">
                                            <div class="sj-title">
                                                <h3>Upload Handout</h3>
                                            </div>
                                            <label for="sj-uploadimgvtwoa">
                                                <span>Final_handout_2019.pdf</span>
                                                <span><i class="ti-close"></i></span>
                                                <input type="file" name="uploadimgvtwo" id="sj-uploadimgvtwoa">
                                            </label>
                                            <div class="sj-filedetails">
                                                <span>File should be max 500kb </span>
                                                <em>File Uploaded</em>
                                            </div>
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
