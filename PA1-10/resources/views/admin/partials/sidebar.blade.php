<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/Template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ Route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Berita
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/berita/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Berita</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.surat')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Surat Pengantar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.saran')}}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Saran
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Galeri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('galery.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Galeri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('galery.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Galeri</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Struktur Pemerintahan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('structure.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pemerintahan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Visi Misi Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/visimisi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>VisiMisi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Pengumuman
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pengumuman" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengumuman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengumuman/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Pengumuman</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item bg-white">
                    <a href="{{url('admin/logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
