<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link font-weight-bold" data-toggle="dropdown" href="#">{{ XI_ADMIN()->name }}</a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="{{ route('admin.profile') }}" class="dropdown-item">
                    <i class="fa fa-user mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.logout') }}" class="dropdown-item">
                    <i class="fa fa-power-off mr-2"></i> Log Out
                </a>
            </div>
        </li>
    </ul>
</nav>