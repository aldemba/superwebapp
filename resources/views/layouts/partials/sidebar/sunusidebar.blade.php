  <!-- leftbar-tab-menu -->
  <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <nav class="nav">
                    <a href="#MetricaAnalytics" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Paiements" data-trigger="hover">
                        <!-- <i data-feather="bar-chart-2" class="align-self-center menu-icon icon-dual"></i> -->
                        <i class="dripicons-ticket" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaAnalytics-->  

                    <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Factures" data-trigger="hover">
                        <i class="dripicons-to-do" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->
                </nav><!--end nav-->
                <div class="pro-metrica-end">
                    <a href="/logout" class="nav-link" data-toggle="tooltip-custom" data-placement="right" data-original-title="Se déconnecter" data-trigger="hover">
                        <i class="dripicons-exit text-muted mr-2" style="font-size:24px"></i>
                    </a>
                </div>
            </div><!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="/analytics/analytics-index" class="logo" style="display: flex; justify-content: center; margin-top: 15px">
                        <span>
                            <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" style="width:50px; height:50px">
                        </span>
                    </a>
                </div>
                <!--end logo-->
                <div class="menu-body slimscroll">                    
                    <div id="MetricaAnalytics" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Mes paiements</h6>       
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="/analytics/analytics-reports">Paiements</a></li> 
                        </ul>
                    </div><!-- end Analytic -->

                    <div id="MetricaApps" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Mes Factures</h6>
                        </div>
                        <ul class="nav metismenu">
                            <li class="nav-item"><a class="nav-link" href="/apps/invoice">Factures</a></li>                            
                        </ul>
                    </div><!-- end Crypto -->
                </div><!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->