<!-- jQuery 3 -->
<script src="<?= base_url('assets/adminlte') ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/adminlte') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/adminlte') ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/adminlte') ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte') ?>/dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
$(document).ready(function(){
	//getChat(0);
	$("#user").click(function(){
		$("#id_max").val('0');
	});

	setInterval(function(){
		if($("#id_user").val() > 0){
			getLastId($("#id_user").val(),$("#id_max").val());
			getChat($("#id_user").val(),$("#id_max").val());
			autoScroll();
		}else{

		}
	},3000);
});

function getChatAll(id_user,id_max){

	$.ajax({
		url		: "<?php echo site_url('index.php/welcome/getChatAll') ?>",
		type	: 'POST',
		dataType: 'html',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			$("#loading").show();
		},
		success	: function(result){
			$("#loading").hide();
			$("#chat-box").html(result);
			$(".panel-footer").show();

			autoScroll();
			document.getElementById('pesan').focus();
		}
	});
}

function getChat(id_user,id_max){

	$.ajax({
		url		: "<?php echo site_url('index.php/welcome/getChat') ?>",
		type	: 'POST',
		dataType: 'html',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			$("#loading").show();
		},
		success	: function(result){
			$("#loading").hide();
			if(id_user != $("#id_user").val() ){
				$("#chat-box").html(result);
			}else{
				$("#chat-box").append(result);
			}
			$(".panel-footer").show();
			document.getElementById('pesan').focus();
		}
	});
}

function getLastId(id_user,id_max){
	$.ajax({
		url		: "<?php echo site_url('index.php/welcome/getLastId') ?>",
		type	: 'POST',
		dataType: 'json',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){

		},
		success	: function(result){
			$("#id_max").val(result.id);
		}
	});
}

function sendMessage(){
	var pesan 	= $("#pesan").val();
	var id_user = $("#id_user").val();

	if(pesan == ''){
		document.getElementById('pesan').focus();
	}else{
		$.ajax({
			url		: "<?php echo site_url('index.php/welcome/sendMessage') ?>",
			type	: 'POST',
			dataType: 'json',
			data 	: {id_user:id_user,pesan:pesan},
			beforeSend	: function(){
			},
			success	: function(result){
				getChat($("#id_user").val(),$("#id_max").val());
				getLastId($("#id_user").val(),$("#id_max").val());
				$("#pesan").val('');
				autoScroll();
			}
		});
	}
}

function autoScroll(){
	var elem = document.getElementById('box');
	elem.scrollTop = elem.scrollHeight;
}

function aktifkan(i){
	$("li").removeClass("active");
	$("#aktif-"+i).addClass("active");
}
</script>
</body>
</html>
