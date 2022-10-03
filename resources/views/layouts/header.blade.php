<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Top Bar Start -->
        <div class="topbar">
            <div class="topbar-inner">
                <!-- LOGO -->
                <div class="topbar-left text-center text-lg-left">
                    <a href="/horizontal/horizontal-sales-index" class="logo">
                        <span>
                            <img src="{{ URL::asset('assets/images/logo-sm.jpg')}}" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            {{-- <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light"> --}}
                            <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark" width="75">
                        </span>
                    </a>
                </div>
                <!--end logo-->
                <!-- Navbar -->
                <nav class="navbar-custom">
                    <ul class="list-unstyled topbar-nav float-right mb-0">
                        <li class="dropdown hide-phone">

                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                                <!-- Top Search Bar -->
                                <div class="app-search-topbar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="{{ URL::asset('assets/images/users/user-1.png')}}" alt="profile-user" class="rounded-circle" />
                                <span class="ml-1 nav-user-name hidden-sm">User<i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Lock screen</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="/logout"><i class="ti-power-off text-muted mr-2"></i> Logout</a>
                            </div>
                        </li>

                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link" id="mobileToggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a><!-- End mobile menu toggle-->
                        </li> <!--end menu item-->
                    </ul><!--end topbar-nav-->

                    <div id="navigation">
                        <ul class="list-unstyled navigation-menu">
                            <li class="main-nav-item">
                                <a href="#" class="navbar-link">
                                    <span>Ecommerce</span>
                                </a>
                                <ul class="submenu-tab">
                                    <li><a href="/material-horizontal/ecommerce-index">Dashboard</a></li>
                                    <li><a href="/ecommerce/ecommerce-products">Products</a></li>
                                    <li><a href="/ecommerce/ecommerce-product-list">Product List</a></li>
                                    <li><a href="/ecommerce/ecommerce-product-detail">Product Detail</a></li>
                                    <li><a href="/ecommerce/ecommerce-cart">Cart</a></li>
                                    <li><a href="/ecommerce/ecommerce-checkout">Checkout</a></li>

                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->
                            <li class="main-nav-item">
                                <a href="#" class="navbar-link">
                                    <span>Apps</span>
                                </a>
                                <ul class="submenu-tab">
                                    <li class="has-submenu">
                                        <a href="#">Email</a>
                                        <ul class="submenu">
                                            <li><a href="/apps/email-inbox">Inbox</a></li>
                                            <li><a href="/apps/email-read">Read Email</a></li>
                                            <li class="divider-custom">
                                                <div class="divider-text bg-light">Email Template</div>
                                            </li>
                                            <li><a href="/others/email-templates-basic">Basic Action Email</a></li>
                                            <li><a href="/others/email-templates-alert">Alert Email</a></li>
                                            <li><a href="/others/email-templates-billing">Billing Email</a></li>
                                        </ul>
                                    </li> <!--end has-submenu-->
                                    <li><a href="/apps/chat">Chat</a></li>
                                    <li><a href="/apps/contact-list">Contact List</a></li>
                                    <li><a href="/apps/calendar">Calendar</a></li>
                                    <li><a href="/apps/invoice">Invoice</a></li>
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->
                            <li class="main-nav-item">
                                <a href="#" class="navbar-link">
                                    <span>UI Kit</span>
                                </a>
                                <ul class="submenu-tab">
                                    <li class="has-submenu">
                                        <a href="#">UI Elements</a>
                                        <ul class="submenu">
                                            <li><a href="/others/ui-bootstrap">Bootstrap</a></li>
                                            <li><a href="/others/ui-animation">Animation</a></li>
                                            <li><a href="/others/ui-avatar">Avatar</a></li>
                                            <li><a href="/others/ui-clipboard">Clip Board</a></li>
                                            <li><a href="/others/ui-files">File Manager</a></li>
                                            <li><a href="/others/ui-ribbons">Ribbons</a></li>
                                            <li><a href="/others/ui-dragula">Dragula</a></li>
                                            <li><a href="/others/ui-check-radio">Check & Radio</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Advanced UI</a>
                                        <ul class="submenu">
                                            <li><a href="/others/advanced-rangeslider">Range Slider</a></li>
                                            <li><a href="/others/advanced-sweetalerts">Sweet Alerts</a></li>
                                            <li><a href="/others/advanced-nestable">Nestable List</a></li>
                                            <li><a href="/others/advanced-ratings">Ratings</a></li>
                                            <li><a href="/others/advanced-highlight">Highlight</a></li>
                                            <li><a href="/others/advanced-session">Session Timeout</a></li>
                                            <li><a href="/others/advanced-idle-timer">Idle Timer</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="/others/forms-elements">Basic Elements</a></li>
                                            <li><a href="/others/forms-advanced">Advance Elements</a></li>
                                            <li><a href="/others/forms-validation">Validation</a></li>
                                            <li><a href="/others/forms-wizard">Wizard</a></li>
                                            <li><a href="/others/forms-editors">Editors</a></li>
                                            <li><a href="/others/forms-repeater">Repeater</a></li>
                                            <li><a href="/others/forms-x-editable">X Editable</a></li>
                                            <li><a href="/others/forms-uploads">File Upload</a></li>
                                            <li><a href="/others/forms-img-crop">Image Crop</a></li>
                                        </ul>
                                    </li> <!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="/others/charts-apex">Apex</a></li>
                                            <li><a href="/others/charts-morris">Morris</a></li>
                                            <li><a href="/others/charts-chartjs">Chartjs</a></li>
                                            <li><a href="/others/charts-flot">Flot</a></li>
                                            <li><a href="/others/charts-chartist">Chartist</a></li>
                                            <li><a href="/others/charts-peity">Peity</a></li>
                                            <li><a href="/others/charts-sparkline">Sparkline</a></li>
                                            <li><a href="/others/charts-knob">Jquery Knob</a></li>
                                            <li><a href="/others/charts-justgage">JustGage</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Tables </a>
                                        <ul class="submenu">
                                            <li><a href="/others/tables-basic">Basic</a></li>
                                            <li><a href="/others/tables-datatable">Datatables</a></li>
                                            <li><a href="/others/tables-responsive">Responsive</a></li>
                                            <li><a href="/others/tables-editable">Editable</a></li>
                                            <li><a href="/others/tables-footable">Footable</a></li>
                                            <li><a href="/others/tables-jsgrid">Jsgrid</a></li>
                                            <li><a href="/others/tables-dragger">Dragger</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="/others/icons-materialdesign">Material Design</a></li>
                                            <li><a href="/others/icons-dripicons">Dripicons</a></li>
                                            <li><a href="/others/icons-fontawesome">Font awesome</a></li>
                                            <li><a href="/others/icons-themify">Themify</a></li>
                                            <li><a href="/others/icons-typicons">Typicons</a></li>
                                            <li><a href="/others/icons-feather">Feather</a></li>
                                            <li><a href="/others/icons-emoji">Emoji</a></li>
                                        </ul>
                                    </li> <!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="/others/maps-google">Google Maps</a></li>
                                            <li><a href="/others/maps-leaflet">Leaflet Maps</a></li>
                                            <li><a href="/others/maps-vector">Vector Maps</a></li>
                                        </ul>
                                    </li> <!--end has-submenu-->
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->
                            <li class="main-nav-item">
                                <a href="#" class="navbar-link">
                                    <span>Pages</span>
                                </a>
                                <ul class="submenu-tab">
                                    <li><a href="/pages/pages-profile">Profile</a></li>
                                    <li><a href="/pages/pages-timeline">Timeline</a></li>
                                    <li><a href="/pages/pages-treeview">Treeview</a></li>
                                    <li><a href="/material-horizontal/horizontal-starter">Starter Page</a></li>
                                    <li><a href="/pages/pages-pricing">Pricing</a></li>
                                    <li><a href="/pages/pages-tour">Tour</a></li>
                                    <li><a href="/pages/pages-blogs">Blogs</a></li>
                                    <li><a href="/pages/pages-faq">FAQs</a></li>
                                    <li><a href="/pages/pages-gallery">Gallery</a></li>
                                </ul>
                            </li><!--end has-submenu-->
                            <li class="main-nav-item">
                                <a href="#" class="navbar-link">
                                    <span>Authentication</span>
                                </a>
                                <ul class="submenu-tab">
                                    <li class="has-submenu">
                                        <a href="#">Log In</a>
                                        <ul class="submenu">
                                            <li><a href="/others/ui-bootstrap">Log In</a></li>
                                            <li><a href="/others/ui-animation">Log In-alt</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Register</a>
                                        <ul class="submenu">
                                            <li><a href="/authentication/auth-register">Register</a></li>
                                            <li><a href="/authentication/auth-register-alt">Register-alt</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Re-Password</a>
                                        <ul class="submenu">
                                            <li><a href="/authentication/auth-recover-pw">Re-Password</a></li>
                                            <li><a href="/authentication/auth-recover-pw-alt">Re-Password-alt</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#">Lock Screen</a>
                                        <ul class="submenu">
                                            <li><a href="/authentication/auth-lock-screen">Lock Screen</a></li>
                                            <li><a href="/authentication/auth-lock-screen-alt">Lock Screen-alt</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->

                                    <li class="has-submenu">
                                        <a href="#">Error 404</a>
                                        <ul class="submenu">
                                            <li><a href="/authentication/auth-404">Error 404</a></li>
                                            <li><a href="/authentication/auth-404-alt">Error 404-alt</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->

                                    <li class="has-submenu">
                                        <a href="#">Error 500</a>
                                        <ul class="submenu">
                                            <li><a href="/authentication/auth-500">Error 500</a></li>
                                            <li><a href="/authentication/auth-500-alt">Error 500-alt</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                </ul>
                            </li><!--end has-submenu-->
                        </ul><!--end topbar-nav-->
                    </div>
                </nav>
                <!-- end navbar-->
            </div><!--topbar-inner-->
        </div>
        <!-- Top Bar End -->
