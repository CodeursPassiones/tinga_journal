<!--************************************
Footer Start
*************************************-->
<div class="sj-contentwrapper">
    <footer id="sj-footer" class="sj-footer sj-haslayout" style="padding: 10px">
        <div class="container" style="padding: 15px">
            <div class="row">
                <!-- Retour en haut -->
                <a class="sj-btnscrolltotop" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>

                <!-- Section à propos -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
                    <div class="sj-fcol sj-footeraboutus">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <strong class="sj-logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="revue"
                                            style="height: 50px; width:50px">
                                    </a>
                                </strong>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <strong class="sj-logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/labo.jpg') }}" alt="revue"
                                            style="height: 60px; width:150px">
                                    </a>
                                </strong>
                            </div>
                        </div>

                        <div class="sj-description">
                            <p>
                            <p>La revue Tɩ́ɩ́ŋá est le fruit d'une initiative académique portée par le Laboratoire
                                Langues, Littératures...</p>
                            <strong><a href="{{ route('web.administration.about') }}">Lire la suite</a></strong></p>
                        </div>
                        <ul class="sj-socialicons sj-socialiconssimple">
                            <li class="sj-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="sj-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                            <li class="sj-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="sj-googleplus"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="sj-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Liens utiles -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
                    <div class="sj-fcol sj-widget sj-widgetusefullinks">
                        <div class="sj-widgetheading">
                            <h3>Liens utiles</h3>
                        </div>
                        <div class="sj-widgetcontent">
                            <ul>
                                <li><a href="mailto:mailto:tiingalald@gmail.com">Nous contacter</a></li>
                                <li><a href={{ route('web.volumes.list') }}>Archives par décennie</a></li>
                                <li><a href={{ route('web.articles.list') }}>Articles récents</a></li>
                                <li><a href={{ route('web.volumes.list') }}>Les numéros </a></li>
                                <li><a href="#">Droits & Permissions</a></li>
                                <li class="sj-more"><strong><a href="javascript:void(0);">Plus</a></strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Ressources -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
                    <div class="sj-fcol sj-widget sj-widgetresources">
                        <div class="sj-widgetheading">
                            <h3>Ressources</h3>
                        </div>
                        <div class="sj-widgetcontent">
                            <ul>
                                <li><a href={{ route('web.instructions.normes') }}>Ligne éditoriale</a></li>
                                <li><a href={{ route('web.instructions.rapporteurs') }}>Instructions</a></li>
                                <li><a href={{ route('web.administration.redaction') }}>Administration</a></li>
                                <li><a href={{ route('web.administration.gestion') }}>Comité de gestion</a></li>
                                <li><a href={{ route('web.administration.scientifique') }}>Comité de Lecture</a></li>
                                <li class="sj-more"><strong><a href="javascript:void(0);">Plus</a></strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
                    <div class="sj-fcol sj-widget sj-widgetcontactus">
                        <div class="sj-widgetheading">
                            <h3>Contactez-nous</h3>
                        </div>
                        <div class="sj-widgetcontent">
                            <ul>
                                <li><i class="lnr lnr-apartment"></i>
                                    <address>Laboratoire Langues, Littératures et Développement (LaLD); UK.</address>
                                </li>
                                <li><a href="tel:+22892181969"><i class="lnr lnr-phone"></i><span>(+228)
                                            92181969</span></a>
                                </li>
                                <li><a href="tel:+22890007145"><i class="lnr lnr-phone"></i><span>(+228)
                                            90007145</span></a>
                                </li>
                                <li><a href="tel:+22890122337"><i class="lnr lnr-phone"></i><span>(+228)
                                            90122337</span></a>
                                </li>

                                <li><a href="mailto:mailto:tiingalald@gmail.com"><i class="lnr lnr-envelope"></i><span
                                            style="text-transform: lowercase">tiingalald@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Copyright -->
            <div>
                <p class="sj-copyrights">© {{ date('Y') }} <span>Tɩ́ɩ́ŋá</span>. Tous droits réservés</p>
            </div>
        </div>
    </footer>
    <!--************************************
Footer End
*************************************-->
