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
            class="menu-item-has-children page_item_has_children {{ Str::startsWith(request()->path(), 'web/administration') ? 'current-menu-item' : '' }}">
            <a href="">Administration</a>
            <ul class="sub-menu">
                <li><a href={{ route('administration.redaction') }}>Comité de rédaction</a></li>
                <li><a href={{ route('administration.gestion') }}>Comité de gestion</a></li>
                <li><a href={{ route('administration.scientifique') }}>Comité scientifique et de lectures</a></li>
            </ul>
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
        <li class="  {{ Request::is('web/normes') ? 'current-menu-item' : '' }}">
            <a href={{ route('web.normes') }}>Normes editoriales</a>
        </li>
        <li
            class="menu-item-has-children page_item_has_children {{ Str::startsWith(request()->path(), 'web/instruction') ? 'current-menu-item' : '' }}">
            <a href="">Instructions</a>
            <ul class="sub-menu">
                <li><a href={{ route('instructions.rapporteurs') }}>Instructions aux rapporteurs</a></li>
                <li><a href={{ route('instructions.auteurs') }}>Instructions aux auteurs</a></li>
            </ul>
        </li>
    </ul>
</div>
