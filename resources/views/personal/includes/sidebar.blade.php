<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('personal.main.index')}}" class="brand-link">
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
                        <a href="{{route('personal.liked.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-heart"></i>
                            <p>
                                Liked posts
                                <span class="badge badge-info right">{{\App\Models\Personal\PostUserLike::all()->count()}}</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('personal.comment.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-sticky-note"></i>
                            <p>
                                Comments
                                <span class="badge badge-info right">{{\App\Models\Personal\Comment::all()->count()}}</span>
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
