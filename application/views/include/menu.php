<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?php echo base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">Nin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="<?php echo base_url("dashboard") ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-header">DATA</li>

        <li <?php echo ($this->uri->segment(1) == "barang" ? 'class="nav-item has-treeview menu-open"' : 'class="nav-item has-treeview menu-close"') ?>>
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Barang
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url("barang/") ?>" <?php echo ($this->uri->segment(1) == "barang" && $this->uri->segment(2) == "" ? 'class = "nav-link active"' : 'class = "nav-link"') ?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("barang/insert") ?>" <?php echo ($this->uri->segment(1) == "barang" && $this->uri->segment(2) == "insert" ? 'class = "nav-link active"' : 'class = "nav-link"') ?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Input Barang</p>
              </a>
            </li>
          </ul>
        </li>

        <li <?php echo ($this->uri->segment(1) == "pegawai" ? 'class="nav-item has-treeview menu-open"' : 'class="nav-item has-treeview menu-close"') ?>>
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Pegawai
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url("pegawai/") ?>" <?php echo ($this->uri->segment(1) == "pegawai" && $this->uri->segment(2) == "" ? 'class = "nav-link active"' : 'class = "nav-link"') ?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("pegawai/insert") ?>" <?php echo ($this->uri->segment(1) == "pegawai" && $this->uri->segment(2) == "insert" ? 'class = "nav-link active"' : 'class = "nav-link"') ?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Input Pegawai</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url("customer") ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Customer</p>
          </a>
        </li>

        <li <?php echo ($this->uri->segment(1) == "inventory" ? 'class="nav-item has-treeview menu-open"' : 'class="nav-item has-treeview menu-close"') ?>>
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Inventory
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url("inventory/") ?>" <?php echo ($this->uri->segment(1) == "inventory" && $this->uri->segment(2) == "" ? 'class = "nav-link active"' : 'class = "nav-link"') ?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Inventory</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("inventory/insert") ?>" <?php echo ($this->uri->segment(1) == "inventory" && $this->uri->segment(2) == "insert" ? 'class = "nav-link active"' : 'class = "nav-link"') ?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Input Inventory</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-header">TRANSAKSI</li>

        <li class="nav-item">
          <a href="<?php echo base_url("transaksi") ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Transaksi</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url("login/logout") ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Logout</p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>