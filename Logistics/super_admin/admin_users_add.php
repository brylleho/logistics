<?php include '../functions.php'?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NULogistics | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
   <a href="admin_po.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>NU</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NU</b>Logistics</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">




           <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['first_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['first_name']; ?>
                  <!--<small>Member since Nov. 2012</small>-->
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-right">
                  <a href="../index.php?logout='1'"  class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
       <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['first_name']; ?></p>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>

        <!-- Optionally, you can add icons to the links -->

        <li class="treeview">
          <a href="#"><i class="fa  fa-file-o"></i> <span>Form</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_po_list.php">Purchase Order List</a></li>
            <li><a href="admin_po.php">Create Purchase Order</a></li>

          </ul>
        </li>
        <li class="treeview active">
          <a href="#"><i class="fa fa-user-plus"></i> <span>Manage Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_users_add.php">Add Users</a></li>
            <li><a href="admin_users_list.php">Users List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Manage Suppliers</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_supplier_add.php">Add Suppliers</a></li>
            <li><a href="admin_supplies_add.php">Add Supplies</a></li>
            <li><a href="admin_supplier_list.php">Supplier List</a></li>
          </ul>
        </li>

        <li class="treeview ">
          <a href="#"><i class="fa  fa-pie-chart"></i> <span>Reports</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_reports.php">Others</a></li>

          </ul>
        </li>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create New User
        <small>fill-up form with new user informations</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

  <!--------------------------
        | List of Suppliers |
        -------------------------->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header ">
              <h3 class="box-title">New User Form</h3>

              <div class="box-tools">

              </div>
            </div>


            <!-- /.box-header -->
            <form method="post" action="admin_users_add.php">
              <?php echo display_error(); ?>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <td>
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control input-sm" placeholder="Enter last name">
                  </td>
                  <td>
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control input-sm" placeholder="Enter first name">
                  </td>
                  <td>
                    <label>Middle Name</label>
                    <input type="text" name="middle_name" class="form-control input-sm" placeholder="Enter Middle Name">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label>Address</label>
                    <input type="text" name="address" class="form-control input-sm" placeholder="Enter Address">
                  </td>
                  <td>
                    <label>Able to approve PO</label>
                      <select name="approve" class="form-control select2 input-sm" style="width: 100%;">
                        <option selected="selected">Yes</option>
                        <option>No</option>
                      </select>
                  </td>
                  <td>
                    <label>Postal Code</label>
                    <input type="number" name="postal_code" class="form-control input-sm" placeholder="Enter Postal Code">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label>Mobile Number</label>
                    <input type="number" name="mobile_number" class="form-control input-sm" placeholder="Enter Mobile Number">
                  </td>
                  <td>
                    <label>Tel. Number</label>
                    <input type="number" name="telephone_number" class="form-control input-sm" placeholder="Enter Telephone Number">
                  </td>
                  <td>
                    <label>Account Type</label>
                      <select name="status" class="form-control select2 input-sm" style="width: 100%;">
                        <option selected="selected">User</option>
                        <option>Property Office User</option>
                        <option>Admin</option>

                      </select>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label>Username</label>
                    <input type="text" class="form-control input-sm" name="email" value="<?php echo $email; ?>" placeholder="Enter Username">
                  </td>
                  <td>
                    <label>Password</label>
                    <input type="Password" name="password_1" class="form-control input-sm" placeholder="Enter Password">
                  </td>
                  <td>
                    <label>Repeat Password</label>
                    <input type="password" name="password_2" class="form-control input-sm" placeholder="Repeat Password">
                  </td>
                </tr>
                <footer>
                  <tr>
                    <th></th>
                    <th>
                      <div class="col-md-12">
                      <button type="submit" name="save_btn" class="btn btn-block btn-primary">Save User</button></div>
                    </th>
                  </tr>
                </footer>
                </form>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     ____________________
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">BannedGeeks</a>.</strong> All rights reserved.
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
