@extends('base')
@section('title', 'Tɩ́ɩ́ŋá-Instructions')
@section('description', 'Instructions aux rapporteurs la revue Tɩ́ɩ́ŋá ')
@section('keywords',
    'tinga, revue tinga,Instructions aux rapporteurs,comité de gestion, "la Revue Langues, Littératures, Arts et
    Culture", LaLD,
    "CAMES" ')
@section('banner')
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Instructions </h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="#">Instructions aux rapporteurs</a></li>
                            <li><a href="#">Rapporteurs</a></li>
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
                                <img src="{{ asset('assets/images/A propos/rapporteurs2.jpg') }}" style="height: 500px;"
                                    alt="image description">
                            </figure>
                            <div style="margin-top:550px">
                                <style>
                                    .ok {
                                        font-style: italic;
                                        background-color: #f0f8ff;
                                        border: 1px solid #0876e4;
                                        padding: 20px;
                                        border-radius: 8px;
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                        color: #333;
                                        font-size: 1.1em;
                                        max-width: 600px;
                                        margin: 20px auto;
                                        text-align: center;
                                    }
                                </style>
                                <h4 class="ok"> Cliquez sur le lien suivant pour télécharger la version Pdf des
                                    instructions pour les
                                    rapporteurs :
                                    <i class="ti-hand-point-right"></i>
                                    <a href="{{ asset('assets/media/grille.pdf') }}"
                                        download="Instructions aux rapporteurs.pdf"
                                        style="color: #0876e4; text-decoration: none; font-weight: bold;">Télécharger le PDF
                                    </a>
                                </h4>
                            </div>
                            <div class="sj-introduction sj-sectioninnerspace">
                                <div class="sj-description">
                                    <h1 style="text-align: center;">Grille d’évaluation </h1>
                                    <h4 style="text-align: center;">Numéro d'anonymat :</h4>
                                </div>
                            </div>
                            <div class="sj-ourhistory sj-sectioninnerspace">
                                <div class="sj-borderheading">
                                    <div class="sj-description" style="margin-left: 250px">
                                        <p><strong>Spécialité :</strong></p>
                                        <p><strong>Titre de l’article :</strong></p>
                                        <p><strong>Commentaire sur le contenu de l’article :</strong></p>
                                        <p><strong>Intérêt et originalité du texte :</strong></p>
                                        <p><strong>Appréciation détaillée sur le texte :</strong></p>
                                        <p><strong>Cocher la case correspondant au critère retenu (X). Une seule case doit
                                                être cochée pour chaque critère.</strong></p>
                                    </div>
                                </div>
                                <table class=" table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 20%;">Critères / Évaluation</th>
                                            <th style="width: 10%;">Insuffisant</th>
                                            <th style="width: 10%;">Passable</th>
                                            <th style="width: 10%;">Bon</th>
                                            <th style="width: 10%;">Excellent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Intérêt et originalité de la contribution</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Cohérence du sujet par rapport à la thématique ou au domaine de l’appel à
                                                contribution</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Qualité rédactionnelle (clarté, style, vocabulaire)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Qualité du titre (précision, clarté, formulation)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Contextualisation de la question traitée par rapport à la littérature sur le
                                                sujet</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Clarté de la problématique</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Elaboration des objectifs (précision, clarté)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Présentation de la méthodologie</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Structure de l’article / rigueur du plan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Efficacité de l’argumentation</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Adéquation de la conclusion avec l’ensemble de l’analyse</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Pertinence de la bibliographie</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Qualité de l’illustration</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Conformité du résumé et des mots clés avec le contenu de l’article</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="sj-ourhistory sj-sectioninnerspace">
                                <div class="sj-borderheading">
                                    <h3>Avis de l’évaluateur : </h3>
                                </div>
                                <table class=" table-bordered" style="width: 500px">
                                    <tr>
                                        <td style="width: 40px">Article accepté en l’état</td>
                                        <td style="width: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td>Article accepté avec corrections mineures</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Article accepté avec corrections importantes. Dans ce cas,
                                            accepteriez-vous de relire l’article corrigé ? </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Article rejeté</td>
                                        <td></td>
                                    </tr>
                                </table>
                                <p><strong>Auteur de la fiche :</strong></p>
                                <p><strong>Date de retour de la fiche : </strong></p>
                                <h5><strong><a href="mailto:mailto:tiingalald@gmail.com">A renvoyer
                                            à l’adresse mail de la revue ( <i class="ti-email"></i> ) : cliquez pour envoyer
                                        </a></strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
