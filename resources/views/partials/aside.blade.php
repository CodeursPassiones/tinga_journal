<aside id="sj-asidebar" class="sj-asidebar sj-widgetbox">
    <div class="sj-widgetprofile">
        <div class="sj-widgetcontent">
            <figure>
                <img src={{ asset(auth()->user()->profile_picture) }} alt="image description">
                <a class="sj-btnedite" href="javascript:void(0);"><i class="lnr lnr-pencil"></i></a>
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
                <li class="  {{ Request::is('admin/articles/list') ? 'sj-active' : '' }}"><a
                        href={{ route('admin.articles.list') }}><i class="lnr lnr-sync"></i>
                        <span>Liste
                            Articles
                        </span></a></li>

                <li><a href={{ route('logout') }}><i class="lnr lnr-exit"></i> <span>Déconnexon</span></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
