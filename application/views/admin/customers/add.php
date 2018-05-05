<?php $this->load->view('admin/header');?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  
  <!-- Main Sidebar Container -->
  

    <?php $this->load->view('admin/sidebar');?>
  

  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Customer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Customer Name</label>
                    <input type="email" class="form-control" name="customer_name" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="password" class="form-control" name="phone_number" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="password" class="form-control" name="address" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="password" class="form-control" name="email" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Battery Serial number</label>
                    <input type="password" class="form-control" name="battery_serial_no" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Purchase Date</label>
                    <input type="password" class="form-control" name="purchase_date"  id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Installation Date</label>
                    <input type="password" class="form-control" name="installation_date"  id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Expiry Date</label>
                    <input type="password" class="form-control" name="expiry_date"  id="exampleInputPassword1" placeholder="Password">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Warranty</label>
                    <div class="col-md-7 form-group">
                    <select class="form-control" name="warranty" required="">
                          <option><-- Select Warranty Time --></option>
                          <option>2 Months</option>
                          <option>3 Months</option>
                          <option>6 Months</option>
                          <option>1 Year</option>
                    </select>     
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Technician Name</label>
                    <input type="password" class="form-control" name="technician_name"   id="exampleInputPassword1" placeholder="Password">
                  </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div><!-- /.card -->

            <!-- Form Element sizes -->
              </div> <!-- /.card-body -->
            </div><!-- /.card -->

          </div> <!--/.col (left) -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
 

<?php $this->load->view('admin/footer');?>

