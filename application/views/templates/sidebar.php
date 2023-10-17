<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('login/logout'); ?>">Logout</a>
    </li>
  </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
  
      <span class="brand-text font-weight-light">E-Legalisir</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        <li class="nav-item">
                <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if($this->uri->segment(1) == 'dashboard') echo 'active'?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="<?= base_url('legalisir') ?>" class="nav-link <?php if($this->uri->segment(1) == 'permintaan_legalisir') echo 'active'?>">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Permintaan Legalisir</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="<?= base_url('riwayat') ?>" class="nav-link <?php if($this->uri->segment(1) == 'riwayat_legalisir') echo 'active'?>">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Riwayat Legalisir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('alumni') ?>" class="nav-link <?php if($this->uri->segment(1) == 'alumni') echo 'active'?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Alumni</p>
                </a>
              </li>

            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">