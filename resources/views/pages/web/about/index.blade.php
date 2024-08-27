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
                        <h1>A Propos</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Accueil</a></li>
                            <li><a href="javascript:void(0);">A Propos</a></li>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div id="sj-content" class="sj-content">
                        <div class="sj-aboutus">
                            <figure class="sj-aboutusimg">
                                <img src="{{ asset('assets/images/A propos/A propos 1.jpg') }}" style="height: 500px;"
                                    alt="image description">
                            </figure>

                            <div class="sj-introduction sj-sectioninnerspace">

                                <h4>Présentation de la revue Tinga</h4>
                                <div class="sj-description">
                                    <p>La revue Tɩ́ɩ́ŋá est le fruit d'une initiative académique portée par le Laboratoire
                                        Langues, Littératures et Développement (LaLD), une structure de recherche de premier
                                        plan affiliée à la Faculté des Lettres et Sciences Humaines de l’Université de Kara,
                                        au Togo. Le LaLD se distingue par son engagement à explorer et à approfondir les
                                        multiples relations entre les langues, les littératures, les civilisations, et leur
                                        rôle dans le développement global et durable. Ce laboratoire se positionne comme un
                                        acteur clé dans le domaine de la recherche en sciences humaines et sociales au Togo
                                        et au-delà</p>
                                    <p>le LaLD se consacre à l'exploration des littératures et des civilisations, en
                                        examinant leur influence sur la société contemporaine. Les chercheurs du laboratoire
                                        s'intéressent aux récits littéraires comme vecteurs de transmission des valeurs
                                        culturelles, historiques et éthiques. Ils étudient également comment les
                                        littératures peuvent refléter et influencer les dynamiques sociales,
                                        environnementales et politiques dans un contexte globalisé.</p>
                                    <p>En somme, Tɩ́ɩ́ŋá n'est pas seulement une revue académique ; elle est l'expression
                                        d'une vision de la recherche multidisciplinaire, où les langues, les littératures,
                                        les civilisations et la linguistique sont étudiées non pas isolément, mais dans leur
                                        interdépendance et leur potentiel à contribuer au développement humain, social et
                                        environnemental. La revue reflète ainsi les ambitions du LaLD de devenir une
                                        plateforme où la recherche de qualité peut prospérer, influençant positivement les
                                        politiques et les pratiques dans les domaines des sciences humaines et sociales.</p>
                                </div>
                            </div>
                            <div class="sj-ourhistory sj-sectioninnerspace">
                                <div class="sj-borderheading">
                                    <h3>Le but de notre revue </h3>
                                </div>
                                <div class="sj-description">
                                    <p>La revue Tɩ́ɩ́ŋá a pour objectif principal de recueillir, évaluer et publier des
                                        articles scientifiques qui se distinguent par leur originalité et leur rigueur
                                        académique. S'inscrivant pleinement dans l'ère numérique, Tɩ́ɩ́ŋá se consacre à
                                        la diffusion de travaux de recherche innovants et inédits, offrant une plateforme où
                                        les chercheurs peuvent partager leurs découvertes avec la communauté scientifique
                                        mondiale. La revue s'engage à maintenir des standards élevés de qualité, en
                                        s'assurant que chaque article soumis passe par un processus d'évaluation par les
                                        pairs rigoureux. En adoptant un format exclusivement numérique, Tɩ́ɩ́ŋá vise à
                                        rendre la recherche accessible à un public large et diversifié, tout en contribuant
                                        à l'avancement des connaissances dans les domaines des langues, littératures,
                                        civilisations, et disciplines connexes.</p>

                                </div>

                            </div>
                            <div class="sj-ourhistory sj-sectioninnerspace">
                                <div class="sj-borderheading">
                                    <h3>Les disciplines couvertes par la revue </h3>
                                </div>
                                <div class="sj-description">
                                    <section class="disciplines">
                                        Les disciplines couvertes par les publications de la revue <em>Tɩ́ɩ́ŋá</em> sont :
                                        <ul>
                                            <li>Les langues</li>
                                            <li>La littérature</li>
                                            <li>La linguistique et les disciplines connexes</li>
                                            <li>Les arts et communication</li>
                                            <li>La culture</li>
                                        </ul>
                                    </section>
                                </div>

                            </div>
                            <div class="sj-ouraims sj-sectioninnerspace">
                                <div class="sj-borderheading">
                                    <h3>Nos parutions</h3>
                                </div>
                                <div class="sj-ouraim">
                                    <div class="sj-description">
                                        <figure class="sj-alignleft">
                                            <img src="{{ asset('assets/images/A propos/A propos 1.jpg') }}"
                                                alt="image description"
                                                style="width: 500px; height: 500px; border-radius: 5px;">
                                        </figure>


                                        <p class="sj-firstletter">L</p>
                                        <p>parutions sont semestrielles, soit deux numéros par an, notamment ceux de juin et
                                            décembre de chaque année.
                                            Avant d’être publié, tout article est préalablement soumis au logiciel
                                            anti-plagiat. A cet effet, aucun article ne peut être publié si son taux de
                                            plagiat est supérieur à 20%.
                                            Les publications de la revue Tɩ́ɩ́ŋá sont conformes aux dispositions du CAMES
                                            en la matière, notamment les normes éditoriales adoptées à Bamako en 2016
                                        </p>
                                    </div>
                                </div>
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
