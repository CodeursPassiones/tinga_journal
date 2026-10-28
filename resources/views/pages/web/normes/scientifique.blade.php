@extends('base')
@section('title', 'Comité scientifique | Tɩ́ɩ́ŋá')
@section('description', 'le comité scientifique de la revue Tɩ́ɩ́ŋá ')
@section('keywords',
    'tinga, revue tinga,comité scientifique, "la Revue Langues, Littératures, Arts et Culture", LaLD,
    "CAMES" ')
@section('style')
    <link rel="stylesheet" href={{ asset('assets/css/custom/scientifique.css') }}>
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
                            <li><a href="#">Comité scientifique et de lecture</a></li>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="sj-content" class="sj-content">
                        <div class="sj-aboutus">
                            <figure class="sj-aboutusimg">
                                <img src="{{ asset('assets/images/A propos/lecture.jpg') }}" style="height: 400px;"
                                    alt="image description">
                            </figure>
                        </div>

                        <h2 style="text-align: center"> Comité scientifique et de lecture </h2>
                        <style>
                            .contact-info {
                                display: flex;
                                flex-wrap: wrap;
                                /* Les éléments peuvent se répartir sur plusieurs lignes */
                                justify-content: space-between;
                                background-color: #fff;
                                padding: 10px 20px;
                                border-radius: 8px;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                font-size: 1.2em;
                            }

                            .contact-info .row {
                                display: flex;
                                width: calc(50% - 20px);
                                margin-bottom: 10px;
                                background-color: #f9f9f9;
                                border: 1px solid #ddd;
                                padding: 15px;
                                border-radius: 8px;
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                                /* Légère ombre */
                            }

                            .contact-info .row span {
                                text-align: left;
                                line-height: 1.5;
                            }

                            @media (max-width: 600px) {
                                .contact-info .row {
                                    width: 100%;
                                }
                            }
                        </style>

                        <div class="contact-info">
                            <div class="row">
                                <span><strong>Kossi Antoine AFELI</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Komla Messan NUBUKPO</strong>, Prof. titulaire, Université de Lomé,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Kokou Essodina PERE-KEWEZIMA</strong>, Prof. titulaire, Université de Lomé,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Alou KEITA</strong>, Prof. titulaire, Université de Ouagadougou</span>
                            </div>

                            <div class="row">
                                <span><strong>Bernard KABORE</strong>, Prof. titulaire, Université de Ouagadougou</span>
                            </div>

                            <div class="row">
                                <span><strong>Laré KANTCHOA</strong>, Prof. titulaire, Université de Kara, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Coffi SAMBIENI</strong>, Prof. titulaire, Université d’Abomey-Calavi</span>
                            </div>

                            <div class="row">
                                <span><strong>Akayaou Méterwa OURSO</strong>, Prof. titulaire, Université de Lomé,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Komlan E. ESSIZEWA</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Minlipe M. GANGUE</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Améyo S. AWUKU</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Léa Marie-Laurence N’GORAN</strong>, Professeure Titulaire, Université
                                    Alassane Ouattara, Côte d’Ivoire</span>
                            </div>

                            <div class="row">
                                <span><strong>Tchaa PALI</strong>, Prof. titulaire, Université de Kara, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Gratien Gualbert ATINDOGE</strong>, Prof. titulaire, Université de Buea,
                                    Cameroun</span>
                            </div>

                            <div class="row">
                                <span><strong>Abou NAPON</strong>, Prof. titulaire, Université de Ouagadougou, Burkina
                                    Faso</span>
                            </div>

                            <div class="row">
                                <span><strong>Boussanlègue TCHABLE</strong>, Prof. titulaire, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Larry AMIN</strong>, Prof. titulaire, Université de Kara, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Gregory SIMIRE</strong>, Prof. titulaire, Université de Lagos, Nigéria</span>
                            </div>

                            <div class="row">
                                <span><strong>Ataféi PEWISSI</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Kodjo AFAGLA</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Musanji N’GALASSO-MWATHA</strong>, Prof. titulaire, Université Michel de
                                    Montaigne, Bordeaux 3</span>
                            </div>
                            <div class="row">
                                <span><strong>Akoété AMOUZOU</strong>, Prof. titulaire, Université de Kara, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Flavien GBETO</strong>, Prof. titulaire, Université d’Abomey-Calavi,
                                    Bénin</span>
                            </div>

                            <div class="row">
                                <span><strong>Martin GBENOUGAN</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Charles Atiyihwe AWESSO</strong>, Prof. titulaire, Université de Lomé,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Bernard KABORE</strong>, Prof. titulaire, Université de Koudougou, Burkina
                                    Faso</span>
                            </div>

                            <div class="row">
                                <span><strong>Koutchoukalo TCHASSIM</strong>, Prof. titulaire, Université de Lomé,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Kossi TITRIKOU</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Didier AMELA</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Kouméalo ANATE</strong>, Prof. titulaire, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Balaïbaou KASSAN</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Komi KPATCHA</strong>, Maître de conférences, Université de Kara, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Mimboabe BAKPA</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Palakyém MOUZOU</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Bawa KAMMANPOAL</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Baguissoga SATRA</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Yentougle MOUTORE</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Essohouna TANANG</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Tchilabalo ADI</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Kodjo Biava KLUTSE</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Panaewazibiou DADJA-TIOU</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Kpatcha Essobozou AWESSO</strong>, Maître de conférences, Université de Kara,
                                    Togo</span>
                            </div>
                            <div class="row">
                                <span><strong>Kokou AZAMEDE</strong>, Maître de conférences, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Koffi M. L. MOLLEY</strong>, Maître de conférences, Université de Lomé,
                                    Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Charles Dossou LIGAN</strong>, Maître de conférences, Université
                                    d’Abomey-Calavi, Bénin</span>
                            </div>

                            <div class="row">
                                <span><strong>Idrissou ZIME YERIMA</strong>, Maître de conférences, Université
                                    d’Abomey-Calavi, Bénin</span>
                            </div>

                            <div class="row">
                                <span><strong>Gbandi ADOUNA</strong>, Maître de conférences, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Mawaya TAKAO</strong>, Maître de conférences, Université de Lomé, Togo</span>
                            </div>

                            <div class="row">
                                <span><strong>Gnabana PIDABI</strong>, Maître de conférences, Université de Lomé,
                                    Togo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3 ml-auto ">
                    @include('partials.right-aside')
                </div> --}}
        </div>
    </div>
    </div>
@endsection
