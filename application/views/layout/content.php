<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Deta Project
      <small><i>Berkatalah yang Baik atau Diam Saja!</i> kutipan hadist gan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-windows"></i> </a></li>
      <li><a href="#"><i class="fa fa-linux"></i> </a></li>
      <li class="active"><i class="fa fa-apple"></i> </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="panel">
      <div class="panel-heading bg-green darken-4" style="color:white;font-weight:bold" ><i class="fa fa-comments"></i> Ini Kolom Chat Gan</div>
      <div class="panel-body" style="height:400px;overflow-y:auto;background:url('<?= base_url('assets/bg/bg.jpg') ?>');" id="box">
        <div id="chat-box">
          <div class='panel-body'>
            <br>
            <br>
            <h2 class="text-center text-success">وَمَنْ كَانَ يُؤْمِنُ بِاللهِ وَالْيَوْمِ اْلآخِرِ فَليَــقُلْ خَــــيْرًا أَوْ لِيَـصـــمُــتْ
            </h2>
            <br>
            <p class="text-center text-success"><b><i>“Siapa yang beriman kepada Allah dan hari akhir, hendaklah dia berkata yang baik atau diam.” [HR Bukhari]</i></b></p>
          </div>
          <br/>
          <div id="loading" style="display:none"><center><i class="fa fa-spinner fa-spin"></i> Loading...</center></div>
          </br>
        </div>
      </div>
      <div class="panel-footer" style="display:none">
        <div class="row">
          <div class="col-md-12">
            <textarea class="form-control" id="pesan" style="margin-right:10px;"></textarea>
            <button id="send" type="button" class="btn btn-success pull-right" style="margin-top:10px;"  onClick="sendMessage()" ><i class="fa fa-paper-plane-o fa-fw"></i> Kirim Gan</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
