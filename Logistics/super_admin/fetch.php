<?php
	$db = mysqli_connect('localhost', 'root','','logistic');
	if(isset($_POST["po_num"])){
          
          $query = "SELECT * FROM purchase_order WHERE purchase_order = '".$_POST["po_num"]."' JOIN remarks ON purchase_order.po_number = remarks.po_number JOIN purchase_details ON purchase_order.po_number = purchase_details.po_number";
          $result = mysqli_query($db, $query);
          $row = mysqli_fetch_array($result);

          echo json_encode($row);
      }
?>