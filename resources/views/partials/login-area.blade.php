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
            <li><a href="underreview.html"><i class="lnr lnr-sync"></i><span>Articles
                        Under
                        Review</span></a></li>
            <li><a href="addtemplates.html"><i class="lnr lnr-briefcase"></i><span>Add Templates</span></a>
            </li>
            <li><a href="aticle-list.html"><i class="lnr lnr-sync"></i><span>Aticle
                        List</span></a></li>
            <li><a href="generalsettings.html"><i class="lnr lnr-layers"></i><span>General Settings</span></a>
            </li>
            <li><a href="manageuser.html"><i class="lnr lnr-users"></i><span>Manage
                        Users</span></a></li>
            <li><a href="manageeditions.html"><i class="lnr lnr-tag"></i><span>Manage
                        Editions</span></a>
            </li>
            <li><a href="emailtemplates.html"><i class="lnr lnr-envelope"></i><span>Email
                        Templates</span></a></li>

            <li><a href={{ route('logout') }}><i class="lnr lnr-exit"></i><span>Déxonnexion</span></a></li>
        </ul>
    </nav>
</div>
