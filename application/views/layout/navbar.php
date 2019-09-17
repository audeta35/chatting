<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('assets/adminlte') ?>/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><i class="fa fa- fa-comments-o text-white"></i></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><i class="fa fa- fa-comments-o text-white"></i></b> NgeChat</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
                <?php if ($this->session->flashdata('new-user')): ?>
                  <span class="label label-danger">!</span>
                <?php endif; ?>
            </a>
            <ul class="dropdown-menu">
              <?php if ($this->session->flashdata('new-user')): ?>
                <li class="header">Salam Santuy Dari Developer :)</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="<?= base_url('assets/profile/person1.jpeg') ?>" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Audeta | Developer
                          <small><i class="fa fa-clock-o"></i> <?= $this->session->flashdata('waktu'); ?></small>
                        </h4>
                        <p><?= $this->session->flashdata('new-user'); ?></p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                </li>
                <li class="footer"><a href="" onclick="location.reload();">Bersihkan</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('assets/profile/') ?><?= $this->session->userdata('foto') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('email') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('assets/profile/') ?><?= $this->session->userdata('foto') ?>" class="img-circle" alt="User Image">

                <p>
                  <?= $this->session->userdata('username') ?> - <i><?= $this->session->userdata('verifikasi') ?></i>
                  <?php if ($this->session->userdata('verifikasi') == 'unverified'): ?>
                    <i class="fa fa-exclamation-circle text-white fa-fw"></i>
                  <?php endif; ?>
                  <?php if ($this->session->userdata('verifikasi') == 'verified'): ?>
                    <i class="fa fa-check-circle-o text-white fa-fw"></i>
                  <?php endif; ?>
                  <small>Bergabung sejak <?= $this->session->userdata('join_at'); ?></small>
                </p>
              </li>

            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
