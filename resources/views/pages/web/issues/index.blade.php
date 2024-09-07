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
                        <h1>Numéros du Volume {{ $volume->year }}</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Numéros/{{ $volume->year }}</a></li>
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

                        <div class="sj-issuesweeks">
                            <div class="sj-borderheading">
                                <h3>Numéros du Volume {{ $volume->year }}</h3>
                            </div>
                            <div id="sj-accordion" class="sj-accordion" role="tablist" aria-multiselectable="true">
                                @if ($result->isEmpty())
                                    <p>

                                        Ce volume ne contient pas encore de numéro :)
                                    </p>
                                @else
                                    @foreach ($result as $month => $issues)
                                        <div class="sj-panel">
                                            <h4>{{ $month }}<i class="fa fa-angle-down"></i></h4>
                                            <div class="sj-panelcontent">
                                                <div class="sj-recordholder">
                                                    @foreach ($issues as $issue)
                                                        <a class="sj-btnrecord"
                                                            href={{ route('web.articles.list', ['issue_id' => $issue->id]) }}><span>N.{{ $issue->title }}</span><i
                                                                class="fa fa-angle-right"></i></a>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif



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
