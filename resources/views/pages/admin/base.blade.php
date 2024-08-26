@extends('base')
@section('style')
    @auth
        <link rel="stylesheet" href={{ asset('assets/css/dashboard.css') }}>
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

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
@push('js')
    <script src={{ asset('assets/plugins/filepond/dist/filepond.min.css') }}></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
@endpush
