@extends('base')
@section('banner')
    <!--************************************
                                     Home Banner Start
                                   *************************************-->
    <div id="sj-homebanner" class="sj-homebanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="sj-postbook">
                        <figure class="sj-featureimg">
                            <a class="sj-btnvideo" href="javascript:void(0);"><i class="lnr lnr-film-play"></i><span>Watch
                                    Video Documentary</span></a>
                            <div class="sj-bookimg">
                                <div class="sj-frontcover"><img src={{ asset('assets/images/slider/fronimg.png') }}
                                        alt="image description">
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="sj-bannercontent">
                        <h1><span>We Welcome Latest</span>Research Articles in<span>Field of Science</span></h1>
                        <div class="sj-description">
                            <p>Consectetur adipisicing elit sedaui sedaui labore quis nostrud exercitation... <a
                                    href="javascript:void(0);">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
                                     Home Banner End
                                   *************************************-->
@endsection
@section('web-content')
    <div class="sj-haslayout">
        <div class="container">
            <div class="row">
                <div class="sj-welcomegreeting">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 sj-verticalmiddle">
                        <div id="sj-welcomeimgslider" class="sj-welcomeimgslider sj-welcomeslider owl-carousel">
                            <figure class="sj-welcomeimg item">
                                <img src="images/welcomeimg/img-01.jpg" alt="welcome Image">
                            </figure>
                            <figure class="sj-welcomeimg item">
                                <img src="images/welcomeimg/img-02.jpg" alt="welcome Image">
                            </figure>
                            <figure class="sj-welcomeimg item">
                                <img src="images/welcomeimg/img-03.jpg" alt="welcome Image">
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 sj-verticalmiddle">
                        <div class="sj-welcomecontent">
                            <div class="sj-welcomehead">
                                <span>Greetings &amp; Welcome</span>
                                <h2>Explore Latest Researches</h2>
                            </div>
                            <div class="sj-description">
                                <p>Consectetur adipisicing elied dotaem eiusmod incididunt ulabore etoimisi dolore magna
                                    aliqua aenimalie admie veniam aistrud exrcittion ullamco laboris utaliquip commodouis
                                    aute irure dolorendries in voluptate velit esse cillum dolore.</p>
                            </div>
                            <div class="sj-btnarea">
                                <a class="sj-btn" href="javascript:void(0);">Read More</a>
                                <a class="sj-btn sj-btnactive" href="javascript:void(0);">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sj-twocolumns" class="sj-twocolumns">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="sj-content" class="sj-content">
                        <!--************************************
                                                    Editor's Pick Start
                                            *************************************-->
                        <section class="sj-haslayout sj-sectioninnerspace">
                            <div class="sj-borderheading">
                                <h3>Editor’s Pick</h3>
                                <a class="sj-btnview" href="javascript:void(0);">View All</a>
                            </div>
                            <div id="sj-editorchoiceslider" class="sj-editorchoiceslider sj-editorschoice owl-carousel">
                                <div class="item">
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-01.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Hillary
                                                        Farnham</a></span>
                                                <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs —
                                                        An Update form</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-02.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Coleman
                                                        Hoff</a></span>
                                                <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a>
                                                </h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-03.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Frederica
                                                        Kinnaird</a></span>
                                                <h3><a href="javascript:void(0);">A Milestone for CART Cells &amp;
                                                        Treatment</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-01.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Hillary
                                                        Farnham</a></span>
                                                <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs —
                                                        An Update form</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-02.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Coleman
                                                        Hoff</a></span>
                                                <h3><a href="javascript:void(0);">Toward Better-Quality Compounded
                                                        Drugs</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-03.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Frederica
                                                        Kinnaird</a></span>
                                                <h3><a href="javascript:void(0);">A Milestone for CART Cells &amp;
                                                        Treatment</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-01.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Hillary
                                                        Farnham</a></span>
                                                <h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs —
                                                        An Update form</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-02.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Coleman
                                                        Hoff</a></span>
                                                <h3><a href="javascript:void(0);">Toward Better-Quality Compounded
                                                        Drugs</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                    <article class="sj-post sj-editorchoice">
                                        <figure class="sj-postimg">
                                            <img src="images/editorchoice/img-03.jpg" alt="image description">
                                        </figure>
                                        <div class="sj-postcontent">
                                            <div class="sj-head">
                                                <span class="sj-username"><a href="javascript:void(0);">Frederica
                                                        Kinnaird</a></span>
                                                <h3><a href="javascript:void(0);">A Milestone for CART Cells &amp;
                                                        Treatment</a></h3>
                                            </div>
                                            <div class="sj-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation
                                                    ullamco...</p>
                                            </div>
                                            <a class="sj-btn" href="javascript:void(0);">View Full Article</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </section>
                        <!--************************************
                                                    Editor's Pick End
                                            *************************************-->
                        <!--************************************
                                                    Previous Posts Start
                                            *************************************-->
                        <section class="sj-haslayout sj-sectioninnerspace">
                            <div class="sj-borderheading">
                                <h3>Previous Issues</h3>
                                <a class="sj-btnview" href="javascript:void(0);">View All</a>
                            </div>
                            <div class="sj-previousissues">
                                <ul class="sj-navtabs nav" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#2018"
                                            role="tab" aria-controls="2018" aria-selected="true">Issues From:
                                            <span>2018</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#2017"
                                            role="tab" aria-controls="2017" aria-selected="false">Issues From:
                                            <span>2017</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#2016"
                                            role="tab" aria-controls="2016" aria-selected="false">Issues From:
                                            <span>2016</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="home-tabb" data-toggle="tab" href="#2015"
                                            role="tab" aria-controls="2015" aria-selected="true">Issues From:
                                            <span>2015</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tabb" data-toggle="tab" href="#2014"
                                            role="tab" aria-controls="2014" aria-selected="false">Issues From:
                                            <span>2014</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tabb" data-toggle="tab" href="#2013"
                                            role="tab" aria-controls="2013" aria-selected="false">Issues From:
                                            <span>2013</span></a>
                                    </li>
                                </ul>
                                <div class="sj-tabcontent tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="2018" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div id="sj-issuesslider-2018"
                                            class="sj-issuesslider-2018 sj-issuesslider owl-carousel">
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="2017" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div id="sj-issuesslider-2017"
                                            class="sj-issuesslider-2017 sj-issuesslider owl-carousel">
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="2016" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div id="sj-issuesslider-2016"
                                            class="sj-issuesslider-2016 sj-issuesslider owl-carousel">
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="2015" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div id="sj-issuesslider-2015"
                                            class="sj-issuesslider-2015 sj-issuesslider owl-carousel">
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="2014" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div id="sj-issuesslider-2014"
                                            class="sj-issuesslider-2014 sj-issuesslider owl-carousel">
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="2013" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div id="sj-issuesslider-2013"
                                            class="sj-issuesslider-2013 sj-issuesslider owl-carousel">
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="item">
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-04.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Coleman Hoff</a></span>
                                                            <h3><a href="javascript:void(0);">Toward Better-Quality
                                                                    Compounded Drugs</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-05.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Kimberly Delapena</a></span>
                                                            <h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-06.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a href="javascript:void(0);">Milan
                                                                    Poat</a></span>
                                                            <h3><a href="javascript:void(0);">Emergency Legal Authority
                                                                    &amp; the Crisis</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="sj-post sj-editorchoice sj-smallpost">
                                                    <figure class="sj-postimg">
                                                        <img src="images/editorchoice/img-07.jpg" alt="image description">
                                                    </figure>
                                                    <div class="sj-postcontent">
                                                        <div class="sj-head">
                                                            <span class="sj-username"><a
                                                                    href="javascript:void(0);">Camilla
                                                                    Hofstetter</a></span>
                                                            <h3><a href="javascript:void(0);">Talaromyces marneffei
                                                                    Infection</a></h3>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--************************************
                                                    Previous Posts End
                                            *************************************-->

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
