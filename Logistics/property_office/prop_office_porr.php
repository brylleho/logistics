<?php include '../functions.php';
if (!isLoggedIn()) {
  
  
  header('location: ../index.php');

}?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NULogistics | ProOffice</title>
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
    <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
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
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../index.php?logout='1'" class="btn btn-default btn-flat">Sign out</a>
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
        
        <li class="treeview active">
          <a href="#"><i class="fa  fa-hand-lizard-o"></i> <span>Property Office Receiving</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="prop_office_porr.php">Receiving Report</a></li>
            <li><a href="prop_office_po_list.php">P.O. Approved List</a></li>
            
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
        
  
        <small><a class="btn btn-block btn-social btn-facebook" data-toggle="modal" data-target="#modal-porr">
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
                  <td colspan="1"><h2 class="box-title">P.O. Receiving Report</h2></td>
                  
                  <td colspan="1">
                  <td><label>PO Number</label>
                    <input type="text" class="form-control input-sm" name="po_number" id="po_number" placeholder="PO number" readonly></td>
                    <td>
                    <label>Terms</label>
                    <input type="text" class="form-control input-sm" id="terms" name="terms" readonly>
                    </td>
                </tr>
                <tr>
                  <td> 
                    
                    <label>Supplier</label>
                    <input type="text" class="form-control input-sm" id="supplier" placeholder="Enter" readonly>
                    
                  </td>
                  <td >
                    <label>Code</label>
                    <input type="text" class="form-control input-sm" id="po_code" placeholder="Enter" readonly>
                    </td>
                  <td>
                    <label>PO Date</label>
                    <input type="text" class="form-control input-sm" id="po_date" placeholder="00000000" readonly>
                  </td>
                  <td>
                          <label>Discount Type</label>
                          <input type="text" class="form-control input-sm" id="discount_type" readonly placeholder="Discount Type">
                  </td>
                  
                </tr>
                <tr>
                  <td>
                  <label>Branch</label>
                  <input type="text" class="form-control input-sm" id="branch" readonly>
                    </td>
                  <td>
                    <label>Deliver To</label>
                    <input type="text" class="form-control input-sm" id="deliver_to" placeholder="Enter" readonly>
                    </td>
                  <td>
                    <label>Deliver Date</label>
                    <input type="Date" class="form-control input-sm" id="deliver_date" placeholder="" readonly>
                    </td>
                  <td>
                    <label>Discounts</label>
                    <input type="text" class="form-control input-sm" id="discount" placeholder="Enter" readonly>
                    </td>
                    
                </tr>
                <tr>
                  <td>
                    <label>Department</label>
                    <input type="text" class="form-control input-sm" id="department" placeholder="Enter" readonly>
                    </td>
                  <td>
                    <label>Dept / subclass</label>
                    <input type="text" class="form-control input-sm" id="subclass" placeholder="Enter" readonly>
                    </td>
                  <td>
                    <label>Cancel Date</label>
                    <input type="date" class="form-control input-sm" id="cancel_date" placeholder="Enter" readonly>
                    </td>
                  <td>
                    <label>Order Type</label>
                    <input type="text" class="form-control input-sm" id="order_type" placeholder="Enter" readonly>
                    </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <label>Special Instruction</label>
                    <input type="text" class="form-control input-sm" id="special_instruction" placeholder="Enter" readonly>
                   </td>
                  <td>
                    <label>Invoice No.</label>
                    <input type="text" class="form-control input-sm" id="invoice_number" placeholder="Enter Invoice No. here" >
                    </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
                              <div class="modal fade" id="modal-porr">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Search P.O. Number</h4>
              </div>
              <div class="modal-body">
                <!---------------
                    Modal display items
                  --------------->
                  <select name="searchPoNumber" id="searchPoNumber" class="form-control select2" style="width: 100%;">
                            <?php 
                            $db = mysqli_connect('localhost', 'root', '', 'logistic');
                            $query = "SELECT po_number FROM purchase_order WHERE status = 'approved'";
                            $result = mysqli_query($db, $query);

                            while($row1 = mysqli_fetch_array($result)):;
                              ?>
                              <option value ="<?php echo $row1['po_number'];?>"><?php echo $row1['po_number'];?></option>
                              <?php endwhile;?>
         
                          </select>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary search_po">Search</button>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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
                  <th>Qty Received</th>
                  <th>Unit Cost</th>
                  <th>Measure</th>
                  <th>Unit Retail</th>
                </tr>
                </thead>
                <tbody>
                <tr id="item1">
                  <td><label id="item_code1"></td>
                  <td><label id="item_description1"></td>
                  <td><label id="quantity1"></td>
                  <td class="col-xs-1">
                    <input type="number" class="form-control input-sm" id="inputQty1" placeholder="Qty">
                  </td> 
                  <td><label id="unit_cost1"></td>
                  <td><label id="unit_measure1"></td>
                  <td><label id="unit_retail1"></td>
                </tr id="item2">
                <tr>
                  <td><label id="item_code2"></td>
                  <td><label id="item_description2"></td>
                  <td><label id="quantity2"></td>
                  <td class="col-xs-1">
                    <input type="number" class="form-control input-sm" id="inputQty1" placeholder="Qty">
                  </td>
                  <td><label id="unit_cost2"></td>
                  <td><label id="unit_measure2"></td>
                  <td><label id="unit_retail2"></td>
                </tr>
               
                <tr id="item3">
                  <td><label id="item_code3"></td>
                  <td><label id="item_description3"></td>
                  <td><label id="quantity3"></td>
                  <td class="col-xs-1">
                    <input type="number" class="form-control input-sm" id="inputQty1" placeholder="Qty">
                  </td>
                  <td><label id="unit_cost3"></td>
                  <td><label id="unit_measure3"></td>
                  <td><label id="unit_retail3"></td>
                </tr>
                <tr id="item4">
                  <td><label id="item_code4"></td>
                  <td><label id="item_description4"></td>
                  <td><label id="quantity4"></td>
                  <td class="col-xs-1">
                    <input type="number" class="form-control input-sm" id="inputQty1" placeholder="Qty">
                  </td>
                  <td><label id="unit_cost4"></td>
                  <td><label id="unit_measure4"></td>
                  <td><label id="unit_retail4"></td>
                </tr>
                <tr id="item5">
                  <td><label id="item_code5"></td>
                  <td><label id="item_description5"></td>
                  <td><label id="quantity5"></td>
                  <td class="col-xs-1">
                    <input type="number" class="form-control input-sm" id="inputQty1" placeholder="Qty">
                  </td>
                  <td><label id="unit_cost5"></td>
                  <td><label id="unit_measure5"></td>
                  <td><label id="unit_retail5"></td>
                </tr>
                <tr id="item6">
                  <td><label id="item_code6"></td>
                  <td><label id="item_description6"></td>
                  <td><label id="quantity6"></td>
                  <td class="col-xs-1">
                    <input type="number" class="form-control input-sm" id="inputQty1" placeholder="Qty">
                  </td>
                  <td><label id="unit_cost6"></td>
                  <td><label id="unit_measure6"></td>
                  <td><label id="unit_retail6"></td>
                </tr>
                <tr id="item7">
                  <td><label id="item_code7"></td>
                  <td><label id="item_description7"></td>
                  <td><label id="quantity7"></td>
                  <td class="col-xs-1">
                    <input type="number" class="form-control input-sm" id="inputQty1" placeholder="Qty">
                  </td>
                  <td><label id="unit_cost7"></td>
                  <td><label id="unit_measure7"></td>
                  <td><label id="unit_retail7"></td>
                </tr>
                
                
                </tbody>
                <tfoot>
                <tr>
                  <td colspan="4"><label>NOTE</label>
                    <input type="text" class="form-control input-sm" placeholder="Display PO note here" readonly></td>
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
                <tr >
                  <th ><small><a class="btn btn-block btn-social btn-facebook" >
                <i class="fa fa-file-excel-o"></i>Save to Exel File
              </a></small>
                  </th>
                  <th ><small><a class="btn btn-block btn-social btn-facebook .col-xs-2" >
                <i class="fa fa-print"></i>Print PORR
              </a></small></th>
                  <th colspan="3"></th>
                </tr>
                <tr>
                  <th >Released By:</th>
                  <th >Noted By:</th>
                  <th colspan="3">Received By:</th>
                  
                </tr>

                <tr>
                  <th >__________</th>
                  <th >__________</th>
                  <th colspan="3">__________</th>
                </tr>
                <tr>
                  <td >Property Custodian</td>
                  <td >Property Manage Supervisor</td>
                  <td ></td>
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
<script src="../JS/functionJS.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>