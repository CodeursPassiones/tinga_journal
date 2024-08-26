<div class="sj-userloginarea">
    <a href="javascript:void(0);">
        <i class="fa fa-angle-down"></i>
        <img src={{ asset('assets/images/user-img.jpg') }} alt="image description">
        <div class="sj-loginusername">
            <h3>Salut, {{ auth()->user()->username }}</h3>
            <span>{{ auth()->user()->getRoleNames()->first() }}</span>
        </div>
    </a>
    <nav class="sj-usernav">
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
