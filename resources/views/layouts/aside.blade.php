<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{asset('ebook.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">- LIBRARY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (\Auth::user()->photo == null)
                    <img src="https://cdn.iconscout.com/icon/free/png-512/avatar-372-456324.png" class="img-circle elevation-2"
                    alt="User Image">
                @else
                    <img src="{{ url('uploads', \Auth::user()->photo ) }}" class="img-circle elevation-2" width="30%"
                    alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ \Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if (\Auth::user()->role_id == 1)
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('/')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('book')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Buku</p>
                    </a>
                </li>
                 <li class="nav-item has-treeview menu-open">
                    <a href="{{url('kategory')}}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Kategory</p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('anggota')}}" class="nav-link">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Anggota
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('review')}}" class="nav-link">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>
                            Review
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('chat') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Chat Anggota
                        </p>
                    </a>
                </li>
                 <li class="nav-header">OTHER</li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('about')}}" class="nav-link">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Tentang kami
                        </p>
                    </a>
                </li>
                @else
                 <li class="nav-item has-treeview menu-open">
                    <a href="{{url('/')}}" class="nav-link active">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Perpustakaan
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('sumbang')}}" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Sumbang Buku
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('chat') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Chat Anggota
                        </p>
                    </a>
                </li>
                 <li class="nav-header">OTHER</li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('about')}}" class="nav-link">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Tentang kami
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
