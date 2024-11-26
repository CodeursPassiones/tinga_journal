           <!--************************************
     Header Start
   *************************************-->
           <header id="sj-header" class="sj-header sj-haslayout">
               <div class="container">
                   <div class="row">
                       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           <div class="sj-topbar">
                               <ul class="sj-socialicons sj-socialiconssimple">
                                   <li class="sj-facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                   <li class="sj-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                   <li class="sj-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                   <li class="sj-googleplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                   </li>
                               </ul>
                               <div class="sj-languagelogin">
                                   @guest
                                       <div class="sj-loginarea">
                                           <ul class="sj-loging">
                                               <li><a href={{ route('login') }}>Connexion</a></li>
                                               {{-- <li><a href={{ route('register') }}>Register</a></li> --}}
                                           </ul>
                                       </div>
                                   @endguest
                                   @auth
                                       @include('partials.login-area')
                                   @endauth

                                   {{-- @include('partials.languages') --}}
                               </div>
                           </div>
                           <div class="sj-navigationarea">
                               <strong class="sj-logo">
                                   <a href="{{ route('home') }}">
                                       <img src="{{ asset('assets/images/logo.png') }}" alt="revue"
                                           style="height: 50px; width:50px">
                                   </a>
                               </strong>

                               <div class="sj-rightarea">
                                   <nav id="sj-nav" class="sj-nav navbar-expand-lg">
                                       <button class="navbar-toggler" type="button" data-toggle="collapse"
                                           data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                           aria-label="Toggle navigation">
                                           <i class="lnr lnr-menu"></i>
                                       </button>
                                       @include('partials.navs')
                                   </nav>
                                   <a class="sj-btntopsearch" href="#sj-searcharea"><i
                                           class="lnr lnr-magnifier"></i></a>

                                   @auth
                                       <a class="sj-btn sj-btnactive" href={{ route('admin.articles.view.metadata') }}>Créer
                                           un
                                           article</a>
                                   </div>
                               @endauth
                           </div>
                       </div>
                   </div>
               </div>
           </header>
           <!--************************************
Header End
*************************************-->
