@extends('base')

@section('web-content')
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <aside id="sj-sidebarvtwo" class="sj-sidebar">

                        <div class="sj-widget sj-widgetsinginwith">
                            <div class="sj-widgetcontent">
                                {{-- <strong class="sj-logo"><a href={{ route('home') }}><img
                                            src={{ asset('assets/images/logo-templates/logo.png') }}
                                            alt="Tinga Logo"></a></strong> --}}
                                <a href="" class="tinga"></a>
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
