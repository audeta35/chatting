<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih User</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <?php foreach ($person as $user): ?>
            <div class="col-md-4">
              <a href="<?= base_url("add-chat/{$user->id}/{$user->username}") ?>">
                <img src="<?= base_url('assets/adminlte') ?>/dist/img/user2-160x160.jpg" width="50" class="img-circle" alt="User Image">
                <b class="text-center text-black"><?= $user->username ?></b>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-purple" data-dismiss="modal"><i class="fa fa-times"></i></button>
      </div>
    </div>
  </div>
</div>
