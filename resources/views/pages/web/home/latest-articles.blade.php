<section class="sj-haslayout sj-sectioninnerspace">
    <div class="sj-borderheading">
        <h3>Les Tout derniers</h3>
        <a class="sj-btnview" href={{ route('web.articles.list') }}>Voir Tout</a>
    </div>
    <div id="sj-editorchoiceslider" class="sj-editorchoiceslider sj-editorschoice owl-carousel">

        @for ($i = 0; $i < 3; $i++)
            <div class="item">
                @foreach ($latestArticles as $article)
                @endforeach
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

            </div>
        @endfor
    </div>
</section>
