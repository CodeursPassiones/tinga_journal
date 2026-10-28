@extends('base')
@section('robots', 'noindex,nofollow')

@section('web-content')
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <aside id="sj-sidebarvtwo" class="sj-sidebar">

                        <div class="sj-widget sj-widgetsinginwith" style="margin-top:125px; margin-left:80px">
                            <div class="sj-widgetcontent">
                                <strong class="sj-logo" style="display: flex; gap:15px">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="revue"
                                            style="height: 60px; width:60px;">
                                    </a>
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/labo.jpg') }}" alt="revue"
                                            style="height: 60px; width:170px;">
                                    </a>
                                </strong>
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
