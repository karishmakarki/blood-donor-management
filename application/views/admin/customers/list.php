<?php $this->load->view('admin/header');?>

<body class="hold-transition sidebar-mini">
<div class="wrapper"> 

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
                <h3 class="card-title">List Customer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Customer Name</label>
                      <div class="col-md-3"> 
                       <?php echo $model->customer_name;?>
                      </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                      <div class="col-md-3">  
                        <?php echo $model->phone_number;?>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                      <div class="col-md-3">  
                        <?php echo $model->address;?>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                     <div class="col-md-3"> 
                       <?php echo $model->email;?>
                    </div>           
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Battery Serial number</label>
                      <div class="col-md-3">  
                        <?php echo $model->battery_serial_no;?>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Purchase Date</label>
                      <div class="col-md-3">  
                       <?php echo $model->purchase_date;?>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Installation Date</label>
                    <div class="col-md-3">  
    <?php echo $model->installation_date;?>
  </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Expiry Date</label>
        <div class="col-md-3">  
    <?php echo $model->expiry_date;?>
  </div>          </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Warranty</label>
        <div class="col-md-3">  
    <?php echo $model->warranty;?>
  </div>          </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Technician Name</label>
        <div class="col-md-3">  
    <?php echo $model->technician_name;?>
  </div>
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

