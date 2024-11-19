<section class="sj-haslayout sj-sectioninnerspace">
    <div class="sj-borderheading">
        <h3>Publiés récemment</h3>
        <a class="sj-btnview" href={{ route('web.articles.list') }}>Voir Tout </a>
    </div>
    <style>
        .figureLatestThree {
            width: 270px;
            height: 170px;
            min-width: 270px;
            max-width: 270px;
            min-height: 170px;
            max-height: 170px;
            object-fit: scale-down !important;
        }
    </style>
    <div id="sj-editorchoiceslider" class="sj-editorchoiceslider sj-editorschoice owl-carousel">

        @foreach ($latestArticles as $articleGroup)
            <div class="item">
                @foreach ($articleGroup as $article)
                    <article class="sj-post sj-editorchoice">

                        <figure class="sj-postimg">
                            <img src="{{ asset($article->image_path) }}" alt="image description" class="artImg">
                            <style>
                                .artImg {
                                    width: 300px;
                                    height: 170px;
                                    min-width: 300px;
                                    max-width: 300px;
                                    min-height: 170px;
                                    max-height: 170px;
                                    object-fit: fill !important;
                                }
                            </style>
                        </figure>
                        <div class="sj-postcontent">
                            <div class="sj-head">
                                <span class="sj-username">
                                    <a href={{ route('web.articles.show', $article->id) }}>
                                        @foreach ($article->articleUsers as $author)
                                            {{ $author->user->lastname }} |
                                        @endforeach
                                    </a>
                                </span>
                                <h3>
                                    <a href={{ route('web.articles.show', $article->id) }}>{{ $article->title }}</a>
                                </h3>
                            </div>
                            <div class="sj-description">
                                <p>{!! Str::limit($article->abstract, 170) !!}...</p>
                            </div>
                            <a class="sj-btn" href={{ route('web.articles.show', $article->id) }}>Voir l'Article
                                Complet</a>
                        </div>
                    </article>
                @endforeach

            </div>
        @endforeach

    </div>
</section>
