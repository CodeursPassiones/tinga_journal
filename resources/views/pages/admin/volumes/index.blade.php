@extends('pages.admin.base')
@section('banner')
    <!--************************************
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         Inner Banner Start
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       *************************************-->
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Paramettres</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">Paramettres</a></li>
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
@section('admin-content')
    <div id="sj-content" class="sj-content sj-addarticleholdcontent sj-addarticleholdvtwo">
        <div class="sj-dashboardboxtitle sj-titlewithform">
            <h2>Gestion Volumes</h2>
            <form class="sj-formtheme sj-formsearchvtwo">
                <div class="sj-sortupdown">
                    <a href="javascript:void(0);"><i class="fa fa-sort-amount-up"></i></a>
                </div>
                <fieldset>
                    <input type="search" name="search" class="form-control" placeholder="Rechercher" disabled>
                    <button type="submit" class="sj-btnsearch" disabled><i class="lnr lnr-magnifier"></i></button>
                </fieldset>
            </form>
        </div>
        <div class="sj-manageallsession">

            <ul class="sj-allcategorys">
                <li class="sj-addcategorys">
                    <form class="sj-formtheme sj-categorysform">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Titre du volume">
                            </div>

                            <div class="form-group">
                                <input type="text" name="year" class="form-control" placeholder="YYYY">
                            </div>
                            <div class="form-group sj-categorysbtn">
                                <a href="javascript:void(0);" class="sj-checkbtn"><i class="ti-check"></i></a>
                                <a href="javascript:void(0);" class="sj-btndecline">Annuler</a>
                            </div>
                        </fieldset>
                    </form>
                </li>
                @if ($volumes->isEmpty())
                    <p>Auccun Volumes trouvé :)</p>
                @else
                    @foreach ($volumes as $volume)
                        <li class="sj-categorysinfo">
                            <div class="sj-title">
                                <h3>Vol;{{ $volume->yeay }}
                                    <a href="#" class="">
                                        <span>{{ $volume->year }}</span>
                                    </a>
                                </h3>
                                <h4>{{ $volume->title }} </h4>

                            </div>
                            <div class="sj-categorysrightarea">
                                <a href="{{ route('admin.issues.list', $volume->id) }}" class="sj-eyebtn"><i
                                        class="ti-eye"></i></a>
                                <a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
                                <a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                    @endforeach
                @endif

            </ul>
            <nav class="sj-pagination">
                {{ $volumes->links() }}
            </nav>
        </div>
    </div>

@endsection
@push('js')
    {{-- <script src={{ asset('app-js/admin/general/add.js') }}></script> --}}
@endpush
