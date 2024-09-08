<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 float-left">

    <aside id="sj-sidebarvtwo" class="sj-sidebar">
        <div class="sj-profilestrenght">


            <nav id="sj-dashboardnav" class="sj-dashboardnav">
                <ul>
                    <li
                        class="  {{ Str::startsWith(request()->path(), 'admin/articles/view/metadata') ? 'sj-active' : '' }}">
                        <a href={{ route('admin.articles.view.metadata', $article->matricule) }}><i
                                class="lnr lnr-sync"></i>
                            <span>Méta données
                            </span>
                        </a>
                    </li>
                    <li
                        class="  {{ Str::startsWith(request()->path(), 'admin/articles/view/files') ? 'sj-active' : '' }}">
                        <a href={{ route('admin.articles.view.files', $article->matricule) }}><i
                                class="lnr lnr-sync"></i>
                            <span>Fichiers
                            </span>
                        </a>
                    </li>
                    <li
                        class="  {{ Str::startsWith(request()->path(), 'admin/articles/view/authors') ? 'sj-active' : '' }}">
                        <a href={{ route('admin.articles.view.authors', $article->matricule) }}><i
                                class="lnr lnr-sync"></i>
                            <span>Auteur(s)
                            </span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

    </aside>

</div>
