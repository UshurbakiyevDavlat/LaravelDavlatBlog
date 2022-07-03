<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.main.index')}}" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">Services</li>
                    <li class="nav-item">
                        <a href="{{route('admin.category.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Categories
                                <span class="badge badge-info right">0</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.category.create')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Create categories
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>