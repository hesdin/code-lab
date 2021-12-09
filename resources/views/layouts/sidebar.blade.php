<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
	{{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
	<span class="brand-text font-weight-bold">Lab Computer</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
	<!-- Sidebar user panel (optional) -->
	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
	  <div class="image">
		<img src="{{ asset('img/profile/' . $user->foto) }}" class="img-circle elevation-2"
		  alt="User Image">
	  </div>
	  <div class="info">
		<a href="#" class="d-block">{{ $user->nama_lengkap }}</a>
	  </div>
	</div>

	<!-- Sidebar Menu -->
	<nav class="mt-2">
	  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<!-- Add icons to the links using the .nav-icon class
	    with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="{{ route('m.dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-house-user"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

        <li class="nav-item">
            <a href="{{ route('m.slip.pembayaran') }}" class="nav-link {{ request()->is('slip-pembayaran') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-upload"></i>
              <p>
                Slip Pembayaran
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('m.profile') }}" class="nav-link {{ request()->is('profile') ? 'active' : '' }}">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
                Profile
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
	  </ul>
	</nav>
	<!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
