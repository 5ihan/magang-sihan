
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('adm.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('adm.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item {{ request()->is('produk') ? 'active' : '' }}"><a class="nav-link " href="{{ route('adm.produk') }}"><i class="fas fa-fw fa-chart-area"></i>Produk</a></li>
            <li class="nav-item {{ request()->is('kategori') ? 'active' : '' }}"><a class="nav-link " href="{{ route('adm.kategori')}}"><i class="fas fa-fw fa-chart-area"></i>kategori</a></li>
            <li class="nav-item {{ request()->is('pelanggan') ? 'active' : '' }}"><a class="nav-link " href="{{ route('adm.pelanggan') }}"><i class="fas fa-fw fa-chart-area"></i>pelanggan</a></li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a class="nav-link " href="{{ route('adm.contact') }}"><i class="fas fa-fw fa-chart-area"></i>contact</a></li>




        </ul>
        <!-- End of Sidebar -->
