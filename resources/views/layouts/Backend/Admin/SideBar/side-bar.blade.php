<div class="leftside-menu">



    <!-- Brand Logo Light -->
    <a href="{{ route("admin.dashboard") }}" class="logo logo-light">
        <span class="logo-lg">
            <img  src="{{ asset('backend/assets/images/logo-vy.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img  src="{{ asset('backend/assets/images/logo-vy.png') }}" alt="logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route("admin.dashboard") }}" class="logo logo-dark">
        <span class="logo-lg">
           <img  src="{{ asset('backend/assets/images/logo-vy.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img  src="{{ asset('backend/assets/images/logo-vy.png') }}" alt="logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="{{ route('admin.dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>

            </li>

            <li class="side-nav-title">Profil</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Utilisateurs </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('users') }}">List</a>
                        </li>
                        <li>
                            <a href="{{ route('users.create') }}">Ajouter un utilisateur</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a  href="{{ route('escorts') }}"
                aria-controls="sidebarEscorts" class="side-nav-link">
                    <i class="uil-user"></i>
                    <span> Escortes </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a  href="{{ route('users.suspend') }}"  class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Comptes suspendus </span>

                </a>

            </li>



       <li class="side-nav-item">
                <a  href="{{ route('admin.ads') }}"
                aria-controls="sidebarAds" class="side-nav-link">
                    <i class="uil-file"></i>
                    <span> Annonces </span>
                </a>
        </li>

        <li class="side-nav-title">Localisation</li>



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Villes </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('towns') }}" >Listes</a>
                        </li>
                        <li>
                            <a href="{{ route('towns.create') }}" >Ajouter une ville</a>
                        </li>
                    </ul>
                </div>
            </li>

             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts1" aria-expanded="false" aria-controls="sidebarLayouts1" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Quartiers </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts1">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('quarters') }}" >Listes</a>
                        </li>
                        <li>
                            <a href="{{ route('quarters.create') }}" >Ajouter un quartier</a>
                        </li>
                    </ul>
                </div>
            </li>


			<li class="side-nav-title">Messages</li>

			  <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts4" aria-expanded="false" aria-controls="sidebarLayouts4" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Contacts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts4">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('contacts') }}" >Listes</a>
                        </li>
                    </ul>
                </div>
            </li>

             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts3" aria-expanded="false" aria-controls="sidebarLayouts3" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Dénonciations </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts3">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('reports') }}" >Listes</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-title">Publicité</li>
            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('banners') }}">
                    <i class="uil-box"></i>
                    <span> Bannières </span>

                </a>
            </li>

            <li class="side-nav-title">Abonnements</li>

            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('memberships') }}">
                    <i class="uil-box"></i>
                    <span> Gerer les abonnements </span>

                </a>
            </li>
            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('memberships.create') }}" >
                    <i class="uil-box"></i>
                    <span> Créer un abonnement</span>

                </a>
            </li>
            <li class="side-nav-title">Mon Profil</li>

            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('admin.profile') }}">
                    <i class="uil-box"></i>
                    <span> editer mon profil </span>

                </a>
            </li>
            <li class="side-nav-title">FAQ</li>
            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('faqs.index') }}">
                    <i class="uil-box"></i>
                    <span> Sections FAQ </span>

                </a>
            </li>
            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route("faqs.create") }}" >
                    <i class="uil-box"></i>
                    <span>Creer une FAQ</span>

                </a>
            </li>

            <li class="side-nav-item">
                <form method="POST" action="{{ route('logout') }}" id="logout">
                    @csrf
                </form>

                <a style="cursor: pointer" class="side-nav-link" onclick="event.preventDefault(); document.getElementById('logout').submit();"class="dropdown-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Déconnexion</span>
                </a>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
