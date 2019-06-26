<?php 
if(isset($_POST["po_num4"])){
	$db = mysqli_connect('localhost', 'root', '', 'logistic');
	$query = "SELECT * FROM remarks WHERE po_number = '".$_POST["po_num4"]."'";
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_array($result);

	echo json_encode($row);

}
?>
