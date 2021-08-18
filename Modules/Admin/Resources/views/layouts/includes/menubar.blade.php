<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('front-assets/images/xm-logo.png') }}" alt="AdminLTE Logo"
            class="brand-image" style="margin-top: 0px;">
        <span class="brand-text font-weight-light"><strong>{{ config('app.name', 'Laravel') }}</strong></span>
    </a>

    @php
        $crName = \Request::route()->getName();
    @endphp
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                {{-- dashboard link --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ getActiveClass($crName, ['admin.dashboard']) }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- logout link --}}
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>