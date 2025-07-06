<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="/home" class="logo logo-light">
                <span class="logo-lg">
                    <img src="/dashboard/assets/images/logo-green.png" alt="logo">
                </span>
        <span class="logo-sm">
                    <img src="/dashboard/assets/images/logo-sm.png" alt="small logo">
                </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="/dashboard/assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="/dashboard/assets/images/logo-dark-sm.png" alt="small logo">
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

    <!-- Sidebar -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="/dashboard/assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">{{ auth()->user()->name }}</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title" style="font-size: 20px;"> <i class="uil-home text-success"></i> Navigation</li>

            <li class="side-nav-item">
                <a href="{{ route('polls') }}" class="side-nav-link" style="font-size: 15px;">
                    <i class="uil-apps"></i>
                    <span> Sondages </span>
                </a>
            </li>


            <ul class="side-nav">

                <li class="side-nav-title" style="font-size: 20px;"> <i class=" uil-compress-arrows text-success" ></i> Entités</li>

                <li class="side-nav-item">
                    <a href="{{ route('players') }}" class="side-nav-link" style="font-size: 15px;">
                        <i class="ri-run-fill "></i>
                        <span> Joueurs </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('teams') }}" class="side-nav-link" style="font-size: 15px;">
                        <i class="mdi mdi-flag"></i>
                        <span> Équipes </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('countries') }}" class="side-nav-link" style="font-size: 15px;">
                        <i class="mdi mdi-flag"></i>
                        <span> Pays </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('continents') }}" class="side-nav-link" style="font-size: 15px;">
                        <i class="mdi mdi-globe-model"></i>
                        <span> Continents </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('contributors') }}" class="side-nav-link" style="font-size: 15px;">
                        <i class="ri-hand-coin-fill  "></i>
                        <span> Contributeurs </span>
                    </a>
                </li>


                <!-- Help Box -->
            <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-end close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="/dashboard/assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
            </div>
            <!-- end Help Box -->


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
