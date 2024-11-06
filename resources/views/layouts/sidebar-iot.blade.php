<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box mt-3">
        <!-- Dark Logo-->
        <a href="/dashboard" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/lamp.png') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/Lamp-IoT.png') }}" alt="" height="30">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/dashboard" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/lamp.png') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/Lamp-IoT.png') }}" alt="" height="30">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <hr class="text-white mt-4">

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/dashboard">
                        <i class="ri-dashboard-line"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/lampu">
                        <i class="ri-lightbulb-line"></i> <span> Lampu </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
