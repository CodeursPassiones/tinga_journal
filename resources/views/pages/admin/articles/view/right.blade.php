<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 float-right">
    <aside id="sj-sidebarvtwo" class="sj-sidebar">
        <div class="sj-profilestrenght">
            <div class="sj-headerhold">
                <div class="sj-dashboardboxtitle">
                    <h2>Avancement Article </h2>
                    <span>Completez les options suivantes avant de soumettre</span>
                </div>

                @php
                    // Calculer le pourcentage de progression
                    $progress = 0;
                    if ($article->title !== null) {
                        $progress += 25;
                    }
                    if (!$article->articleUsers->isEmpty()) {
                        $progress += 25;
                    }
                    if ($article->abstract !== null) {
                        $progress += 25;
                    }
                    if (!$article->files->isEmpty()) {
                        $progress += 25;
                    }
                @endphp

                <div id="sj-ourskill" class="sj-ourskill">
                    <div class="sj-skill">
                        <div class="sj-skillholder" data-percent="{{ $progress }}%">
                            <div class="sj-skillbar" style="width: {{ $progress }}%;"></div>
                        </div>
                        <span class="sj-strenghtcomplete">{{ $progress }}% Completé</span>
                    </div>
                </div>
            </div>
            <ul class="sj-profilecomplete">
                <li class="sj-profile{{ $article->title !== null ? 'completed' : 'error' }}">
                    <i class="ti-{{ $article->title !== null ? 'check' : 'close' }}"></i><span>Titre de l'article</span>
                </li>
                <li class="sj-profile{{ $article->abstract !== null ? 'completed' : 'error' }}">
                    <i class="ti-{{ $article->abstract !== null ? 'check' : 'close' }}"></i><span>Résumé de
                        l'article</span>
                </li>

                <li class="sj-profile{{ !$article->files->isEmpty() ? 'completed' : 'error' }}">
                    <i class="ti-{{ !$article->files->isEmpty() ? 'check' : 'close' }}"></i><span>Fichiers
                        chargés</span>
                </li>
                <li class="sj-profile{{ !$article->articleUsers->isEmpty() ? 'completed' : 'error' }}">
                    <i class="ti-{{ !$article->articleUsers->isEmpty() ? 'check' : 'close' }}"></i><span>Au moins un
                        auteur</span>
                </li>

            </ul>
            <form action="" id="submitArticleForm">
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <div class="sj-headerhold">
                    @if ($article->state === 'VALID' && $article->status === 'DRAFT')
                        <input type="checkbox" name="agree">
                        <span>J'accepte tous les <a href="javascript:void(0);">Termes et Conditions</a> de soumission de
                            l'article</span>
                    @endif


                </div>
                <div class="sj-submitdetails">



                    <button class="sj-btn sj-btnactive {{ $article->status != 'DRAFT' ? 'd-none' : '' }}"
                        id="submitArticleBtn" type="submit" {{ $article->state == 'INVALID' ? 'disabled' : '' }}>
                        <span class="normal-status">
                            Soumettre
                        </span>
                        <span class="indicateur d-none">
                            <span><i class="fa fa-spinner text-secondary"></i> Chargement...</span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </aside>
</div>
