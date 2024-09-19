@extends('base')
@section('style')
    @auth
        <link rel="stylesheet" href={{ asset('assets/css/dashboard.css') }}>

    @endauth
@endsection
@section('web-content')
    @auth
        <div class="container">


            <div class="row">
                <div id="sj-twocolumns" class="sj-twocolumns">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 float-left">
                        @include('partials.aside')
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 float-right">
                        @yield('admin-content')

                    </div>
                </div>
            </div>
        </div>


    @endauth
@endsection
