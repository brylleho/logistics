<?php include '../functions.php';?>
<!--if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../login.php');
}?>-->
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NULogistics | User</title>
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
    <a href="user_create_po.php" class="logo">
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

        <li class="treeview active">
          <a href="#"><i class="fa  fa-file-o"></i> <span>Form</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user_create_po.php">Create Purchase Order</a></li>
            <li><a href="user_po_list.php">Purchase Order List</a></li>

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
        Create Purchase Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Purchase Order Form |
        -------------------------->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <td colspan="2"><h2 class="box-title">Purchase Order Form</h2></td>


                  <form method="post" action="user_create_po.php" enctype="multipart/form-data">
                    <?php echo display_error(); ?>

                  <td><label>PO Number</label>
                    <input type="text" name="po_number" class="form-control input-sm" value="<?php $from = new DateTimeZone('GMT');
$to = new DateTimeZone('Asia/Singapore');
$currDate = new DateTime('now', $from);
$currDate->setTimezone($to);
echo $currDate->format('Y-s');?>" readonly></td>
                    <td>
                    <label>Terms</label>
                    <input type="text" name="terms" class="form-control input-sm" placeholder="Payment Terms">
                    </td>
                </tr>

                <tr>
                  <td>

                    <label>Supplier</label>
                    <select name="supplier" class="form-control select2" style="width: 100%;">
                      <?php 
                        $db = mysqli_connect('localhost', 'root', '', 'logistic');
                        $query = "SELECT supplier_name FROM supplier";
                        $result = mysqli_query($db, $query);

                        while($row1 = mysqli_fetch_array($result)):;
                      ?>
                      <option><?php echo $row1[0];?></option>
                    <?php endwhile;?>
                    </select>

                  </td>
                  <td >
                    <label>Code</label>
                    <input type="text" name="code" class="form-control input-sm" placeholder="Enter">
                    </td>
                  <td>
                    <label>PO Date</label>
                    <input type="text" name="po_date" class="form-control input-sm" value="<?php $from = new DateTimeZone('GMT');
