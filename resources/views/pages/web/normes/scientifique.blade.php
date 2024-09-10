@extends('base')
@section('style')
    <link rel="stylesheet" href={{ asset('assets/css/css_custom/scientifique.css') }}>
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
                                display: table;
                                width: 100%;
                                background-color: #fff;
                                padding: 10px 20px;
                                border-radius: 8px;
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                font-size: 1.2em;
                            }

                            .contact-info .row {
                                display: table-row;
                            }

                            .contact-info .cell {
                                display: table-cell;
                                padding: 10px;
                                border: 1px solid #ddd;
                                /* Bordure autour de chaque cellule */
                                background-color: #f9f9f9;
                                /* Fond légèrement gris */
                                text-align: center;
                                /* Centrer le texte dans chaque cellule */
                                vertical-align: middle;
                                /* Aligner verticalement au centre */
                            }

                            .contact-info .cell:first-child {
                                font-weight: bold;
                                /* Rendre le premier champ (nom) plus gras */
                            }
                        </style>

                        <div class="contact-info">
                            <div class="row">
                                <div class="cell"><strong>Nom</strong></div>
                                <div class="cell"><strong>Titre</strong></div>
                                <div class="cell"><strong>Université</strong></div>
                                <div class="cell"><strong>Pays</strong></div>
                            </div>
                            <div class="row">
                                <div class="cell">Issa TAKASSI</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Kossi Antoine AFELI</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Komla Messan NUBUKPO</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Kokou Essodina PERE-KEWEZIMA</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Alou KEITA</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Ouagadougou</div>
                                <div class="cell"></div>
                            </div>

                            <div class="row">
                                <div class="cell">Bernard KABORE</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Ouagadougou</div>
                                <div class="cell"></div>
                            </div>

                            <div class="row">
                                <div class="cell">Laré KANTCHOA</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Coffi SAMBIENI</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université d’Abomey-Calavi</div>
                                <div class="cell"></div>
                            </div>

                            <div class="row">
                                <div class="cell">Akayaou Méterwa OURSO</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Komlan E. ESSIZEWA</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Minlipe M. GANGUE</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Améyo S. AWUKU</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Léa Marie-Laurence N’GORAN</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université Alassane Ouattara</div>
                                <div class="cell">Côte d’Ivoire</div>
                            </div>

                            <div class="row">
                                <div class="cell">Tchaa PALI</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Gratien Gualbert ATINDOGE</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Buea</div>
                                <div class="cell">Cameroun</div>
                            </div>

                            <div class="row">
                                <div class="cell">Abou NAPON</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Ouagadougou</div>
                                <div class="cell">Burkina Faso</div>
                            </div>

                            <div class="row">
                                <div class="cell">Boussanlègue TCHABLE</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Larry AMIN</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Gregory SIMIRE</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lagos</div>
                                <div class="cell">Nigéria</div>
                            </div>

                            <div class="row">
                                <div class="cell">Ataféi PEWISSI</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Kodjo AFAGLA</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Musanji N’GALASSO-MWATHA</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université Michel de Montaigne</div>
                                <div class="cell">Bordeaux 3</div>
                            </div>

                            <div class="row">
                                <div class="cell">Akoété AMOUZOU</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Flavien GBETO</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université d’Abomey-Calavi</div>
                                <div class="cell">Bénin</div>
                            </div>

                            <div class="row">
                                <div class="cell">Martin GBENOUGAN</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Charles Atiyihwe AWESSO</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Bernard KABORE</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Koudougou</div>
                                <div class="cell">Burkina Faso</div>
                            </div>
                            <div class="row">
                                <div class="cell">Koutchoukalo TCHASSIM</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Kossi TITRIKOU</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Didier AMELA</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Kouméalo ANATE</div>
                                <div class="cell">Prof. titulaire</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Balaïbaou KASSAN</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Komi KPATCHA</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Mimboabe BAKPA</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Palakyém MOUZOU</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Bawa KAMMANPOAL</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Baguissoga SATRA</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Yentougle MOUTORE</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Essohouna TANANG</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Tchilabalo ADI</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Kodjo Biava KLUTSE</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Panaewazibiou DADJA-TIOU</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Kpatcha Essobozou AWESSO</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Kara</div>
                                <div class="cell">Togo</div>
                            </div>
                            <div class="row">
                                <div class="cell">Kokou AZAMEDE</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Koffi M. L. MOLLEY</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Charles Dossou LIGAN</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université d’Abomey-Calavi</div>
                                <div class="cell">Bénin</div>
                            </div>

                            <div class="row">
                                <div class="cell">Idrissou ZIME YERIMA</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université d’Abomey-Calavi</div>
                                <div class="cell">Bénin</div>
                            </div>

                            <div class="row">
                                <div class="cell">Gbandi ADOUNA</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Mawaya TAKAO</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
                            </div>

                            <div class="row">
                                <div class="cell">Gnabana PIDABI</div>
                                <div class="cell">Maître de conférences</div>
                                <div class="cell">Université de Lomé</div>
                                <div class="cell">Togo</div>
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
