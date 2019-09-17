<!DOCTYPE html>
<html lang="en">
<head>
	<title>Membuat Chatting FB</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>
<style>
body {
    background-color: white;
}

#loginbox {
    margin-top: 30px;
}

#loginbox > div:first-child {        
    padding-bottom: 10px;    
}

.iconmelon {
    display: block;
    margin: auto;
}

#form > div {
    margin-bottom: 25px;
}

#form > div:last-child {
    margin-top: 10px;
    margin-bottom: 10px;
}

.panel {    
    background-color: transparent;
}

.panel-body {
    padding-top: 30px;
    background-color: rgba(2555,255,255,.3);
}

#particles {
    width: 100%;
    height: 100%;
    overflow: hidden;
    top: 0;                        
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    z-index: -2;
}

.iconmelon,
.im {
  position: relative;
  width: 150px;
  height: 150px;
  display: block;
  fill: #525151;
}

.iconmelon:after,
.im:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<body style="font-family: 'Ubuntu', sans-serif;">

<div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<br/>
		<div class="panel panel-default " >
			<div class="panel-heading">
				<div class="panel-title text-center">Simpple Chatt</div>
			</div>     

			<div class="panel-body" >

				<form name="form" id="form" class="form-horizontal" action="<?php echo site_url("index.php/welcome/masuk")?>" enctype="multipart/form-data" method="POST">
				   
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<select id="id_user" class="form-control" name="id_user" required >
							<option value="">-- Pilih User --</option>
							<?php foreach($user->result() as $row){ ?>
								<option value="<?php echo $row->id_user; ?>"><?php echo $row->nama; ?></option>
							<?php } ?>
						</select>
					</div>                                                                

					<div class="form-group">
						<div class="col-sm-12 controls">
							<button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Masuk</button>                          
						</div>
					</div>

				</form>     

			</div>                     
		</div>  
	</div>
	<div class="col-md-4">
	  
	</div>  
</div>  

</body>
</html>