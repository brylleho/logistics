<?php
$db = mysqli_connect('localhost', 'root','','logistic');

if(isset($_POST["po_num"])){

  $query = "UPDATE purchase_order SET status ='pending' WHERE po_number = '".$_POST["po_num"]."'";
  $result = mysqli_query($db, $query);
}
?>