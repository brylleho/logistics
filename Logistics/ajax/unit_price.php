
<?php 
$db = mysqli_connect('localhost', 'root', '', 'logistic');
$query = "SELECT * FROM supplies WHERE sku_code = '".$_POST['value2']."'";
$result = mysqli_query($db, $query);

while($row1 = mysqli_fetch_array($result)):;

	echo $row1['unit_price'];
	?>

	<?php endwhile;?>