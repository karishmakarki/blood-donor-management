<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('bs/dist/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('bs/dist/js/bootstrap.min.js');?>">
</head>
<body>

<form method="post" action="<?php echo site_url('admin/login/verify');?>">

<div class="container">

	<div class="row">
		<div class="col-md-12 col-md-offset-3">

			<h2>Admin Login</h2>

			<div class="form-group" style="width: 600px; height: 100px;">			
				<div style="width:600px;" class="col-md-3" >
				
				<input style="width: 200px;" type="text" name="username" placeholder="Enter username">
				<input style="width: 200px;" type="password" name="password" placeholder="Enter Password">	
								
				&nbsp;&nbsp; <input style="width: 150px;" type="submit" value="Login" class="btn btn-info form-control">	
				
			</div>
			<div class="clearfix"></div>		

			<div class="form-group" style="text-align: right; margin-right: 18px;">
				<a href="<?php echo site_url('forget')?>">Forget Password</a>
			</div>	
	</div>						
</div>
</form>		
<br><br>
<br>		

<form method="post" action="">
<div class="container">
	
	<div class="row1">
		<div class="col-md-12 col-md-offset-3">

			<h2>Check your warranty details here</h2>

			<div class="form-group" style="width: 600px; height: 400px;">			
				<div style="width:500px;" class="col-md-3" >
				<select name="Search-content" style="width: 150px;">
					<option value="choose">choose here</option>
					<option value="name">Name</option>
					<option value="number">Number</option>
					<option value="email">Email</option>
					<option value="Battery_serial_no">Battery serial number</option>
				</select>				
				<input style="width: 200px;" type="button" value="Search" class="btn btn-info form-control">				
			</div>
			<div class="clearfix"></div>

		</div>		
	</div>		
</div>
</form>

</body>
</html>