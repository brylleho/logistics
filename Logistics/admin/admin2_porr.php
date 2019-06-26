<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NULogistics | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="../login.php" class="logo">
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


          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">BannedGeeks</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  BannedGeeks
                  <!--<small>Member since Nov. 2012</small>-->
                </p>
              </li>
              <!-- Menu Body 
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
               
              </li>
              Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <p>Banned Geeks</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!----------------- 
        Sidebar Menu 
        ------------------->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>

        <!-- Optionally, you can add icons to the links -->
     
        <li class="treeview ">
          <a href="#"><i class="fa  fa-file-o"></i> <span>Form</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin2_po_list.php">Purchase Order List</a></li>
            <li><a href="admin2_po.php">Create Purchase Order</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Manage Suppliers</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin2_supplier_add.php">Add Suppliers</a></li>
            <li><a href="admin2_supplier_list.php">Supplier List</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa  fa-pie-chart"></i> <span>Reports</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin2_reports.php">Others</a></li>
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
        P.O. Receiving Report
        <small><a class="btn btn-block btn-social btn-google">
                <i class="fa fa-print"></i> Print Form
              </a>
        </small>
        <small><a class="btn btn-block btn-social btn-facebook">
                <i class="fa fa-search"></i>Search PO
              </a></small>

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | PO Receiving form |
        -------------------------->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <td colspan="1"><h2 class="box-title">P.O. Receiving Form</h2></td>
                  
                  <td colspan="1"><label for="exampleInputEmail1">Company</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Display Company Name" disabled=""></td>
                  <td><label for="exampleInputEmail1">PO Number</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Search PO Number here"></td>
                    <td>
                    <label for="exampleInputEmail1">Terms</label>
                    <input type="number" class="form-control input-sm" id="exampleInputEmail1" placeholder="00000000" disabled="">
                    </td>
                </tr>
                <tr>
                  <td> 
                    
                    <label for="exampleInputEmail1">Supplier</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    
                  </td>
                  <td >
                    <label for="exampleInputEmail1">Code</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    </td>
                  <td>
                    <label for="exampleInputEmail1">PO Date</label>
                    <input type="date" class="form-control input-sm" id="exampleInputEmail1" placeholder="00000000" disabled="">
                  </td>
                  <td>
                    <label for="exampleInputEmail1">Discount Types</label>
                      <div class="radio">
                        <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked disabled="">Percent(%)
                      </label>
                       <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked disabled="">Amount(P)
                      </label>
                      </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>
                   
                <label>Branch</label>
                <select class="form-control select2" style="width: 100%;" disabled="">
                  <option selected="selected">Alabama</option>
                  <option selected="">Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
             
                    </td>
                  <td>
                    <label for="exampleInputEmail1">Deliver To</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    </td>
                  <td>
                    <label for="exampleInputEmail1">Deliver Date</label>
                    <input type="Date" class="form-control input-sm" id="exampleInputEmail1" placeholder="" disabled="">
                    </td>
                  <td>
                    <label for="exampleInputEmail1">Discounts</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    </td>
                    
                </tr>
                <tr>
                  <td>
                    <label for="exampleInputEmail1">Department</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    </td>
                  <td>
                    <label for="exampleInputEmail1">Dept / subclass</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    </td>
                  <td>
                    <label for="exampleInputEmail1">Cancel Date</label>
                    <input type="date" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    </td>
                  <td>
                    <label for="exampleInputEmail1">Order Type</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                    </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <label for="exampleInputEmail1">Special Instruction</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter" disabled="">
                   </td>
                  <td>
                    <label for="exampleInputEmail1">Invoice No.</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter Invoice No. here" >
                    </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

  <!--------------------------
        | Purchase display|
        -------------------------->

       <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Purchase Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Stock Code</th>
                  <th>Stock Description</th>
                  <th>Qty</th>
                  <th>Unit Cost</th>
                  <th>Measure</th>
                  <th>Unit Retail</th>
                </tr>
                </thead>
                <tbody>
                <tr id="item1">
                  <td>Item 1</td>
                  <td>2---</td>
                  <td>3---</td>
                  <td>4---</td>
                  <td>5---</td>
                  <td>5---</td>
                </tr id="item2">
                <tr>
                  <td>Item 2</td>
                  <td>6---</td>
                  <td>5--</td>
                  <td>4---</td>
                  <td>3---</td>
                  <td>2---</td>
                </tr>
               
                <tr id="item3">
                  <td>3---</td>
                  <td>4---</td>
                  <td>5--</td>
                  <td>6---</td>
                  <td>7---</td>
                  <td>8---</td>
                </tr>
                <tr id="item4">
                  <td>9---</td>
                  <td>8---</td>
                  <td>7---</td>
                  <td>6---</td>
                  <td>5---</td>
                  <td>4---</td>
                </tr>
                <tr id="item5">
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr id="item6">
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr id="item7">
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th colspan="4"><label for="exampleInputEmail1">NOTE</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Enter"></th>
                  <th>TOTAL COST</th>
                  <th>P_________</th>
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

  <!--------------------------
        | Remarks |
        -------------------------->


       <!--   <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Remarks:</h3>
              <small>This will not be printed in P.O.R.R</small>
            </div>
            <!-- /.box-header 
            <div class="box-body" disabled>
              
                <!-- radio 
                <div class="form-group">
                  <label>Kind of keme   </label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      APEX
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      OPEX
                    </label>
                  </div>
                  
                </div>
            </div>
            <!-- /.box-body 
          </div> -->


  <!--------------------------
        | Signature|
        -------------------------->
      <table class="table table-hover">
                <tr>
                  <th>Released By:</th>
                  <th>Noted By:</th>
                  <th>Received By:</th>
                  
                </tr>

                <tr>
                  <th>__________</th>
                  <th>__________</th>
                  <th>__________</th>
                </tr>
                <tr>
                  <td>Property Custodian</td>
                  <td>Property Manage Supervisor</td>
                  <td></td>
                </tr>

              </table>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
         
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     ____________________
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">BannedGeeks</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>