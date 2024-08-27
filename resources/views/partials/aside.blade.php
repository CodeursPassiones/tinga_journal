<aside id="sj-asidebar" class="sj-asidebar sj-widgetbox">
    <div class="sj-widgetprofile">
        <div class="sj-widgetcontent">
            <figure>
                <img src={{ asset(auth()->user()->profile_picture) }} alt="image description">


            </figure>
            <div class="sj-admininfo">

                <h3>{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</h3>
                <h4>{{ auth()->user()->getRoleNames()->first() }}</h4>
            </div>
        </div>
    </div>
    <div class="sj-widgetdashboard">
        <nav id="sj-dashboardnav" class="sj-dashboardnav">
            <ul>
                <li class="  {{ Request::is('admin/articles/list') ? 'sj-active' : '' }}">
                    <a href={{ route('admin.articles.list') }}><i class="lnr lnr-sync"></i>
                        <span>Liste
                            Articles
                        </span>
                    </a>
                </li>
                <li class="  {{ Request::is('admin/users/list') ? 'sj-active' : '' }}">
                    <a href={{ route('admin.users.list') }}><i class="lnr lnr-users"></i>
                        <span>Gestion Utilisateurs

                        </span>
                    </a>
                </li>
                <li class="  {{ Request::is('admin/disciplines/list') ? 'sj-active' : '' }}">
                    <a href={{ route('admin.disciplines.list') }}><i class="lnr lnr-layers"></i>
                        <span>Gestion Disciplines

                        </span>
                    </a>
                </li>
                <li class="  {{ Request::is('admin/account/settings') ? 'sj-active' : '' }}">
                    <a href={{ route('admin.account.settings') }}><i class="lnr lnr-lock"></i>
                        <span>Paramettres Compte

                        </span>
                    </a>
                </li>

                <li><a href={{ route('logout') }}><i class="lnr lnr-exit"></i> <span>Déconnexon</span></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
