

<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('bs/dist/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('bs/dist/js/bootstrap.min.js');?>">

</head>
<body>
	<form name="forgetp" method="post" action="" align="center">
		<div class="form-group">
			<div class="row">
			<br><br><br>	
			<label class="col-md-2">Enter your username</label>
			<div class="col-md-4">
			<input type="text" name="" placeholder="username" class="form-control">		
			</div>
		</div>
		<div class="clearfix"></div>

		<br>
		<div class="form-group">
			<div class="col-md-offset-1">
				<a href="<?php echo site_url('forget/reset');?>" class="btn btn-primary">Generate New Password</a>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	
	</form>

</body>
</html>
<?php
$this->load->view('admin/footer');
?>