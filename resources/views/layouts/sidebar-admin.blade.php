<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
  {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
  <span class="brand-text pl-3">Lab Computer <b>UIM</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
      alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">{{ Auth::guard('admin')->user()->nama_lengkap }}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
      <a href="{{ route('a.dashboard') }}"
      class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
      <i class="nav-icon fas fa-home"></i>
      <p>
        Dashboard
      </p>
      </a>
    </li>


    <li class="nav-item">
      <a href="{{ route('a.dashboard') }}" class="nav-link {{ request()->is('') ? 'active' : '' }}">
      <i class="nav-icon fas fa-file"></i>
      <p>
        Slip Pembayaran
      </p>
      </a>
    </li>

    @can('role', 'admin')
      <li class="nav-item {{ request()->is('admin/matakuliah') || request()->is('admin/prodi') || request()->is('admin/fakultas')  ? 'menu-is-opening menu-open' : '' }} ">
      <a href="#" class="nav-link {{ request()->is('admin/matakuliah') || request()->is('admin/prodi') || request()->is('admin/fakultas')  ? 'active' : '' }} ">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>
        CRUD Data
        <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{ route('a.fakultas') }}"
              class="nav-link {{ request()->is('admin/fakultas') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Fakultas</p>
            </a>
        </li>

				<li class="nav-item">
					<a href="{{ route('a.prodi') }}"
						class="nav-link {{ request()->is('admin/prodi') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Program Studi</p>
					</a>
				</li>

        <li class="nav-item">
        <a href="{{ route('a.matakuliah') }}"
          class="nav-link {{ request()->is('admin/matakuliah') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Mata Kuliah</p>
        </a>
        </li>



      </ul>
      </li>
    @endcan

    @can('role', ['admin'])
    <li class="nav-item">
      <a href="{{ route('a.dashboard') }}" class="nav-link {{ request()->is('') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie"></i>
        <p>
        Data Dosen
        </p>
      </a>
    </li>
    @endcan

    <li class="nav-item">
      <a href="{{ route('a.data-mahasiswa') }}"
      class="nav-link {{ request()->is('admin/data-mahasiswa') ? 'active' : '' }}">
      <i class="nav-icon fas fa-user"></i>
      <p>
        Data Mahasiswa
      </p>
      </a>
    </li>

    @can('role', 'admin')
    <li class="nav-item {{ request()->is('admin/manajemen-user') || request()->is('#') || request()->is('#')  ? 'menu-is-opening menu-open' : ''  }}">
      <a href="#"
        class="nav-link
        {{ request()->is('admin/manajemen-admin') ? 'active' : '' }} ">
        <i class="nav-icon fas fa-user-cog"></i>
        <p>
        Manajemen User
        <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Admin</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('a.manajemen-user') }}"
          class="nav-link {{ request()->is('admin/manajemen-user') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Mahasiswa</p>
        </a>
        </li>

      </ul>
      </li>
    @endcan

    <li class="nav-item">
      <a href="{{ route('a.logout') }}" class="nav-link">
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
