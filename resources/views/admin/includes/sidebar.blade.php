<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.main.index')}}" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Main page</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">Services</li>

                    <li class="nav-item">
                        <a href="{{route('admin.user.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                Users
                                <span class="badge badge-info right">{{count(\App\Models\User::all())}}</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.post.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-sticky-note"></i>
                            <p>
                                Posts
                                <span class="badge badge-info right">{{count(\App\Models\Post::all())}}</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.category.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Categories
                                <span class="badge badge-info right">{{count(\App\Models\Category::all())}}</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.tag.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-tag"></i>
                            <p>
                                Tags
                                <span class="badge badge-info right">{{count(\App\Models\Tag::all())}}</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
