@extends('base')

@section('web-content')
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <aside id="sj-sidebarvtwo" class="sj-sidebar">

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
                    @guest
                        @yield('guest-content')
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
