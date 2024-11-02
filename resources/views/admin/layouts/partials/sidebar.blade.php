<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/admin-assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="/admin-assets/images/logo-dark.png" alt="" height="17" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="/admin-assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="/admin-assets/images/logo-light.png" alt="" height="17" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title">
                    <span data-key="t-menu">Menu</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Quản lý nhân viên</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route("nhanvien.index")}}" class="nav-link" data-key="t-analytics">
                                    Danh sách nhân viên
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards2" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards2">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Quản lý ca làm việc</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route("calamviec.index")}}" class="nav-link" data-key="t-analytics">
                                    Danh sách ca làm việc
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards3" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards3">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Quản lý ca điểm danh chấm công</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route("dkiCa")}}" class="nav-link" data-key="t-analytics">
                                    Đăng kí ca làm việc
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("diemDanhChamCong")}}" class="nav-link" data-key="t-analytics">
                                    Điểm danh & Chấm Công
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    
                </li>
                <!-- end Dashboard Menu -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>