$to = new DateTimeZone('Asia/Singapore');
$currDate = new DateTime('now', $from);
$currDate->setTimezone($to);
echo $currDate->format('m/d/Y');?>" readonly></input>
                    </td>
                  <td>
                    <label>Discount Type</label>
                  <select name="discount_type" onclick="compute()" id="discount_type" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Percent</option>
                  <option>Amount</option>
                  </select>
                  </td>

                </tr>
                <tr>
                  <td>

                    <label>Branch</label>
                    <select name="branch" class="form-control select2" style="width: 100%;">
                      <option selected="selected">National-U Sampaloc</option>
                      <option>National-U Nazareth</option>
                      <option>National-U Laguna</option>
                      <option>National-U Sports Academy</option>
                      <option></option>
                    </select>

                    </td>
                  <td>
                    <label>Deliver To</label>
                    <input type="text" name="deliver_to" class="form-control input-sm" placeholder="Enter">
                    </td>
                  <td>
                    <label>Deliver Date</label>
                    <input type="date" name="delivery_date" class="form-control input-sm" placeholder="00%">
                    </td>
                  <td>
                    <label>Discounts</label>
                    <input type="number" id="discount" name="discount" onclick="compute()" onkeyup="compute()" class="form-control input-sm" placeholder="Enter">
                    </td>

                </tr>
                <tr>
                  <td>
                    <label>Department</label>
                    <input type="text" name="department" class="form-control input-sm" placeholder="Enter">
                    </td>
                  <td>
                    <label>Dept / subclass</label>
                    <input type="text" name="subclass" class="form-control input-sm" placeholder="Enter">
                    </td>
                  <td>
                    <label>Cancel Date</label>
                    <input type="date" name="cancel_date" class="form-control input-sm" placeholder="Enter">
                    </td>
                  <td>
                    <label>Order Type</label>
                    <input type="text" name="order_type" class="form-control input-sm" placeholder="Enter">
                    </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <label>Special Instruction</label>
                    <input type="text" name="special_instruction" class="form-control input-sm" placeholder="Enter">
                   </td>
                  <td>
                    <label>Invoice No.</label>
                    <input type="text" class="form-control input-sm" placeholder="Only For receiver" readonly>
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
        | Prchase Descriptions |
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
                  <th>Quantity</th>
                  <th>Unit Cost</th>
                  <th> Unit of Measure</th>
                  <th>Unit Retail</th>
                </tr>
                </thead>
                <tbody>
                <tr id="item1">
                  <td class="col-xs-1">
                    <input type="text" id="item_code1" name="item_code1" onkeyup="enabling()" class="form-control input-sm" placeholder="Code">
                  </td class="col-xs-">
                  <td>
                    <input type="text" id="item_description1" name="item_description1" class="form-control input-sm" placeholder="Stock Description" disabled>
                  </td>
                  <td class="col-xs-1">
                    <input type="number" id="quantity1" name="quantity1" onkeyup="compute()" class="form-control input-sm" placeholder="Qty" disabled>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_cost1" name="unit_cost1" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" disabled>
                  </td>
                  <td class="col-xs-2">
                    <select class="form-control select2" id="unit_measure1" name="unit_measure1" style="width: 100%;" e2"  disabled>
                  <option>Pcs</option>
                  <option>Lot</option>
                  <option>Unit</option>
                  <option>Box</option>
                </select>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_retail1" name="unit_retail1" class="form-control input-sm" readonly  placeholder="Total Amount">
                  </td>
                </tr>

                <tr id="item2">
                  <td class="col-xs-1">
                    <input type="text" id="item_code2" name="item_code2" onkeyup="enabling()" class="form-control input-sm" placeholder="Code">
                  </td class="col-xs-">
                  <td>
                    <input type="text" id="item_description2" name="item_description2" class="form-control input-sm" placeholder="Stock Description" disabled>
                  </td>
                  <td class="col-xs-1">
                    <input type="number" id="quantity2" name="quantity2" onkeyup="compute()" class="form-control input-sm" placeholder="Qty" disabled>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_cost2" name="unit_cost2" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" disabled>
                  </td>
                  <td class="col-xs-2">
                    <select class="form-control select2" id="unit_measure2" name="unit_measure2" style="width: 100%;" e2" disabled>
                  <option>Pcs</option>
                  <option>Lot</option>
                  <option>Unit</option>
                  <option>Box</option>
                </select>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_retail2" name="unit_retail2" class="form-control input-sm" placeholder="Total Amount" readonly>
                  </td>
                </tr>

                <tr id="item3">
                  <td class="col-xs-1">
                    <input type="text" id="item_code3" name="item_code3" onkeyup="enabling()" class="form-control input-sm" placeholder="Code">
                  </td class="col-xs-">
                  <td>
                    <input type="text" id="item_description3" name="item_description3" name="" class="form-control input-sm" placeholder="Stock Description" disabled>
                  </td>
                  <td class="col-xs-1">
                    <input type="number" id="quantity3" name="quantity3" onkeyup="compute()" class="form-control input-sm" placeholder="Qty" disabled>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_cost3" name="unit_cost3" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" disabled>
                  </td>
                  <td class="col-xs-2">
                    <select class="form-control select2" id="unit_measure3" name="unit_measure3" style="width: 100%;" e3" disabled>
                  <option>Pcs</option>
                  <option>Lot</option>
                  <option>Unit</option>
                  <option>Box</option>
                </select>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_retail3" name="unit_retail3" class="form-control input-sm" placeholder="Total Amount" readonly>
                  </td>
                </tr>
                <tr id="item4">
                  <td class="col-xs-1">
                    <input type="text" id="item_code4" name="item_code4" onkeyup="enabling()" class="form-control input-sm" placeholder="Code">
                  </td class="col-xs-">
                  <td>
                    <input type="text" id="item_description4" name="item_description4" class="form-control input-sm" placeholder="Stock Description" disabled>
                  </td>
                  <td class="col-xs-1">
                    <input type="number" id="quantity4" name="quantity4" onkeyup="compute()" class="form-control input-sm" placeholder="Qty" disabled>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_cost4" name="unit_cost4" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" disabled>
                  </td>
                  <td class="col-xs-2">
                    <select class="form-control select2" id="unit_measure4" name="unit_measure4" style="width: 100%;" e4" disabled>
                  <option>Pcs</option>
                  <option>Lot</option>
                  <option>Unit</option>
                  <option>Box</option>
                </select>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_retail4" name="unit_retail4" class="form-control input-sm" placeholder="Total Amount" readonly>
                  </td>
                </tr>
                <tr id="item5">
                  <td class="col-xs-1">
                    <input type="text" id="item_code5" name="item_code5" onkeyup="enabling()" class="form-control input-sm" placeholder="Code">
                  </td class="col-xs-">
                  <td>
                    <input type="text" id="item_description5" name="item_description5" class="form-control input-sm" placeholder="Stock Description" disabled>
                  </td>
                  <td class="col-xs-1">
                    <input type="number" id="quantity5" name="quantity5" onkeyup="compute()" class="form-control input-sm" placeholder="Qty" disabled>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_cost5" name="unit_cost5" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" disabled>
                  </td>
                  <td class="col-xs-2">
                    <select class="form-control select2" id="unit_measure5" name="unit_measure5" style="width: 100%;" e5" disabled>
                  <option>Pcs</option>
                  <option>Lot</option>
                  <option>Unit</option>
                  <option>Box</option>
                </select>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_retail5" name="unit_retail5" class="form-control input-sm" placeholder="Total Amount" readonly>
                  </td>
                </tr>
                <tr id="item6">
                  <td class="col-xs-1">
                    <input type="text" id="item_code6" name="item_code6" onkeyup="enabling()" class="form-control input-sm" placeholder="Code">
                  </td class="col-xs-">
                  <td>
                    <input type="text" id="item_description6" name="item_description6" class="form-control input-sm" placeholder="Stock Description" disabled>
                  </td>
                  <td class="col-xs-1">
                    <input type="number" id="quantity6" name="quantity6" onkeyup="compute()" class="form-control input-sm" placeholder="Qty" disabled>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_cost6" name="unit_cost6" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" disabled>
                  </td>
                  <td class="col-xs-2">
                    <select class="form-control select2" id="unit_measure6" name="unit_measure6" style="width: 100%;" e6" disabled>
                  <option>Pcs</option>
                  <option>Lot</option>
                  <option>Unit</option>
                  <option>Box</option>
                </select>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_retail6" name="unit_retail6" class="form-control input-sm" placeholder="Total Amount" readonly>
                  </td>
                </tr>
                <tr id="item7">
                  <td class="col-xs-1">
                    <input type="text" id="item_code7" name="item_code7" onkeyup="enabling()" class="form-control input-sm" placeholder="Code">
                  </td class="col-xs-">
                  <td>
                    <input type="text" id="item_description7" name="item_description7" class="form-control input-sm" placeholder="Stock Description" disabled>
                  </td>
                  <td class="col-xs-1">
                    <input type="number" id="quantity7" name="quantity7" onkeyup="compute()" class="form-control input-sm" placeholder="Qty" disabled>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_cost7" name="unit_cost7" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" disabled>
                  </td>
                  <td class="col-xs-2">
                    <select class="form-control select2" id="unit_measure7" name="unit_measure7" style="width: 100%;" e7" disabled>
                  <option>Pcs</option>
                  <option>Lot</option>
                  <option>Unit</option>
                  <option>Box</option>
                </select>
                  </td>
                  <td class="col-xs-2">
                    <input type="number" id="unit_retail7" name="unit_retail7" class="form-control input-sm" placeholder="Total Amount" readonly>
                  </td>
                </tr>


                </tbody>
                <tfoot>
                <tr>
                  <td colspan="4"><label><br><br><br><br><br><br>NOTE</label>
                    <input type="text" name="note" class="form-control input-sm" placeholder="Input purchase note"></td>
                  <th>SUBTOTAL COST :<br><br><br>
                  DISCOUNT TYPE:<br><br>
                  DISCOUNT COST:<br><br><br>
                TOTAL COST :<br><br></th>
                   <th><input type="number" id="subtotal_cost" name="subtotal_cost" class="form-control input-sm" readonly><br>
                   <input type="text" id="discount_total_type" name="discount_total_type" class="form-control input-sm" readonly><br>
                 <input type="number" id="discount_cost" name="discount_cost" class="form-control input-sm" readonly><br>
                 <input type="number" id="total_cost" name="total_cost" class="form-control input-sm" readonly></th><br>
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


        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Remarks</h3>
              <small>This will not be printed in P.O.R.R</small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <td>
                            <div class="form-group">
                              <label>Kind of supplies   </label>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="kind" value="APEX" checked>
                                  CAPEX
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="kind" value="OPEX">
                                  OPEX
                                </label>
                              </div>
                            </div>
                          </td>
                        <td>
                          <div class="form-group">
                            <label>File input</label>
                              <input type="file" name="image">
                          </div>
                        </td>
                      </tr>
                    </thead>
                  </table>
                </div>


            </div>

            <!-- /.box-body -->
          


  <!--------------------------
        | Signature|
        -------------------------->
      <table class="table table-hover">
                <tr>
                  <th>Ordered By:</th>
                  <th>Verified By:</th>
                  <th>Approved By:</th>
                 
                  <th>Reveived By:</th>
                </tr>

                <tr>
                  <th><?php echo $_SESSION['name'] ?></th>
                  <th>__________</th>
                  <th>__________</th>
                  
                  <th>__________</th>
                </tr>

              </table>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

