<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
    <!-- Top Bar Start -->
    <div class="topbar">
        <div class="topbar-inner">
            <!-- Navbar -->
            
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-right mb-0 d-flex justify-content-center align-items-center">
                    <li>
                        <button class="button-menu-mobile nav-link">
                            <i data-feather="menu"></i>
                        </button>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="profile-user" class="rounded-circle" />
                            <i class="ml-1 nav-user-name hidden-sm">{{ auth()->user()->prenom }} {{ auth()->user()->nom }}</i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="/logout"><i class="ti-power-off text-muted mr-2"></i> Se déconnecter</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->   
            </nav>
            <!-- end navbar-->
        </div><!--topbar-inner-->
    </div>
    <!-- Top Bar End -->
