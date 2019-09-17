<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url('assets/profile/') ?><?= $this->session->userdata('foto') ?>" class="profile-user-img img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $this->session->userdata('username'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> <?= $this->session->userdata('status') ?></a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="divider"></li>
      <li class="header">Mulai Spam Chat Yuk</li>
      <li class="treeview">
        <a href="#!">
          <i class="fa fa-commenting"></i> <span>Ngobrol Yuk</span>

        </a>
        <ul class="treeview-menu">
          <?php foreach($user->result() as $row){ ?>
  					<li class="" onclick="aktifkan('<?php echo $row->id_user  ?>')" id="aktif-<?php echo $row->id_user ?>" id="<?php echo $row->id_user; ?>" id="user">
              <a href="javascript:void(0)" style="text-decoration:none" onClick="getChatAll('<?php echo $row->id_user; ?>','0')">
                <img src="<?= base_url('assets/profile/') ?><?php echo $row->foto; ?>" width="25" alt="" class="ml-4">
                <i class="text-center">
                  <?php echo $row->nama; ?>

                  <?php if ($row->verifikasi == 'verified'): ?>
                    <i class="fa fa-check-circle-o text-green fa-fw"></i>
                  <?php endif; ?>
                  <?php if ($row->verifikasi == 'developer'): ?>
                    <i class="fa fa-code text-maroon fa-fw"></i>
                  <?php endif; ?>
                  <?php if ($row->verifikasi == 'unverified'): ?>
                    <i class="fa fa-exclamation-circle text-orange fa-fw"></i>
                  <?php endif; ?>
                </i>
              </a>
            </li>
  				<?php } ?>
        </ul>
      </li>
      <li>
        <a href="#!">
          <i class="fa fa-wechat"></i> <span>Obrolan Grup</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">on progress</small>
          </span>
        </a>
      </li>
      <li>
        <li>
          <a href="#!">
            <i class="fa fa-user"></i> <span>Profil Kamu</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">on progress</small>
            </span>
          </a>
        </li>
        <li>
        <a href="logout">
          <i class="fa fa-sign-out"></i> <span>Keluar</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
