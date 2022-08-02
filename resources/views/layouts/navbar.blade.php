@php
$review = \App\Comment::whereDay('created_at','=', date('d'))->where('role_id', 2)->get();
$com = \App\Comment::whereDay('created_at','=', date('d'))->where('role_id', 2)->orderBy('created_at','desc')->limit(10)->get();
@endphp

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <a href="#" class="navbar-brand ml-auto">
        <img src="{{ asset('bk.svg') }}" style="width: 30px; height: 30px" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> E-Library</span>
    </a>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        @if (\Auth::user()->role_id == 1)
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">
                    {{ count($review) }}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Review Anggota</span>
                <a href="#" class="dropdown-item">
                    @foreach ($com as $ncom)
                    @if ($ncom->role_id == 1)
                         
                    @else
                       <!-- Message Start -->
                       <div class="media">
                       @if ($ncom->user->photo == null)
                            <img src="https://cdn.iconscout.com/icon/free/png-512/avatar-372-456324.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                       @else
                            <img src="{{ url('uploads/', $ncom->user->photo) }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                       @endif
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                {{ $ncom->user->name }}
                            </h3>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ \Carbon\Carbon::parse($ncom->created_at)->diffForHumans() }}</p>
                        </div>
                    </div><hr>
                    <!-- Message End -->
                    @endif
                    @endforeach
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('review') }}" class="dropdown-item dropdown-footer">See All Review</a>
            </div>
        </li>
        @else

        @endif
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user-circle"></i>
                <small>{{ \Auth::user()->name }}</small>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">My Profile</span>
                <div class="dropdown-divider"></div>
                @if (\Auth::user()->photo == null)
                <center><img src="https://cdn.iconscout.com/icon/free/png-512/avatar-372-456324.png" width="50%" alt="">
                </center>
                @else
                <center><img src="{{ url('uploads/', \Auth::user()->photo) }}" width="50%" style="border-radius: 50%"
                        alt="">
                    <center>
                        @endif
                        <p class="text-center">{{ \Auth::user()->name }}</p>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ url('profile') }}" class="dropdown-item dropdown-footer"> <i
                                        class="fa fa-list"></i> Detail</a>
                            </div>
                            <div class="col-6">
                                <a href="{{ url('/keluar') }}" class="dropdown-item dropdown-footer"
                                    onclick="return confirm('Apa anda yakin ingin keluar?')"> <i
                                        class="fa fa-arrow-right"></i> Logout</a>
                            </div>
                        </div>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
