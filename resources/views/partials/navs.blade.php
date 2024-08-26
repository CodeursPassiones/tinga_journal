<div class="collapse navbar-collapse sj-navigation" id="navbarNav">
    <ul>
        <li class="{{ Request::is('/') ? 'current-menu-item' : '' }}">
            <a href={{ route('home') }}><i class="lnr lnr-home"></i></a>

        </li>
        <li class="{{ Request::is('web/about') ? 'current-menu-item' : '' }}">
            <a href={{ route('web.about') }}>A
                propos</a>
        </li>
        <li
            class="menu-item-has-children page_item_has_children {{ Str::startsWith(request()->path(), 'web/articles') ? 'current-menu-item' : '' }}"">
            <a href="javascript:void(0);">Articles</a>
            <ul class="sub-menu">

                <li><a href={{ route('web.articles.list') }}>Liste</a></li>
                @auth
                    <li><a href={{ route('admin.articles.create') }}>Créer un article</a></li>

                @endauth

            </ul>
        </li>
        <li class="  {{ Request::is('web/volumes/list') ? 'current-menu-item' : '' }}">
            <a href={{ route('web.volumes.list') }}>Volumes</a>
        </li>
    </ul>
</div>
