<nav class="main-header navbar navbar-expand navbar-info navbar-dark nav-legacy text-sm" style="background-color: #13a9e2; color: #fff">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>

  </ul>


  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="<?php echo base_url('user/profileUser/') . $this->session->userdata('id') ?>" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="<?php echo base_url('/assets/img/profile-user/') . $this->session->userdata('foto') ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                <?php echo $this->session->userdata('nama') ?>
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm"><?php echo $this->session->userdata('email') ?></p>
              <p class="text-muted" style="font-size: 12px;"><i class="far fa-clock mr-1"></i>Mulai terdaftar <?php echo date('d F Y', $this->session->userdata('date_created')) ?></p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <a href="<?php echo base_url('logout/logoutUser') ?>" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <i class="fa fa-fw fa-lock mt-2" style="font-size: 19px; padding-right: 30px;"></i>
            <div class="media-body">
              <h3 class="dropdown-item-title">Logout</h3>
              <p class="text-sm"><?php echo $this->session->userdata('email') ?></p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
      </div>

    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-danger navbar-badge"><?php echo $this->wandalibs->countLoginUserById($this->session->userdata('email')); ?></span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header"><?php echo $this->wandalibs->countLoginUserById($this->session->userdata('email')); ?> Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-clock mr-2"></i> Terakhir Anda login <?php echo date('d F Y | h:i:s', $this->wandalibs->_lastLoginUserById($this->session->userdata('email'))['date_created']) ?>
          <span class="float-right text-muted text-sm"></span>
        </a>
        <div class="dropdown-divider"></div>
        <!-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>