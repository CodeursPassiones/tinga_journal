@extends('base')
@section('banner')
    <div class="sj-innerbanner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sj-innerbannercontent">
                        <h1>Instructions </h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="#">Instructions au rapporteurs</a></li>
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
                            <a href="{{ asset('storage/normes.pdf') }}" download="normes.pdf">Télécharger le
                                PDF</a>

                            <div class="sj-introduction sj-sectioninnerspace">
                                <div style="font-family: 'Times New Roman', serif; font-size: 12px; line-height: 1.15;"
                                    class="sj-description">
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
                                                être
                                                cochée pour chaque critère.</strong></p>
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
                                        <td>Article accepté avec corrections importantes.
                                            Dans ce cas, accepteriez-vous de relire l’article corrigé ?
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Article rejeté</td>
                                        <td></td>
                                    </tr>
                                </table>
                                <p><strong>Auteur de la fiche :</strong></p>
                                <p><strong>Date de retour de la fiche : </strong></p>
                                <h5><i><strong>A renvoyer à l’adresse mail de la revue </strong></i></h5>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
