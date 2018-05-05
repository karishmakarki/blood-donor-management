<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('index3.html');?>" class="brand-link">
      <img src="<?php echo site_url('dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo site_url('dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('admin');?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
             <a href="" class="nav-link">
             <i class="nav-icon fa fa-edit"></i>
              <p>
                Customer Management
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/customers/list');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/customers/add');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Customer</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item has-treeview">
             <a href="<?php echo site_url('pages/widgets.html');?>" class="nav-link">
             <i class="nav-icon fa fa-edit"></i>
              <p>
                Battery Management
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/customers/index');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Battery </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/customers/index');?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List Battery </p>
                </a>
              </li>
              </ul>
          </li>

          
          <li class="nav-item">
            <a href="<?php echo site_url('pages/calendar.html');?>" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
         
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Settings</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/dashboard/logout');?>" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Log Out</p>
            </a>
          </li>
           </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>