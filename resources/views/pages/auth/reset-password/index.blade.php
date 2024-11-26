@extends('pages.auth.base')
@section('banner')
    <x-banner title="'Changer Mot De Passe" main="Change Password" />
@endsection
@section('guest-content')
    <div id="sj-content" class="sj-content">
        <div class="sj-registerarea">
            <div class="registernow ">
                <div class="sj-borderheading">
                    <h3>Changer le Mot De Passe</h3>
                </div>
                <div class="sj-registerformholder">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">

                            <div class="sj-widget sj-widgetlogin">

                                <div class="sj-widgetcontent">
                                    <form class="sj-formtheme sj-formlogin modelAddForm" id="modelAddForm"
                                        data-model-add-url="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="email" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Mot De Passe" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    placeholder="Mot De Passe" autocomplete="off">
                                            </div>
                                            <div class="form-group sj-forgotpass">

                                                <a class="sj-forgorpass" href="{{ route('login') }}">Se Connecter
                                                    ?</a>
                                            </div>
                                            <div class="sj-btnarea">
                                                {{-- <a class="sj-btn sj-btnactive" href="#">Connexion</a> --}}
                                                <button class="sj-btn sj-btnactive" type="submit" id="modelAddBtn">
                                                    <span class="normal-status">
                                                        Soumettre
                                                    </span>
                                                    <span class="indicateur d-none">
                                                        <span><i class="fa fa-spinner text-secondary"></i>
                                                            Loading...
                                                        </span>

                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
@push('js')
    <script src={{ asset('app-js/crud/post.js') }}></script>
@endpush
