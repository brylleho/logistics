
<?php 
$db = mysqli_connect('localhost', 'root', '', 'logistic');
$query = "SELECT item_description_short FROM supplies WHERE sku_code = '".$_POST['value']."'";
$result = mysqli_query($db, $query);

while($row1 = mysqli_fetch_array($result)):;

	echo $row1['item_description_short'];
	?>

	<?php endwhile;?>