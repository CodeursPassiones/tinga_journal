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
            <form class="sj-formtheme sj-managesessionform">
                <fieldset>
                    <div class="form-group">
                        <button type="button" class="sj-btn sj-btnactive" data-toggle="modal"
                            data-target="#addVolumeModal">Créer</button>
                    </div>
                    <div class="form-group sj-inputwithicon float-right">
                        <i class="lnr lnr-sync"></i>
                        <span class="sj-select">
                            <select data-placeholder="All" name="locations" disabled>
                                <option value="">Ordonner</option>
                                <option value="aberdeen">Sort By1</option>
                                <option value="aldershot">Sort By2</option>
                                <option value="altrincham">Sort By</option>
                                <option value="aylesbury">Sort By4</option>
                            </select>
                        </span>
                    </div>
                </fieldset>
            </form>
            <ul class="sj-allcategorys">

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
    @include('pages.admin.volumes.create')
@endsection
@push('js')
    {{-- <script src={{ asset('app-js/admin/general/add.js') }}></script> --}}
@endpush
