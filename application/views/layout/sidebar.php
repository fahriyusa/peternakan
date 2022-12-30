<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="assets/img/ico.png" alt="Peternakan Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Peternakan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">sg ndue</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./assets/index.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./assets/index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./assets/index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- menu -->
        <li class="nav-header">Anggota</li>
        <li class="nav-item">
          <a href="anggota" class="nav-link">
            <i class="fa-solid fa-user"></i>&emsp;
            <p>
              Anggota
            </p>
          </a>
        </li>
        <li class="nav-header">Team</li>
        <li class="nav-item">
          <a href="team" class="nav-link">
          <i class="fa-solid fa-users"></i>&emsp;
            <p>
              Team
            </p>
          </a>
        </li>
        <li class="nav-header">Pakan</li>
        <li class="nav-item">
          <a href="pakan" class="nav-link">
            <i class="fa-solid fa-cheese"></i>&emsp;
            <p>
              Data Pakan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pakan" class="nav-link">
            <i class="fa-solid fa-cheese"></i>&emsp;
            <p>
             Ambil Pakan
            </p>
          </a>
        </li>
        <li class="nav-header">Telur</li>
        <li class="nav-item">
          <a href="<?=  base_url('telur') ?>" class="nav-link">
            <i class="fa-solid fa-egg"></i>&emsp;
            <p>
              Telur
            </p>
          </a>
        </li>
        <li class="nav-item">
<<<<<<< HEAD
          <a href="telur/ambilTelur" class="nav-link">
            <i class="fa-solid fa-egg"></i>&emsp;
=======
          <a href="<?=  base_url() ?>ambiltelur" class="nav-link">
            <i class="nav-icon far fa-egg"></i>
>>>>>>> f7f519bc48f0044f0de5cffa262c59aad5209c7f
            <p>
              Ambil Telur
            </p>
          </a>
        </li>
        <li class="nav-header">Panen</li>
        <li class="nav-item">
          <a href="panen" class="nav-link">
            <i class="fa-solid fa-sack-dollar"></i>&emsp;
            <p>
              Panen
            </p>
          </a>
        </li>
        <li class="nav-header">Jadwal</li>
        <li class="nav-item">
          <a href="jadwal" class="nav-link">
            <i class="fa-solid fa-calendar-alt"></i>&emsp;
            <p>
              Jadwal
            </p>
          </a>
        </li>
        <br>
        <br>
        <!-- ./menu -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>