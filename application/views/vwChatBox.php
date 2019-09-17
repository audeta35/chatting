<input type="hidden" id="id_user" value="<?php echo $id_user; ?>" />
<input type="hidden" id="id_max" value="<?php echo isset($id_max) ? $id_max : '' ; ?>" />

<?php if($id_user > 0){ ?>
	<?php if($chat->num_rows() > 0){ ?>
		<?php foreach($chat->result() as $row){ ?>
			<?php if($row->user_1 == $this->session->userdata('id')){ ?>
				<div class="row">
					<div class="col-md-12">
						<div class="col-sm-6 col-md-6 col-6 col-xs-6">

						</div>
						<div class="col-sm-6 col-md-6 col-6 col-xs-6">
							<div class="panel panel-default panel-comment pull-right">
								<div class="panel-heading kiri rounded-right border-bottom" >
									<b>Anda :</b><small class="pull-right" style="color:grey;margin-top:0px;"><?php echo date("d-M-Y H:i:s", strtotime($row->created_at)); ?></small><br/>
									<?php echo $row->pesan; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }else{ ?>
				<div class="row">
					<div class="col-md-12">
						<div class="col-sm-6 col-md-6 col-6 col-xs-6">
							<div class="panel panel-default panel-comment pull-left" style="background-color: #0D47A1  !important;">
								<div class="panel-heading rounded-left border-bottom">
									<?php $user		= $this->model_user->getAll(array("id_user" => $id_user))->row_array(); ?>
									<b> <?php echo $user['nama']?> : </b><small class="pull-right" style="color:grey;margin-top:0px;"><?php echo date("d-M-Y H:i:s", strtotime($row->created_at)); ?></small></br>
									<?php echo $row->pesan; ?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-6 col-xs-6">

						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }else{ ?>

	<?php } ?>
<?php } else { echo "<h2>haluw; </h2>"; } ?>
