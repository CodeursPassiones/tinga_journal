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
                        <h1>Volumes</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Volumes/Liste</a></li>
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

                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
                    <div id="sj-content" class="sj-content">

                        <div class="sj-issuesyears">
                            <div id="sj-accordion" class="sj-accordion" role="tablist" aria-multiselectable="true">

                                @forelse  ($result as $decade => $volumes)
                                    <div class="sj-panel">
                                        <h4>{{ $decade }}<i class="fa fa-angle-down"></i></h4>
                                        <div class="sj-panelcontent">
                                            <div class="sj-recordholder">
                                                @foreach ($volumes as $volume)
                                                    <a class="sj-btnrecord"
                                                        href={{ route('web.issues.list', $volume->id) }}>
                                                        <span>{{ $volume->year }}</span><i class="fa fa-angle-right"></i>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    Aucun Volume publié
                                @endforelse



                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 ">
                    @include('partials.right-aside')
                </div>
            </div>
        </div>
    </div>
@endsection
