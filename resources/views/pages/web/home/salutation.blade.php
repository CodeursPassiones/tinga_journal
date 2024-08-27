<div class="sj-haslayout">
    <div class="container">
        <div class="row">
            <div class="sj-welcomegreeting">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 sj-verticalmiddle">
                    <div id="sj-welcomeimgslider" class="sj-welcomeimgslider sj-welcomeslider owl-carousel">
                        @foreach ($threeLatest as $threeLater)
                            <figure class="sj-welcomeimg item">
                                <img src={{ asset('assets/images/welcomeimg/img-01.jpg') }} alt="welcome Image">
                            </figure>
                        @endforeach

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
