<?php
$db = mysqli_connect('localhost', 'root','','logistic');

if(isset($_POST["po_num1a"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num1a"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_code'];
  endwhile;

  echo json_encode($data[0]);

}

if(isset($_POST["po_num2a"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num2a"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_description'];
  endwhile;

  echo json_encode($data[0]);
}

if(isset($_POST["po_num3a"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num3a"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['quantity'];
  endwhile;

  echo json_encode($data[0]);
}

if(isset($_POST["po_num4a"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num4a"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_cost'];
  endwhile;

  echo json_encode($data[0]);
}

if(isset($_POST["po_num5a"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num5a"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_measure'];
  endwhile;

  echo json_encode($data[0]);
}

if(isset($_POST["po_num6a"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num6a"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_retail'];
  endwhile;

  echo json_encode($data[0]);
}

if(isset($_POST["po_num1b"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num1b"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_code'];
  endwhile;

  echo json_encode($data[1]);
}

if(isset($_POST["po_num2b"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num2b"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_description'];
  endwhile;

  echo json_encode($data[1]);
}

if(isset($_POST["po_num3b"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num3b"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['quantity'];
  endwhile;

  echo json_encode($data[1]);
}

if(isset($_POST["po_num4b"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num4b"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_cost'];
  endwhile;

  echo json_encode($data[1]);
}

if(isset($_POST["po_num5b"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num5b"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_measure'];
  endwhile;

  echo json_encode($data[1]);
}

if(isset($_POST["po_num6b"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num6b"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_retail'];
  endwhile;

  echo json_encode($data[1]);
}

if(isset($_POST["po_num1c"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num1c"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_code'];
  endwhile;

  if(!is_null($data[2])){
    echo json_encode($data[2]);
  }
  
}

if(isset($_POST["po_num2c"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num2c"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_description'];
  endwhile;

  echo json_encode($data[2]);
}

if(isset($_POST["po_num3c"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num3c"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['quantity'];
  endwhile;

  echo json_encode($data[2]);
}

if(isset($_POST["po_num4c"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num4c"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_cost'];
  endwhile;

  echo json_encode($data[2]);
}

if(isset($_POST["po_num5c"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num5c"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_measure'];
  endwhile;

  echo json_encode($data[2]);
}

if(isset($_POST["po_num6c"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num6c"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_retail'];
  endwhile;

  echo json_encode($data[2]);
}

if(isset($_POST["po_num1d"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num1d"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_code'];
  endwhile;

  if(!is_null($data[3])){
    echo json_encode($data[3]);
  }

  
}

if(isset($_POST["po_num2d"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num2d"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_description'];
  endwhile;

  echo json_encode($data[3]);
}

if(isset($_POST["po_num3d"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num3d"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['quantity'];
  endwhile;

  echo json_encode($data[3]);
}

if(isset($_POST["po_num4d"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num4d"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_cost'];
  endwhile;

  echo json_encode($data[3]);
}

if(isset($_POST["po_num5d"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num5d"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_measure'];
  endwhile;

  echo json_encode($data[3]);
}

if(isset($_POST["po_num6d"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num6d"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_retail'];
  endwhile;

  echo json_encode($data[3]);
}

if(isset($_POST["po_num1e"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num1e"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_code'];
  endwhile;

  echo json_encode($data[4]);
}

if(isset($_POST["po_num2e"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num2e"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_description'];
  endwhile;

  echo json_encode($data[4]);
}

if(isset($_POST["po_num3e"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num3e"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['quantity'];
  endwhile;

  echo json_encode($data[4]);
}

if(isset($_POST["po_num4e"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num4e"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_cost'];
  endwhile;

  echo json_encode($data[4]);
}

if(isset($_POST["po_num5e"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num5e"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_measure'];
  endwhile;

  echo json_encode($data[4]);
}

if(isset($_POST["po_num6e"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num6e"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_retail'];
  endwhile;

  echo json_encode($data[4]);
}

if(isset($_POST["po_num1f"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num1f"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_code'];
  endwhile;

  echo json_encode($data[5]);
}

if(isset($_POST["po_num2f"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num2f"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_description'];
  endwhile;

  echo json_encode($data[5]);
}

if(isset($_POST["po_num3f"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num3f"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['quantity'];
  endwhile;

  echo json_encode($data[5]);
}

if(isset($_POST["po_num4f"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num4f"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_cost'];
  endwhile;

  echo json_encode($data[5]);
}

if(isset($_POST["po_num5f"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num5f"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_measure'];
  endwhile;

  echo json_encode($data[5]);
}

if(isset($_POST["po_num6f"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num6f"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_retail'];
  endwhile;

  echo json_encode($data[5]);
}

if(isset($_POST["po_num1g"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num1g"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_code'];
  endwhile;

  echo json_encode($data[6]);
}

if(isset($_POST["po_num2g"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num2g"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['item_description'];
  endwhile;

  echo json_encode($data[6]);
}

if(isset($_POST["po_num3g"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num3g"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['quantity'];
  endwhile;

  echo json_encode($data[6]);
}

if(isset($_POST["po_num4g"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num4g"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_cost'];
  endwhile;

  echo json_encode($data[6]);
}

if(isset($_POST["po_num5g"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num5g"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_measure'];
  endwhile;

  echo json_encode($data[6]);
}

if(isset($_POST["po_num6g"])){

  $query = "SELECT * FROM purchase_details WHERE po_number = '".$_POST["po_num6g"]."'";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_array($result)):;
    $data[] = $row['unit_retail'];
  endwhile;

  echo json_encode($data[6]);
}



?>