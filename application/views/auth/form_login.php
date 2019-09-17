<body class="hold-transition">
<div class="login-box">
  <div class="login-logo">
    <a href="dashboard"><b><i class="fa fa-comments-o"></i></b> NgeChat</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php if ($this->session->flashdata('login-gagal')): ?>

        <div class="alert bg-maroon alert-dismissible" role="alert">
          <i class=""><?= $this->session->flashdata('login-gagal') ?></i>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php endif; ?>
      <?php if ($this->session->flashdata('berhasil')): ?>

        <div class="alert bg-green alert-dismissible" role="alert">
          <i class=""><?= $this->session->flashdata('berhasil') ?></i>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php endif; ?>

      <form action="<?= base_url('proses-login') ?>" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <span class="fa fa-google form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group">
            <button type="submit" name="button" class="btn btn-success btn-block"> <i class="fa fa-sign-in fa-fw"></i> Login gan</button>
        </div>

      </form>

      <!-- /.social-auth-links -->

      <a class="text-success" href="<?= base_url('form-daftar') ?>" class="text-center">Register a new membership</a>

    </div>
  <!-- /.login-box-body -->
</div>
