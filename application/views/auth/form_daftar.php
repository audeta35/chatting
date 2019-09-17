<body class="hold-transition">
<div class="login-box">
  <div class="login-logo">
    <a href="dashboard"><b><i class="fa fa-comments-o"></i></b> NgeChat</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

      <p class="login-box-msg">Register a new membership</p>

      <?php if ($this->session->flashdata('dissmatch-pass')): ?>

        <div class="alert bg-maroon alert-dismissible" role="alert">
          <i class=""><?= $this->session->flashdata('dissmatch-pass') ?></i>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php endif; ?>
      <?php if ($this->session->flashdata('dissmatch-input')): ?>

        <div class="alert bg-maroon alert-dismissible" role="alert">
          <i class=""><?= $this->session->flashdata('dissmatch-input') ?></i>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php endif; ?>
      <?php if ($this->session->flashdata('kalimat-terlarang')): ?>

        <div class="alert bg-maroon alert-dismissible" role="alert">
          <i class=""><?= $this->session->flashdata('kalimat-terlarang') ?></i>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php endif; ?>

      <div class="register-box-body">
        <form action="<?= base_url('proses-daftar') ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="username" name="username">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="email">
            <span class="fa fa-google form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="fpassword" class="form-control" placeholder="ulangi password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="form-group">
            <button type="submit" class="btn bg-green btn-block" name="button"><i class="fa fa-google fa-fw"> </i> Daftar gan</button>
          </div>
        </form>

        <a href="<?= base_url('form-login') ?>" class="text-green">I already have a membership</a>
      </div>
    </div>
  <!-- /.login-box-body -->
</div>
