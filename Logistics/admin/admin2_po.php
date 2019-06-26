<?php include '../functions.php';
if (!isLoggedIn()) {
  
  
  header('location: ../index.php');

}?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NULogistics | <?php echo $_SESSION['status'];?></title>
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


                    <form method="post" action="admin_po.php" enctype="multipart/form-data">
                      <?php echo display_error(); ?>

                      <td><label>PO Number</label>

                        <?php
                        $from = new DateTimeZone('GMT');
                        $to = new DateTimeZone('Asia/Singapore');
                        $currDate = new DateTime('now', $from);
                        $currDate->setTimezone($to);
                        $db = mysqli_connect('localhost', 'root', '', 'logistic');
                        $query = "SELECT COUNT(po_number) FROM purchase_order";
                        $result = mysqli_query($db, $query);
                        $row = mysqli_fetch_array($result);
                        $data = $currDate->format('Y') . "-" . ($row[0] + 1);
                        ?>
                        <input type="text" name="po_number" class="form-control input-sm" value="<?php 
                        echo $data;?>" readonly></td>
                        <td>
                          <label>Terms</label>
                          <input type="text" name="terms" class="form-control input-sm" placeholder="Payment Terms">
                        </td>
                      </tr>

                      <tr>
                        <td>

                          <label>Supplier</label>
                          <select name="supplier" id="supplier" class="form-control select2" style="width: 100%;">
                            <option></option>
                            <?php 
                            $db = mysqli_connect('localhost', 'root', '', 'logistic');
                            $query = "SELECT supplier_name FROM supplier";
                            $result = mysqli_query($db, $query);

                            while($row1 = mysqli_fetch_array($result)):;
                              ?>
                              <option value ="<?php echo $row1['supplier_name'];?>"><?php echo $row1['supplier_name'];?></option>
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
                          <input type="number" id="discount" name="discount" onclick="compute(); verify()" onkeyup="compute(); verify()" class="form-control input-sm" placeholder="Enter">
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
                        <select id="item_code1" name="item_code1" onclick="enabling(); compute()" class="form-control select2" placeholder="Code">
                        </select>
                      </td class="col-xs-">
                      <td>
                        <input type="text" id="item_description1" name="item_description1" class="form-control input-sm" placeholder="Stock Description" readonly>

                      </input>
                    </td>
                    <td class="col-xs-1">
                      <input type="number" id="quantity1" name="quantity1" onclick="verify(); compute()" onkeyup="verify(); compute()" class="form-control input-sm" placeholder="Qty" readonly>
                    </td>
                    <td class="col-xs-2">
                      <input type="number" id="unit_cost1" onkeyup="compute()" name="unit_cost1" class="form-control input-sm" placeholder="P 00.00" readonly>
                    </td>
                    <td class="col-xs-2">
                      <select class="form-control select2" id="unit_measure1" name="unit_measure1" style="width: 100%;" e2"  readonly>
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
                      <select id="item_code2" name="item_code2" onclick="enabling(); verify()" class="form-control select2" placeholder="Code">
                      </td class="col-xs-">
                      <td>
                        <input type="text" id="item_description2" name="item_description2" class="form-control input-sm" placeholder="Stock Description" readonly>
                      </td>
                      <td class="col-xs-1">
                        <input type="number" id="quantity2" name="quantity2" onclick="verify(); compute()" onkeyup="verify(); compute()" class="form-control input-sm" placeholder="Qty" readonly>
                      </td>
                      <td class="col-xs-2">
                        <input type="number" id="unit_cost2" name="unit_cost2" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" readonly>
                      </td>
                      <td class="col-xs-2">
                        <select class="form-control select2" id="unit_measure2" name="unit_measure2" style="width: 100%;" e2" readonly>
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
                        <select id="item_code3" name="item_code3" onclick="enabling()" class="form-control select2" placeholder="Code">
                        </td class="col-xs-">
                        <td>
                          <input type="text" id="item_description3" name="item_description3" class="form-control input-sm" placeholder="Stock Description" readonly>
                        </td>
                        <td class="col-xs-1">
                          <input type="number" id="quantity3" name="quantity3" onclick="verify(); compute()" onkeyup="verify(); compute()" class="form-control input-sm" placeholder="Qty" readonly>
                        </td>
                        <td class="col-xs-2">
                          <input type="number" id="unit_cost3" name="unit_cost3" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" readonly>
                        </td>
                        <td class="col-xs-2">
                          <select class="form-control select2" id="unit_measure3" name="unit_measure3" style="width: 100%;" e3" readonly>
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
                          <select id="item_code4" name="item_code4" onclick="enabling()" class="form-control select2" placeholder="Code">
                          </td class="col-xs-">
                          <td>
                            <input type="text" id="item_description4" name="item_description4" class="form-control input-sm" placeholder="Stock Description" readonly>
                          </td>
                          <td class="col-xs-1">
                            <input type="number" id="quantity4" name="quantity4" onclick="verify(); compute()" onkeyup="verify(); compute()" class="form-control input-sm" placeholder="Qty" readonly>
                          </td>
                          <td class="col-xs-2">
                            <input type="number" id="unit_cost4" name="unit_cost4" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" readonly>
                          </td>
                          <td class="col-xs-2">
                            <select class="form-control select2" id="unit_measure4" name="unit_measure4" style="width: 100%;" e4" readonly>
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
                            <select id="item_code5" name="item_code5" onclick="enabling()" class="form-control select2" placeholder="Code">
                            </td class="col-xs-">
                            <td>
                              <input type="text" id="item_description5" name="item_description5" class="form-control input-sm" placeholder="Stock Description" readonly>
                            </td>
                            <td class="col-xs-1">
                              <input type="number" id="quantity5" name="quantity5" onclick="verify(); compute()" onkeyup="verify(); compute()" class="form-control input-sm" placeholder="Qty" readonly>
                            </td>
                            <td class="col-xs-2">
                              <input type="number" id="unit_cost5" name="unit_cost5" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" readonly>
                            </td>
                            <td class="col-xs-2">
                              <select class="form-control select2" id="unit_measure5" name="unit_measure5" style="width: 100%;" e5" readonly>
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
                              <select id="item_code6" name="item_code6" onclick="enabling()" class="form-control select2" placeholder="Code">
                              </td class="col-xs-">
                              <td>
                                <input type="text" id="item_description6" name="item_description6" class="form-control input-sm" placeholder="Stock Description" readonly>
                              </td>
                              <td class="col-xs-1">
                                <input type="number" id="quantity6" name="quantity6" onclick="verify(); compute()" onkeyup="verify(); compute()" class="form-control input-sm" placeholder="Qty" readonly>
                              </td>
                              <td class="col-xs-2">
                                <input type="number" id="unit_cost6" name="unit_cost6" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" readonly>
                              </td>
                              <td class="col-xs-2">
                                <select class="form-control select2" id="unit_measure6" name="unit_measure6" style="width: 100%;" e6" readonly>
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
                                <select id="item_code7" name="item_code7" onclick="enabling()" class="form-control select2" placeholder="Code">
                                </td class="col-xs-">
                                <td>
                                  <input type="text" id="item_description7" name="item_description7" class="form-control input-sm" placeholder="Stock Description" readonly>
                                </td>
                                <td class="col-xs-1">
                                  <input type="number" id="quantity7" name="quantity7" onclick="verify(); compute()" onkeyup="verify(); compute()" class="form-control input-sm" placeholder="Qty" readonly>
                                </td>
                                <td class="col-xs-2">
                                  <input type="number" id="unit_cost7" name="unit_cost7" onkeyup="compute()" class="form-control input-sm" placeholder="P 00.00" readonly>
                                </td>
                                <td class="col-xs-2">
                                  <select class="form-control select2" id="unit_measure7" name="unit_measure7" style="width: 100%;" e7" readonly>
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
                          <input type="radio" name="kind" value="CAPEX" checked>
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
          <button type="submit" name="create_po_submit" class="btn btn-flat margin btn-primary">Submit PO</button>
        </div>

      </section>


    </form>

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

 <div class="control-sidebar-bg"></div>


 <!-- REQUIRED JS SCRIPTS -->

 <!-- jQuery 3 -->
 <script src="../bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../dist/js/adminlte.min.js"></script>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 <script src="../JS/functionJS.js"></script>



</body>
</html>