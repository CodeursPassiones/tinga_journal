@php

    $lastIssue = App\BladeDirectives\CustomDirectives::getLastIssue();

@endphp
<aside id="sj-sidebar" class="sj-sidebar">
    <div class="sj-widget sj-widgetimpactfector">
        <div class="sj-widgetcontent">
            <ul>
                @if ($lastIssue)
                    <li>
                        <h3>Volume en cours<span> : {{ $lastIssue->volume->title }} Année
                                {{ $lastIssue->volume->year }}</span></h3>
                        <h3>N° courant <span> : {{ $lastIssue->title }} </span></h3>
                    </li>
                @endif

                <li>
                    <h3 style="text-align: center">Le Code ISSN de la revue</h3>
                    <div class="sj-description" style="text-align: center">
                        3078 - 3992
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sj-widget sj-widgetnoticeboard">
        <div class="sj-widgetheading">
            <h3> Ethique </h3>
        </div>
        <div class="sj-widgetcontent">
            <ul>
                <li><a href="javascript:void(0);">Les articles doivent répondre au critère d’originalité et n’avoir été
                        publié dans aucune revue antérieurement. </a></li>
                <li><a href="javascript:void(0);">Les articles sont soumis avant publication au logiciel
                        antiplagiat.</a></li>
                <li><a href="javascript:void(0);">Aucun article contenant des éléments contrevenant à la loi ne peut
                        être publié par la revue tɩ́ɩ́ŋa.</a></li>
            </ul>
        </div>
    </div>
    <div class="sj-widget sj-widgetadd">
        <span class="sj-headtitle">Initiateur</span>
        <div class="sj-widgetcontent">
            <figure class="sj-addimage">
                <a href="#">
                    <img src="{{ asset('assets/images/labo.jpg') }}" alt="image description"
                        style="width:400px; height: 100px">
                </a>
            </figure>

        </div>
    </div>
    <div class="sj-widget sj-widgetquestions">
        <div class="sj-widgetheading">
            <h3>Conditions générales d’utilisation </h3>
        </div>
        {{-- <div class="sj-widgetcontent">
            <div class="sj-description">
                <p>Consectetur adipisicing elit, sed aeiuse tempor incididunt ut labore etamiudon magna
                    aliqua enim ad minim?</p>
            </div>
            <div class="sj-questions">
                <div class="sj-selectgroup">
                    <span class="sj-radio">
                        <input id="sj-qone" type="radio" name="question" value="qone" checked="">
                        <label for="sj-qone">Sputum stain for acid-fast bacilli</label>
                    </span>
                    <span class="sj-radio">
                        <input id="sj-qtwo" type="radio" name="question" value="qtwo">
                        <label for="sj-qtwo">Pleural biopsy</label>
                    </span>
                    <span class="sj-radio">
                        <input id="sj-qthree" type="radio" name="question" value="qthree">
                        <label for="sj-qthree">Pleural fluid amylase</label>
                    </span>
                    <span class="sj-radio">
                        <input id="sj-qfour" type="radio" name="question" value="qfour">
                        <label for="sj-qfour">Pleural fluid cytology</label>
                    </span>
                </div>
                <a class="sj-btn" href="javascript:void(0);">Lire</a>
            </div>
        </div> --}}
    </div>


    <div class="sj-widget sj-widgetadd">
        <div class="sj-widgetcontent">
            <figure class="sj-addimage">
                <a href="#">
                    <img src="{{ asset('assets/images/aside.jpg') }}" alt="image description"
                        style="width:400px; height: 150px">
                </a>
            </figure>
        </div>
    </div>
</aside>
