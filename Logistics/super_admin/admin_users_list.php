<?php include '../functions.php';
if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../index.php');
}?>
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

    <!-- Main Header -->
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
                    <a href="../login.php?logout='1'"  class="btn btn-default btn-flat">Sign out</a>
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

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION['first_name']; ?></p>
          </div>
        </div>


        <!-- Sidebar Menu -->
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
          <li class="treeview ">
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
            Users / Employee List
            <small>user information of the employees</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

  <!--------------------------
        | List of Users |
        -------------------------->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List of Users</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>SURNAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>MOBILE NUMBER</th>
                        <th>TELEPHONE</th>
                        <th>TYPE</th>
                        <th>EMAIL</th>
                        <th>RESET PASSWORD</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Macabuag</td>
                        <td>John Sebastian</td>
                        <td>Ugali</td>
                        <td>zapota LPC</td>
                        <td>09634567896</td>
                        <td>0698745</td>
                        <td>Super Admin</td>
                        <td>Johnsebmac@gmail.com</td>
                        <td>Reset</td>
                      </tr>
                      
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>SURNAME</th>
                        <th>FIRST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>ADDRESS</th>
                        <th>MOBILE NUMBER</th>
                        <th>TELEPHONE</th>
                        <th>TYPE</th>
                        <th>EMAIL</th>
                        <th>RESET PASSWORD</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

  <!--------------------------
        | Item Descriptions |
        -------------------------->

  <!--------------------------
        | Item Descriptions |
        -------------------------->
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
