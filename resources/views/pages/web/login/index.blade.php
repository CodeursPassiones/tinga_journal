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
                        <h1>Become A Member</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Login/Register</a></li>
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
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <aside id="sj-sidebarvtwo" class="sj-sidebar">
                        <div class="sj-widget sj-widgetlogin">
                            <div class="sj-widgetheading">
                                <h3>Login Now</h3>
                            </div>
                            <div class="sj-widgetcontent">
                                <form class="sj-formtheme sj-formlogin">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="yourname" class="form-control"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group sj-forgotpass">
                                            <div class="sj-checkbox">
                                                <input type="checkbox" id="login">
                                                <label for="login">keep me logged in</label>
                                            </div>
                                            <a class="sj-forgorpass" href="javascript:void(0);">Forgot Password?</a>
                                        </div>
                                        <div class="sj-btnarea">
                                            <a class="sj-btn sj-btnactive" href="javascript:void(0);">Login</a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="sj-widget sj-widgetsinginwith">
                            <div class="sj-widgetcontent">
                                <ul>
                                    <li class="sj-logingoogle"><a href="javascript:void(0);"><i
                                                class="fab fa-google-plus-g"></i><span>Sign in
                                                with<em>“Google”</em></span></a></li>
                                    <li class="sj-loginfb"><a href="javascript:void(0);"><i
                                                class="fab fa-facebook-f"></i><span>Sign in
                                                with<em>“Facebook”</em></span></a></li>
                                    <li class="sj-loginlinkdin"><a href="javascript:void(0);"><i
                                                class="fab fa-linkedin-in"></i><span>Sign in
                                                with<em>“Linkedin”</em></span></a></li>
                                    <li class="sj-logintwitter"><a href="javascript:void(0);"><i
                                                class="fab fa-twitter"></i><span>Sign in with<em>“Twitter”</em></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div id="sj-content" class="sj-content">
                        <div class="sj-registerarea">
                            <figure class="sj-registerimg">
                                <iframe
                                    src="https://www.youtube.com/embed/iC9CpnSj-MU?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                <img src="images/placeholder-img2.jpg" alt="image description">
                            </figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
