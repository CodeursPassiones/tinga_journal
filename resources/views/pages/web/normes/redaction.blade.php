@extends('base')
@section('title', 'Tɩ́ɩ́ŋá-comité de rédaction')
@section('description', 'le comité de rédaction de la revue Tɩ́ɩ́ŋá ')
@section('keywords',
    'tinga, revue tinga,comité de rédaction, "la Revue Langues, Littératures, Arts et Culture", LaLD,
    "CAMES" ')
@section('style')
    <link rel="stylesheet" href={{ asset('assets/css/css_custom/redaction.css') }}>
@endsection
@section('banner')
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Administration de la revue</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="#">Administation</a></li>
                            <li><a href="#">Comité de rédaction</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('web-content')
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div id="sj-content" class="sj-content">
                        <div class="sj-aboutus">
                            <figure class="sj-aboutusimg">
                                <img src="{{ asset('assets/images/A propos/redaction.webp') }}" style="height: 400px;"
                                    alt="image description">
                            </figure>
                            <div class="sj-ourhistory sj-sectioninnerspace">
                                <div class="sj-borderheading">
                                    <h3>Comité de rédaction </h3>
                                </div>
                                <div class="container" style="margin-top: 30px">
                                    <div class="row"
                                        style="display: grid;
                                            grid-template-columns: repeat(3, 1fr);">
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3>Directeur scientifique </h3>
                                                <h6>Professeur KANTCHOA Laré</h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        (+228) 90 00 71 45
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3> Directeur publication </h3>
                                                <h6> Docteur KPATCHA Komi </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        (+228) 90 27 19 80
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK | Maître de Conférences</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3> Rédacteur en chef </h3>
                                                <h6>Docteur BAKPA Mimboabe </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        (+228) 90 99 48 49
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK | Maître de Conférences</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3> Secrétaire </h3>
                                                <h6>Docteur AWIZOBA Essobozouwè </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        (+228) 92 18 19 69
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3> Secrétaire </h3>
                                                <h6>Docteur HALOUBIYOU Assolissim </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        ~
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3> Secrétaire </h3>
                                                <h6>Docteur TCHENDO Yao </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        ~
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3> Secrétaire </h3>
                                                <h6>Docteur TAKOUGNADI Yoma </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        ~
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}" alt="user" />

                                                <h3> Secrétaire </h3>
                                                <h6>Docteur GAWA Djahéma </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        (+228) 90 12 23 37
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="margin-top: 20px">
                                            <div class="card-container">
                                                <img class="round" style="width: 100px; height: 100px;"
                                                    src="{{ asset('assets/images/A propos/user.jpg') }}"
                                                    alt="user" />

                                                <h3> Secrétaire </h3>
                                                <h6>Docteur AGNALA Essoron </h6>
                                                <div class="buttons">
                                                    <button class="primary">
                                                        <span class="lnr lnr-phone"></span>
                                                    </button>
                                                    <button class="primary ghost">
                                                        ~
                                                    </button>
                                                </div>
                                                <div class="skills">
                                                    <h6>UK | secrétaire principal de la FLESH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 ml-auto ">
                    @include('partials.right-aside')
                </div>
            </div>
        </div>
    </div>
@endsection
