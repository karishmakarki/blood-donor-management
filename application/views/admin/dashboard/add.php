<?php $this->load->view('admin/header');?>

<h2>Add Customer</h2>
<hr>
<div class="container">
	<div class="row">
		<form method="post" action="<?php echo site_url('admin/batteries/save');?>">

			<div class="col-md-3">
				<label>Customer Name</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="customer_name" required="" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Phone Number</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="phone_number" required="" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Address</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="address" required="" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Email</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="email" name="email" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Battery Serial number</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="battery_serial_no" required="" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Purchase Date</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="purchase_date" required="" id="datepicker" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Installation Date</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="installation_date" required="" id="datepicker1" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Expiry Date</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="expiry_date" required="" id="datepicker2" class="form-control">
			</div>


			<div class="col-md-3">
				<label>Warranty</label>
			</div>
			<div class="col-md-7 form-group">
				<select class="form-control" name="warranty" required="">
					<option><-- Select Warranty Time --></option>
					<option>2 Months</option>
					<option>3 Months</option>
					<option>6 Months</option>
					<option>1 Year</option>
				</select>
			
			</div>

			<div class="col-md-3">
				<label>Technician Name</label>
			</div>
			<div class="col-md-7 form-group">
			<input type="text" name="technician_name" required="" class="form-control">
			</div>


			<div class="col-md-3">
				<input type="submit" value="SAVE" class="btn btn-primary">
			</div>
			
	
		</form>
	</div>
</div>


<?php $this->load->view('admin/footer');?>