<div class="col-md-12">
        <button type="submit" name="create_po_submit" class="btn btn-flat margin btn-primary">Save User</button></div>

    </section>
    

    </form>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">BannedGeeks</a>.</strong> All rights reserved.
  </footer>

 <div class="control-sidebar-bg"></div>


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script type="text/javascript">

  function compute(){
    var quantity = document.getElementById('quantity1').value;
    var unitCost = document.getElementById('unit_cost1').value;
    var unitRetail = unitCost * quantity;
    document.getElementById('unit_retail1').value =  unitRetail;

    var quantity2 = document.getElementById('quantity2').value;
    var unitCost2 = document.getElementById('unit_cost2').value;
    var unitRetail2 = unitCost2 * quantity2;
    document.getElementById('unit_retail2').value =  unitRetail2;

    var quantity3 = document.getElementById('quantity3').value;
    var unitCost3 = document.getElementById('unit_cost3').value;
    var unitRetail3 = unitCost3 * quantity3;
    document.getElementById('unit_retail3').value =  unitRetail3;

    var quantity4 = document.getElementById('quantity4').value;
    var unitCost4 = document.getElementById('unit_cost4').value;
    var unitRetail4 = unitCost4 * quantity4;
    document.getElementById('unit_retail4').value =  unitRetail4;

    var quantity5 = document.getElementById('quantity5').value;
    var unitCost5 = document.getElementById('unit_cost5').value;
    var unitRetail5 = unitCost5 * quantity5;
    document.getElementById('unit_retail5').value =  unitRetail5;

    var quantity6 = document.getElementById('quantity6').value;
    var unitCost6 = document.getElementById('unit_cost6').value;
    var unitRetail6 = unitCost6 * quantity6;
    document.getElementById('unit_retail6').value =  unitRetail6;

    var quantity7 = document.getElementById('quantity7').value;
    var unitCost7 = document.getElementById('unit_cost7').value;
    var unitRetail7 = unitCost7 * quantity7;
    document.getElementById('unit_retail7').value =  unitRetail7;

    var subtotalCost = unitRetail + unitRetail2 + unitRetail3 + unitRetail4 + unitRetail5 + unitRetail6 + unitRetail7;

    document.getElementById('subtotal_cost').value = subtotalCost;
    document.getElementById('discount_total_type').value = document.getElementById('discount_type').value;

    if(document.getElementById('discount_type').value == "Amount"){
       var discountCost = document.getElementById('discount').value;

       var totalCost = subtotalCost - discountCost;
       document.getElementById('discount_cost').value = discountCost;
       document.getElementById('total_cost').value = totalCost;

    }
    if(document.getElementById('discount_type').value == "Percent"){
        var discountCost = document.getElementById('discount').value / 100;
        var discountSub = subtotalCost * discountCost;
        var totalCost = subtotalCost - discountSub;
        document.getElementById('discount_cost').value = discountCost;
        document.getElementById('total_cost').value = totalCost;
    }

  }

  function enabling(){

     if(document.getElementById('item_code2').value != null){
      document.getElementById('item_description2').disabled = false;
      document.getElementById('quantity2').disabled = false;
      document.getElementById('unit_cost2').disabled = false;
      document.getElementById('unit_measure2').disabled = false;
     }
     if(document.getElementById('item_code2').value == null || document.getElementById('item_code2').value == 0){
      document.getElementById('item_description2').disabled = true;
      document.getElementById('quantity2').disabled = true;
      document.getElementById('unit_cost2').disabled = true;
      document.getElementById('unit_measure2').disabled = true;
     }

     if(document.getElementById('item_code3').value != null){
      document.getElementById('item_description3').disabled = false;
      document.getElementById('quantity3').disabled = false;
      document.getElementById('unit_cost3').disabled = false;
      document.getElementById('unit_measure3').disabled = false;
     }
     if(document.getElementById('item_code3').value == null || document.getElementById('item_code3').value == 0){
      document.getElementById('item_description3').disabled = true;
      document.getElementById('quantity3').disabled = true;
      document.getElementById('unit_cost3').disabled = true;
      document.getElementById('unit_measure3').disabled = true;
     }

     if(document.getElementById('item_code4').value != null){
      document.getElementById('item_description4').disabled = false;
      document.getElementById('quantity4').disabled = false;
      document.getElementById('unit_cost4').disabled = false;
      document.getElementById('unit_measure4').disabled = false;
     }
     if(document.getElementById('item_code4').value == null || document.getElementById('item_code4').value == 0){
      document.getElementById('item_description4').disabled = true;
      document.getElementById('quantity4').disabled = true;
      document.getElementById('unit_cost4').disabled = true;
      document.getElementById('unit_measure4').disabled = true;
     }

     if(document.getElementById('item_code5').value != null){
      document.getElementById('item_description5').disabled = false;
      document.getElementById('quantity5').disabled = false;
      document.getElementById('unit_cost5').disabled = false;
      document.getElementById('unit_measure5').disabled = false;
     }
     if(document.getElementById('item_code5').value == null || document.getElementById('item_code5').value == 0){
      document.getElementById('item_description5').disabled = true;
      document.getElementById('quantity5').disabled = true;
      document.getElementById('unit_cost5').disabled = true;
      document.getElementById('unit_measure5').disabled = true;
     }

     if(document.getElementById('item_code6').value != null){
      document.getElementById('item_description6').disabled = false;
      document.getElementById('quantity6').disabled = false;
      document.getElementById('unit_cost6').disabled = false;
      document.getElementById('unit_measure6').disabled = false;
     }
     if(document.getElementById('item_code6').value == null || document.getElementById('item_code6').value == 0){
      document.getElementById('item_description6').disabled = true;
      document.getElementById('quantity6').disabled = true;
      document.getElementById('unit_cost6').disabled = true;
      document.getElementById('unit_measure6').disabled = true;
     }

     if(document.getElementById('item_code7').value != null){
      document.getElementById('item_description7').disabled = false;
      document.getElementById('quantity7').disabled = false;
      document.getElementById('unit_cost7').disabled = false;
      document.getElementById('unit_measure7').disabled = false;
     }
     if(document.getElementById('item_code7').value == null || document.getElementById('item_code7').value == 0){
      document.getElementById('item_description7').disabled = true;
      document.getElementById('quantity7').disabled = true;
      document.getElementById('unit_cost7').disabled = true;
      document.getElementById('unit_measure7').disabled = true;
     }

     if(document.getElementById('item_code1').value != null){
      document.getElementById('item_description1').disabled = false;
      document.getElementById('quantity1').disabled = false;
      document.getElementById('unit_cost1').disabled = false;
      document.getElementById('unit_measure1').disabled = false;
     }
     if(document.getElementById('item_code1').value == null || document.getElementById('item_code1').value == 0){
      document.getElementById('item_description1').disabled = true;
      document.getElementById('quantity1').disabled = true;
      document.getElementById('unit_cost1').disabled = true;
      document.getElementById('unit_measure1').disabled = true;
     }
   }

</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>