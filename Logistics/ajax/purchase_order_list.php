<?php
$db = mysqli_connect('localhost', 'root','','logistic');

if(isset($_POST["po_num"])){

  $query = "SELECT * FROM purchase_order WHERE po_number = '".$_POST["po_num"]."'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);


  echo json_encode($row);
}

if(isset($_POST["po_num2"])){

  $query = "SELECT * FROM purchase_cost WHERE po_number = '".$_POST["po_num2"]."'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);


  echo json_encode($row);
}

if(isset($_POST["po_num3"])){

  $query = "SELECT * FROM remarks WHERE po_number = '".$_POST["po_num3"]."'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);

  echo json_encode($row);
}

?>