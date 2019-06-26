<?php 
include '../functions.php';

$db = mysqli_connect('localhost', 'root','','logistic');

$query = "SELECT verified_by FROM remarks WHERE po_number = '".$_POST['po_num']."'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

$query2 = "SELECT approved_by FROM remarks WHERE po_number = '".$_POST['po_num']."'";
$result2 = mysqli_query($db, $query2);
$row2 = mysqli_fetch_array($result2);



if($_SESSION['status'] == "Super Admin"){

	if($row[0] == null){
		echo json_encode("none");
	}
	else if($row[0] != null){

		if($row2[0] == null){
			echo json_encode("inline");
		}
		else if($row2[0] != null){
			echo json_encode("none");
		}
	}
}



else if($_SESSION['status'] == "Admin"){
	if($_SESSION['approve'] == "Yes"){
		if($row[0] == null){
			echo json_encode("inline");
		}
		else{
			echo json_encode("none");
		}
	}
	else{
		echo json_encode("none");
	}
}




?>
