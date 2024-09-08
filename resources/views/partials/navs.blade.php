<div class="collapse navbar-collapse sj-navigation" id="navbarNav">
    <ul>
        <li class="{{ Request::is('/') ? 'current-menu-item' : '' }}">
            <a href={{ route('home') }}><i class="lnr lnr-home"></i></a>

        </li>

        <li
            class="menu-item-has-children page_item_has_children {{ Str::startsWith(request()->path(), 'web/administration') ? 'current-menu-item' : '' }}">
            <a href="">A
                Propos</a>
            <ul class="sub-menu">
                <li><a href={{ route('web.administration.about') }}>Qui Somme Nous ?</a></li>
                <li><a href={{ route('web.administration.redaction') }}>Comité De Rédaction</a></li>
                <li><a href={{ route('web.administration.gestion') }}>Comité De Gestion</a></li>
                <li><a href={{ route('web.administration.scientifique') }}>Comité Scientifique Et De Lectures</a></li>
            </ul>
        </li>
        <li
            class="menu-item-has-children page_item_has_children {{ Str::startsWith(request()->path(), 'web/articles') ? 'current-menu-item' : '' }}"">
            <a href="javascript:void(0);">Articles</a>
            <ul class="sub-menu">

                <li><a href={{ route('web.articles.list') }}>Liste</a></li>
                @auth
                    <li><a href={{ route('admin.articles.view.metadata') }}>Créer Un Article</a></li>

                @endauth

            </ul>
        </li>
        <li class="  {{ Request::is('web/volumes/list') ? 'current-menu-item' : '' }}">
            <a href={{ route('web.volumes.list') }}>Archives</a>
        </li>

        <li
            class="menu-item-has-children page_item_has_children {{ Str::startsWith(request()->path(), 'web/instruction') ? 'current-menu-item' : '' }}">
            <a href="">Instructions</a>
            <ul class="sub-menu">
                <li><a href={{ route('web.instructions.rapporteurs') }}>Instructions Aux Rapporteurs</a></li>
                <li><a href={{ route('web.instructions.normes') }}>Normes Éditoriales </a></li>
            </ul>
        </li>
    </ul>
</div>
