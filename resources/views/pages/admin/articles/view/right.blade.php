<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 float-right">
    <aside id="sj-sidebarvtwo" class="sj-sidebar">
        <div class="sj-profilestrenght">
            <div class="sj-headerhold">
                <div class="sj-dashboardboxtitle">
                    <h2>Article Strength</h2>
                    <span>Consectetur adipisicing elit eiusmod</span>
                </div>
                <div id="sj-ourskill" class="sj-ourskill">
                    <div class="sj-skill">
                        <div class="sj-skillholder" data-percent="84%">
                            <div class="sj-skillbar" style="width: 0%;"></div>
                        </div>
                        <span class="sj-strenghtcomplete">84% Complete</span>
                    </div>
                </div>
            </div>
            <ul class="sj-profilecomplete">
                <li class="sj-profilecompleted"><i class="ti-check"></i><span>Article Title</span></li>
                <li class="sj-profilecompleted"><i class="ti-check"></i><span>First Author</span></li>
                <li class="sj-profileerror"><i class="ti-na"></i><span>Your Abstract</span></li>
                <li class="sj-profilecompleted"><i class="ti-check"></i><span>Upload Document(s)</span></li>
            </ul>
            <div class="sj-submitdetails">

                @if ($article->state === 'VALID')
                    <span>J'accepte tous les <a href="javascript:void(0);">Termes et Conditions</a> de soumission de
                        l'article</span>
                @endif

                <button href="javascript:void(0);" class="sj-btn sj-btnactive"
                    {{ $article->state == 'INVALID' ? 'disabled' : '' }}>
                    {{ $article->state == 'INVALID' ? '-' : 'Soumettre' . $article->state }}</button>

            </div>

        </div>


    </aside>


</div>
