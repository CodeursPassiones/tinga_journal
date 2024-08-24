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
                        <h1>Become A Member</h1>
                        <ol class="sj-breadcrumb">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Login/Register</a></li>
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
@section('admin-content')
    <div id="sj-content" class="sj-content sj-addarticleholdcontent">
        <div class="sj-dashboardboxtitle sj-titlewithform">
            <h2>Articles Under Review</h2>
            <form class="sj-formtheme sj-formsearchvtwo">
                <div class="sj-sortupdown">
                    <a href="javascript:void(0);"><i class="fa fa-sort-amount-up"></i></a>
                </div>
                <fieldset>
                    <input type="search" name="search" class="form-control" placeholder="Search here">
                    <button type="submit" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
                </fieldset>
            </form>
        </div>
        <ul id="accordion" class="sj-articledetails sj-articledetailsvtwo">
            <li id="headingOne" class="sj-articleheader" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="sj-detailstime">
                    <span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
                    <span><i class="ti-layers"></i>Category Title</span>
                    <span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
                    <span><i class="ti-bookmark-alt"></i>Edition</span>
                    <h4>4 Ways You Can Grow Your Creativity Using technology</h4>
                </div>
                <div class="sj-nameandmail">
                    <span>Corresponding Author</span>
                    <h4>Aleen Mosour</h4>
                    <span class="sj-mailinfo">aleen@domainurl.com</span>
                </div>
            </li>
            <li id="collapseOne" class="collapse sj-active sj-userinfohold" aria-labelledby="headingOne"
                data-parent="#accordion">
                <div class="sj-userinfoimgname">
                    <figure class="sj-userinfimg">
                        <img src="images/thumbnails/img-02.jpg" alt="img description">
                    </figure>
                    <div class="sj-userinfoname">
                        <span>04 days ago on Monday at 14:49</span>
                        <h3>Aleen Monsour (You)</h3>
                    </div>
                    <div class="sj-userbtnarea">
                        <button type="button" class="sj-btn sj-btnactive" data-toggle="modal"
                            data-target="#reviewermodal">Assign Reviewer<em class="sj-notificationtag">01</em></button>
                        <button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send
                            Feedback</button>
                    </div>
                    <div class="sj-description">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna
                            aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet
                            consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="sj-downloadheader">
                        <div class="sj-title">
                            <h3>Attached Document</h3>
                            <a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
                        </div>
                        <div class="sj-docdetails">
                            <figure class="sj-docimg">
                                <img src="images/thumbnails/doc-img.jpg" alt="img description">
                            </figure>
                            <div class="sj-docdescription">
                                <h4>Document Ph...01.docx</h4>
                                <span>File Size 500kb</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sj-feedbacktitle">
                    <h2>Reviewer’s Feedback</h2>
                </div>
                <div id="subaccordion" class="sj-statusholder">
                    <div id="subheadingOne" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapseOne" aria-expanded="true" aria-controls="subcollapseOne" role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Minor Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapseOne" class="sj-statusdescription collapse sj-active" aria-labelledby="subheadingOne"
                        data-parent="#subaccordion">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingtwo" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsetwo" aria-expanded="true" aria-controls="subcollapsetwo" role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Jhon Doe</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Major Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsetwo" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingtwo" data-parent="#subaccordion">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingthree" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsethree" aria-expanded="true" aria-controls="subcollapsethree"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Pending</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsethree" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingthree" data-parent="#subaccordion">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li id="headingtwo" class="sj-articleheader" data-toggle="collapse" data-target="#collapsetwo"
                aria-expanded="true" aria-controls="collapsetwo">
                <div class="sj-detailstime">
                    <span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
                    <span><i class="ti-layers"></i>Category Title</span>
                    <span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
                    <span><i class="ti-bookmark-alt"></i>Edition</span>
                    <h4>4 Ways You Can Grow Your Creativity Using technology</h4>
                </div>
                <div class="sj-nameandmail">
                    <span>Corresponding Author</span>
                    <h4>Aleen Mosour</h4>
                    <span class="sj-mailinfo">aleen@domainurl.com</span>
                </div>
            </li>
            <li id="collapsetwo" class="collapse sj-active sj-userinfohold" aria-labelledby="headingtwo"
                data-parent="#accordion">
                <div class="sj-userinfoimgname">
                    <figure class="sj-userinfimg">
                        <img src="images/thumbnails/img-02.jpg" alt="img description">
                    </figure>
                    <div class="sj-userinfoname">
                        <span>04 days ago on Monday at 14:49</span>
                        <h3>Aleen Monsour (You)</h3>
                    </div>
                    <div class="sj-userbtnarea">
                        <button type="button" class="sj-btn sj-btnactive" data-toggle="modal"
                            data-target="#reviewermodal">Assign Reviewer</button>
                        <button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send
                            Feedback</button>
                    </div>
                    <div class="sj-description">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna
                            aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet
                            consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="sj-downloadheader">
                        <div class="sj-title">
                            <h3>Attached Document</h3>
                            <a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
                        </div>
                        <div class="sj-docdetails">
                            <figure class="sj-docimg">
                                <img src="images/thumbnails/doc-img.jpg" alt="img description">
                            </figure>
                            <div class="sj-docdescription">
                                <h4>Document Ph...01.docx</h4>
                                <span>File Size 500kb</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sj-feedbacktitle">
                    <h2>Reviewer’s Feedback</h2>
                </div>
                <div id="subaccordionb" class="sj-statusholder">
                    <div id="subheadingOneb" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapseOneb" aria-expanded="true" aria-controls="subcollapseOneb"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Minor Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapseOneb" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingOneb" data-parent="#subaccordionb">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingtwob" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsetwob" aria-expanded="true" aria-controls="subcollapsetwob"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Jhon Doe</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Major Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsetwob" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingtwob" data-parent="#subaccordionb">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingthreeb" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsethreeb" aria-expanded="true" aria-controls="subcollapsethreeb"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Pending</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsethreeb" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingthreeb" data-parent="#subaccordionb">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li id="headingthree" class="sj-articleheader" data-toggle="collapse" data-target="#collapsethree"
                aria-expanded="true" aria-controls="collapsethree">
                <div class="sj-detailstime">
                    <span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
                    <span><i class="ti-layers"></i>Category Title</span>
                    <span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
                    <span><i class="ti-bookmark-alt"></i>Edition</span>
                    <h4>4 Ways You Can Grow Your Creativity Using technology</h4>
                </div>
                <div class="sj-nameandmail">
                    <span>Corresponding Author</span>
                    <h4>Aleen Mosour</h4>
                    <span class="sj-mailinfo">aleen@domainurl.com</span>
                </div>
            </li>
            <li id="collapsethree" class="collapse sj-active sj-userinfohold" aria-labelledby="headingthree"
                data-parent="#accordion">
                <div class="sj-userinfoimgname">
                    <figure class="sj-userinfimg">
                        <img src="images/thumbnails/img-02.jpg" alt="img description">
                    </figure>
                    <div class="sj-userinfoname">
                        <span>04 days ago on Monday at 14:49</span>
                        <h3>Aleen Monsour (You)</h3>
                    </div>
                    <div class="sj-userbtnarea">
                        <button type="button" class="sj-btn sj-btnactive" data-toggle="modal"
                            data-target="#reviewermodal">Assign Reviewer</button>
                        <button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send
                            Feedback</button>
                    </div>
                    <div class="sj-description">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna
                            aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet
                            consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="sj-downloadheader">
                        <div class="sj-title">
                            <h3>Attached Document</h3>
                            <a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
                        </div>
                        <div class="sj-docdetails">
                            <figure class="sj-docimg">
                                <img src="images/thumbnails/doc-img.jpg" alt="img description">
                            </figure>
                            <div class="sj-docdescription">
                                <h4>Document Ph...01.docx</h4>
                                <span>File Size 500kb</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sj-feedbacktitle">
                    <h2>Reviewer’s Feedback</h2>
                </div>
                <div id="subaccordionc" class="sj-statusholder">
                    <div id="subheadingOnec" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapseOnec" aria-expanded="true" aria-controls="subcollapseOnec"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Minor Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapseOnec" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingOnec" data-parent="#subaccordionc">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingtwoc" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsetwoc" aria-expanded="true" aria-controls="subcollapsetwoc"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Jhon Doe</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Major Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsetwoc" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingtwoc" data-parent="#subaccordionc">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingthreec" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsethreec" aria-expanded="true" aria-controls="subcollapsethreec"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Pending</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsethreec" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingthreec" data-parent="#subaccordionc">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li id="headingfour" class="sj-articleheader" data-toggle="collapse" data-target="#collapsefour"
                aria-expanded="true" aria-controls="collapsefour">
                <div class="sj-detailstime">
                    <span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
                    <span><i class="ti-layers"></i>Category Title</span>
                    <span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
                    <span><i class="ti-bookmark-alt"></i>Edition</span>
                    <h4>4 Ways You Can Grow Your Creativity Using technology</h4>
                </div>
                <div class="sj-nameandmail">
                    <span>Corresponding Author</span>
                    <h4>Aleen Mosour</h4>
                    <span class="sj-mailinfo">aleen@domainurl.com</span>
                </div>
            </li>
            <li id="collapsefour" class="collapse sj-active sj-userinfohold" aria-labelledby="headingfour"
                data-parent="#accordion">
                <div class="sj-userinfoimgname">
                    <figure class="sj-userinfimg">
                        <img src="images/thumbnails/img-02.jpg" alt="img description">
                    </figure>
                    <div class="sj-userinfoname">
                        <span>04 days ago on Monday at 14:49</span>
                        <h3>Aleen Monsour (You)</h3>
                    </div>
                    <div class="sj-userbtnarea">
                        <button type="button" class="sj-btn sj-btnactive" data-toggle="modal"
                            data-target="#reviewermodal">Assign Reviewer</button>
                        <button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send
                            Feedback</button>
                    </div>
                    <div class="sj-description">
                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna
                            aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet
                            consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="sj-downloadheader">
                        <div class="sj-title">
                            <h3>Attached Document</h3>
                            <a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
                        </div>
                        <div class="sj-docdetails">
                            <figure class="sj-docimg">
                                <img src="images/thumbnails/doc-img.jpg" alt="img description">
                            </figure>
                            <div class="sj-docdescription">
                                <h4>Document Ph...01.docx</h4>
                                <span>File Size 500kb</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sj-feedbacktitle">
                    <h2>Reviewer’s Feedback</h2>
                </div>
                <div id="subaccordiond" class="sj-statusholder">
                    <div id="subheadingOned" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapseOned" aria-expanded="true" aria-controls="subcollapseOned"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Minor Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapseOned" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingOned" data-parent="#subaccordiond">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingtwod" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsetwod" aria-expanded="true" aria-controls="subcollapsetwod"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Jhon Doe</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Major Rivision</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsetwod" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingtwod" data-parent="#subaccordiond">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                    <div id="subheadingthreed" class="sj-statusheaderholder sj-statuspadding" data-toggle="collapse"
                        data-target="#subcollapsethreed" aria-expanded="true" aria-controls="subcollapsethreed"
                        role="button">
                        <figure class="sj-statusimg">
                            <img src="images/thumbnails/img-03.jpg" alt="img description">
                        </figure>
                        <div class="sj-statusheader">
                            <div class="sj-statusasidetitle">
                                <span>September 27, 2018</span>
                                <h4>Smit Ryan</h4>
                            </div>
                            <div class="sj-statusasidetitle sj-statusasidetitlevtwo">
                                <span>Status</span>
                                <h4>Pending</h4>
                            </div>
                        </div>
                    </div>
                    <div id="subcollapsethreed" class="sj-statusdescription collapse sj-active"
                        aria-labelledby="subheadingthreed" data-parent="#subaccordiond">
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <ul class="sj-statusdescriptionpoints">
                            <li><span>Nemo enim ipsam voluptatem quia</span></li>
                            <li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
                            <li><span>Qui dolorem ipsum quia dolor sit amet</span></li>
                        </ul>
                        <div class="sj-description">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                laudantium, aiam sunt voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <nav class="sj-pagination">
            <ul>
                <li class="sj-prevpage"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                <li class="sj-active"><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#">04</a></li>
                <li><a href="#">05</a></li>
                <li class="sj-nextpage"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
    </div>
@endsection
