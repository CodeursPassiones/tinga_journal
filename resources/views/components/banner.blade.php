    <!--************************************
                                                                                                                                                                                                                             Inner Banner Start
                                                                                                                                                                                                                           *************************************-->
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>{{ $title }}</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="{{ $parentRoute ?? route('home') }}">{{ $parent ?? 'Acceuil' }}</a></li>
                            <li><a href="javascript:void(0);">{{ $main }}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                 Inner Banner End
                                                                                                                                                                                                                                                                                                                                                                                                                                               *************************************-->
