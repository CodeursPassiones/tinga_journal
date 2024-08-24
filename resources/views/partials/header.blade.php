           <!--************************************
     Header Start
   *************************************-->
           <header id="sj-header" class="sj-header sj-haslayout">
               <div class="container">
                   <div class="row">
                       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           <div class="sj-topbar">
                               <ul class="sj-socialicons sj-socialiconssimple">
                                   <li class="sj-facebook"><a href="javascript:void(0);"><i
                                               class="fa fa-facebook-f"></i></a></li>
                                   <li class="sj-twitter"><a href="javascript:void(0);"><i
                                               class="fab fa-twitter"></i></a></li>
                                   <li class="sj-linkedin"><a href="javascript:void(0);"><i
                                               class="fab fa-linkedin-in"></i></a></li>
                                   <li class="sj-googleplus"><a href="javascript:void(0);"><i
                                               class="fab fa-google-plus-g"></i></a></li>
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
                               <strong class="sj-logo"><a href="index.html"><img
                                           src={{ asset('assets/images/logo.png') }} alt="Tinga Logo"></a></strong>
                               <div class="sj-rightarea">
                                   <nav id="sj-nav" class="sj-nav navbar-expand-lg">
                                       <button class="navbar-toggler" type="button" data-toggle="collapse"
                                           data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                           aria-label="Toggle navigation">
                                           <i class="lnr lnr-menu"></i>
                                       </button>
                                       <div class="collapse navbar-collapse sj-navigation" id="navbarNav">
                                           <ul>
                                               <li
                                                   class="current-menu-item menu-item-has-children page_item_has_children">
                                                   <a href="javascript:void(0);"><i class="lnr lnr-home"></i></a>
                                                   <ul class="sub-menu">
                                                       <li><a href="index.html">Home V One</a></li>
                                                   </ul>
                                               </li>
                                               <li>
                                                   <a href="aboutus.html">About us</a>
                                               </li>
                                               <li class="menu-item-has-children page_item_has_children">
                                                   <a href="javascript:void(0);">Articles</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="articles.html">Articles</a></li>
                                                       <li><a href="aticle-list.html">Aticle List</a></li>
                                                       <li><a href="articledetail.html">Article Detail</a></li>
                                                       <li><a href="submitarticle.html">Submit Article</a></li>
                                                   </ul>
                                               </li>
                                               <li class="menu-item-has-children page_item_has_children">
                                                   <span class="sj-tagnew">New</span>
                                                   <a href="javascript:void(0);">Issues</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="issuesweeks.html">Issues Weeks</a></li>
                                                       <li><a href="issuesyears.html">Issues Years</a></li>
                                                   </ul>
                                               </li>
                                               <li class="menu-item-has-children page_item_has_children">
                                                   <a href="javascript:void(0);">Pages</a>
                                                   <ul class="sub-menu">
                                                       <li class="menu-item-has-children page_item_has_children">
                                                           <a href="javascript:void(0);">News</a>
                                                           <ul class="sub-menu">
                                                               <li><a href="newsgrid.html">News Grid</a></li>
                                                               <li><a href="newslist.html">News List</a></li>
                                                               <li><a href="newsdetail.html">News Detail</a></li>
                                                           </ul>
                                                       </li>
                                                       <li class="menu-item-has-children page_item_has_children">
                                                           <a href="javascript:void(0);">Manage User</a>
                                                           <ul class="sub-menu">
                                                               <li><a href="manageuser.html">Manage User</a></li>
                                                               <li><a href="manageeditions.html">Manage Editions</a>
                                                               </li>
                                                           </ul>
                                                       </li>
                                                       <li class="menu-item-has-children page_item_has_children">
                                                           <a href="javascript:void(0);">Settings</a>
                                                           <ul class="sub-menu">
                                                               <li><a href="accountsettings.html">Account Settings</a>
                                                               </li>
                                                               <li><a href="generalsettings.html">General Settings</a>
                                                               </li>
                                                           </ul>
                                                       </li>
                                                       <li><a href="authorguideline.html">Author Guideline</a></li>
                                                       <li><a href="underreview.html">Under Review</a></li>
                                                       <li><a href="addtemplates.html">Add Templates</a></li>
                                                       <li><a href="checkout.html">Checkout</a></li>
                                                       <li class="menu-item-has-children page_item_has_children">
                                                           <a href="javascript:void(0);">Login</a>
                                                           <ul class="sub-menu">
                                                               <li><a href="loginregister.html">Login Register</a>
                                                               </li>
                                                               <li><a href="loginregistervtwo.html">Login Register V
                                                                       Two</a></li>
                                                           </ul>
                                                       </li>
                                                       <li><a href="404error.html">404 Error</a></li>
                                                       <li><a href="comingsoon.html">Coming Soon</a></li>
                                                   </ul>
                                               </li>
                                           </ul>
                                       </div>
                                   </nav>
                                   <a class="sj-btntopsearch" href="#sj-searcharea"><i
                                           class="lnr lnr-magnifier"></i></a>

                                   @auth
                                       <a class="sj-btn sj-btnactive" href="javascript:void(0);">Publier un article</a>
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
