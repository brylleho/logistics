<?php
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'logistic');

// variable declaration
$email = "";
$errors = array();

if (isset($_POST['save_btn'])) {
	register();
}
if (isset($_POST['login_btn'])) {
	login();
}
if (isset($_POST['delete_po'])) {
	deletePO();
}
if (isset($_POST['edit_po'])) {
	editPO();
}
if (isset($_POST['approve_po'])) {
	approvePO();
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
}
if (isset($_POST['create_po_submit'])) {
	createPO();
}
if (isset($_POST['supplier_add_submit'])) {
	addSupplier();
}
if (isset($_POST['supplies_add_submit'])){
	addSupplies();
}

function register() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $email;

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
	$first_name = e($_POST['first_name']);
	$middle_name = e($_POST['middle_name']);
	$last_name = e($_POST['last_name']);
	$address = e($_POST['address']);
	$postal_code = e($_POST['postal_code']);
	$mobile_number = e($_POST['mobile_number']);
	$telephone_number = e($_POST['telephone_number']);
	$status = e($_POST['status']);
	$email = e($_POST['email']);
	$password_1 = e($_POST['password_1']);
	$password_2 = e($_POST['password_2']);
	$approve = e($_POST['approve']);

	// form validation: ensure that the form is correctly filled
	if (empty($first_name)) {
		array_push($errors, "First name is required");
	}
	if (empty($middle_name)) {
		array_push($errors, "Middle name is required");
	}
	if (empty($last_name)) {
		array_push($errors, "Last name is required");
	}
	if (empty($address)) {
		array_push($errors, "Address is required");
	}
	if (empty($postal_code)) {
		array_push($errors, "Postal Code is required");
	}
	/*if (empty($mobile_number)) {
			array_push($errors, "Mobile number is required");
		}
		if (empty($telephone_number)) {
			array_push($errors, "Telepone number is required");
	*/
			if (empty($email)) {
				array_push($errors, "Email is required");
			}
			if (empty($password_1)) {
				array_push($errors, "Password is required");
			}
			if ($password_1 != $password_2) {
				array_push($errors, "The two passwords do not match");
			}

	// register user if there are no errors in the form
			if (count($errors) == 0) {
		$password = md5($password_1); //encrypt the password before saving in the database

		$query = "INSERT INTO user_info (first_name, middle_name, last_name, Address, Postal_Code, email_address, mobile_number, telephone_number, password, status, approve)
		VALUES('$first_name', '$middle_name', '$last_name', '$address','$postal_code', '$email', '$mobile_number', '$telephone_number', '$password', '$status', '$approve')";
		mysqli_query($db, $query);
		$_SESSION['success'] = "New user successfully created!!";
		header('location: #');
	}
}

// return user array from their id
function getUserById($id) {
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val) {
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0) {
		echo '<div class="error">';
		foreach ($errors as $error) {
			echo $error . '<br>';
		}
		echo '</div>';
	}
}

function login() {
	global $db, $email, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email Address is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM user_info WHERE email_address='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			// user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['status'] == 'Admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['first_name'] = $logged_in_user['first_name'];
				$_SESSION['name'] = $logged_in_user['first_name'] . " " . $logged_in_user['middle_name'] . " " . $logged_in_user['last_name'];
				$_SESSION['user_id'] = $logged_in_user['user_id'];
				$_SESSION['status'] = $logged_in_user['status'];
				$_SESSION['password'] = $password;
				$_SESSION['approve'] = $logged_in_user['approve'];
				header('location: admin/admin2_po.php');

			} else if ($logged_in_user['status'] == 'User') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['first_name'] = $logged_in_user['first_name'];
				$_SESSION['name'] = $logged_in_user['first_name'] . " " . $logged_in_user['middle_name'] . " " . $logged_in_user['last_name'];
				$_SESSION['user_id'] = $logged_in_user['user_id'];
				$_SESSION['status'] = $logged_in_user['status'];
				$_SESSION['approve'] = $logged_in_user['approve'];
				header('location: user/user_create_po.php');

			} else if ($logged_in_user['status'] == 'Property Office User') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['first_name'] = $logged_in_user['first_name'];
				$_SESSION['name'] = $logged_in_user['first_name'] . " " . $logged_in_user['middle_name'] . " " . $logged_in_user['last_name'];
				$_SESSION['user_id'] = $logged_in_user['user_id'];
				$_SESSION['status'] = $logged_in_user['status'];
				header('location: property_office/prop_office_porr.php');

			} else if ($logged_in_user['status'] == 'Super Admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['first_name'] = $logged_in_user['first_name'];
				$_SESSION['name'] = $logged_in_user['first_name'] . " " . $logged_in_user['middle_name'] . " " . $logged_in_user['last_name'];
				$_SESSION['user_id'] = $logged_in_user['user_id'];
				$_SESSION['status'] = $logged_in_user['status'];
				$_SESSION['approve'] = $logged_in_user['approve'];
				header('location: super_admin/admin_po.php');
			}
		} else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

function isLoggedIn() {
	if (isset($_SESSION['user'])) {
		return true;
	} else {
		return false;
	}
}

function createPO() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $email;
	

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
	$po_number = e($_POST['po_number']);
	$deliver_to = e($_POST['deliver_to']);
	$branch = e($_POST['branch']);
	$discount_type = e($_POST['discount_type']);
	$terms = e($_POST['terms']);
	$discount = e($_POST['discount']);
	$po_date = e($_POST['po_date']);
	$code = e($_POST['code']);
	$department = e($_POST['department']);
	$special_instruction = e($_POST['special_instruction']);
	$total_cost = e($_POST['total_cost']);
	$po_notes = e($_POST['note']);
	$supplier = e($_POST['supplier']);
	$status = "pending";
	$subclass = e($_POST['subclass']);
	$order_type = e($_POST['order_type']);
	$raw_delivery_date = htmlentities($_POST['delivery_date']);
	$delivery_date = date('Y-m-d', strtotime($raw_delivery_date));
	$raw_cancel_date = htmlentities($_POST['cancel_date']);
	$cancel_date = date('Y-m-d', strtotime($raw_cancel_date));
	$user_id = $_SESSION['user_id'];
	$subtotal = e($_POST['subtotal_cost']);


	$item_code1 = e($_POST['item_code1']);
	$item_description1 = e($_POST['item_description1']);
	$quantity1 = e($_POST['quantity1']);
	$unit_cost1 = e($_POST['unit_cost1']);
	$unit_measure1 = e($_POST['unit_measure1']);
	$unit_retail1 = e($_POST['unit_retail1']);
	$discount_cost = e($_POST['discount_cost']);

	$kind = e($_POST['kind']);
	$ordered_by = $_SESSION['name'];
	$_SESSION['supplier'] = $supplier;

	// form validation: ensure that the form is correctly filled
	if (empty($deliver_to)) {
		array_push($errors, "Deliver to is required");
	}
	if (empty($terms)) {
		array_push($errors, "Terms is required");
	}
	if (empty($discount)) {
		array_push($errors, "Discount is required");
	}
	if (empty($department)) {
		array_push($errors, "Department is required");
	}
	/*if (empty($delivery_date)) {
		array_push($errors, "delivery date is required");
	}*/


	if (count($errors) == 0) {

		

		$query = "INSERT INTO purchase_order (po_number, user_id, supplier, code, terms, branch, department, subclass, order_type, deliver_to, delivery_date, cancel_date, po_date, special_instruction, po_notes, status)
		VALUES('$po_number', '$user_id', '$supplier', '$code', '$terms','$branch', '$department', '$subclass', '$order_type', '$deliver_to', '$delivery_date', '$cancel_date', '$po_date', '$special_instruction', '$po_notes', '$status')";
		mysqli_query($db, $query);

		$query11 = "INSERT INTO purchase_cost (po_number, discount_type, discount, subtotal, discount_cost, total_cost)
		VALUES('$po_number', '$discount_type', $discount, '$subtotal', '$discount_cost', '$total_cost')";

		mysqli_query($db, $query11);


		if (!empty($item_code1)) {
			$query3 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code1', '$item_description1', '$quantity1','$unit_cost1', '$unit_measure1', '$unit_retail1')";
		}

		mysqli_query($db, $query3);

		$item_code2 = e($_POST['item_code2']);
		if (!empty($item_code2)) {

			
			$item_description2 = e($_POST['item_description2']);
			$quantity2 = e($_POST['quantity2']);
			$unit_cost2 = e($_POST['unit_cost2']);
			$unit_measure2 = e($_POST['unit_measure2']);
			$unit_retail2 = e($_POST['unit_retail2']);

			$query4 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code2', '$item_description2', '$quantity2','$unit_cost2', '$unit_measure2', '$unit_retail2')";
		}

		mysqli_query($db, $query4);

		$item_code3 = e($_POST['item_code3']);
		if (!empty($item_code3)) {

			
			$item_description3 = e($_POST['item_description3']);
			$quantity3 = e($_POST['quantity3']);
			$unit_cost3 = e($_POST['unit_cost3']);
			$unit_measure3 = e($_POST['unit_measure3']);
			$unit_retail3 = e($_POST['unit_retail3']);

			$query5 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code3', '$item_description3', '$quantity3','$unit_cost3', '$unit_measure3', '$unit_retail3')";
		}

		mysqli_query($db, $query5);

		$item_code4 = e($_POST['item_code4']);
		if (!empty($item_code4)) {

			
			$item_description4 = e($_POST['item_description4']);
			$quantity4 = e($_POST['quantity4']);
			$unit_cost4 = e($_POST['unit_cost4']);
			$unit_measure4 = e($_POST['unit_measure4']);
			$unit_retail4 = e($_POST['unit_retail4']);

			$query6 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code4', '$item_description4', '$quantity4','$unit_cost4', '$unit_measure4', '$unit_retail4')";
		}

		mysqli_query($db, $query6);

		$item_code5 = e($_POST['item_code5']);
		if (!empty($item_code5)) {

			
			$item_description5 = e($_POST['item_description5']);
			$quantity5 = e($_POST['quantity5']);
			$unit_cost5 = e($_POST['unit_cost5']);
			$unit_measure5 = e($_POST['unit_measure5']);
			$unit_retail5 = e($_POST['unit_retail5']);

			$query7 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code5', '$item_description5', '$quantity5','$unit_cost5', '$unit_measure5', '$unit_retail5')";
		}

		mysqli_query($db, $query7);

		$item_code6 = e($_POST['item_code6']);
		if (!empty($item_code6)) {

			
			$item_description6 = e($_POST['item_description6']);
			$quantity6 = e($_POST['quantity6']);
			$unit_cost6 = e($_POST['unit_cost6']);
			$unit_measure6 = e($_POST['unit_measure6']);
			$unit_retail6 = e($_POST['unit_retail6']);

			$query8 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code6', '$item_description6', '$quantity6','$unit_cost6', '$unit_measure6', '$unit_retail6')";
		}

		mysqli_query($db, $query8);

		$item_code7 = e($_POST['item_code7']);
		if (!empty($item_code7)) { 

			$item_description7 = e($_POST['item_description7']);
			$quantity7 = e($_POST['quantity7']);
			$unit_cost7 = e($_POST['unit_cost7']);
			$unit_measure7 = e($_POST['unit_measure7']);
			$unit_retail7 = e($_POST['unit_retail7']);

			$query9 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code7', '$item_description7', '$quantity7','$unit_cost7', '$unit_measure7', '$unit_retail7')";
		}

		mysqli_query($db, $query9);

		$image = $_FILES['image']['name'];
		$target = "../images/".basename($image);
		

		$query10 = "INSERT INTO remarks (po_number, kind, image, ordered_by)
		VALUES('$po_number', '$kind', '$image', '$ordered_by')";

		mysqli_query($db, $query10);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			echo "<script>
			alert('PO created successfully');
			</script>";
		}else{
			echo "<script>
			alert('Error creating PO');
			</script>";
		}

		header('location: #');
	}

}

function addSupplier() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors;

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
	$supplier_name = e($_POST['supplier_name']);
	$company_code = e($_POST['company_code']);
	$supplier_address = e($_POST['supplier_address']);
	$supplier_postal_code = e($_POST['supplier_postal_code']);
	$contact_name = e($_POST['contact_name']);
	$supplier_phone_number = e($_POST['supplier_phone_number']);
	$supplier_tel_number = e($_POST['supplier_tel_number']);
	$supplier_email_address = e($_POST['supplier_email_address']);
	$supplier_fax = e($_POST['supplier_fax']);
	$supplier_extra = e($_POST['supplier_extra']);

	// form validation: ensure that the form is correctly filled
	if (empty($supplier_name)) {
		array_push($errors, "Supplier name is required");
	}
	if (empty($company_code)) {
		array_push($errors, "Company code is required");
	}
	if (empty($supplier_address)) {
		array_push($errors, "Address is required");
	}
	if (empty($supplier_postal_code)) {
		array_push($errors, "Postal code is required");
	}
	if (empty($contact_name)) {
		array_push($errors, "Contact name is required");
	}
	if (empty($supplier_email_address)) {
		array_push($errors, "Email address is required");
	}
	if (empty($supplier_fax)) {
		array_push($errors, "Fax is required");
	}
	if (empty($supplier_extra)) {
		array_push($errors, "extra is required");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {

		$query = "INSERT INTO supplier (supplier_name, company_code, address, postal_code, contact_name, mobile_number, telephone_number, email_address, fax, extra)
		VALUES('$supplier_name', '$company_code', '$supplier_address', '$supplier_postal_code','$contact_name', '$supplier_phone_number', '$supplier_tel_number', '$supplier_email_address', '$supplier_fax', '$supplier_extra')";
		mysqli_query($db, $query);
		$_SESSION['success'] = "New supplier successfully created!!";
		header('location: admin_po.php');
	}
}

function addSupplies(){

	global $db, $errors;

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
	$sku_code = e($_POST['sku_code']);
	$item_name = e($_POST['item_name']);
	$category = e($_POST['category']);
	$item_description_short = e($_POST['item_description_short']);
	$item_description_long = e($_POST['item_description_long']);
	$item_code = e($_POST['item_code']);
	$unit_price = e($_POST['unit_price']);
	$supplier = e($_POST['supplier']);


	// form validation: ensure that the form is correctly filled
	if (empty($sku_code)) {
		array_push($errors, "SKU code name is required");
	}
	if (empty($item_name)) {
		array_push($errors, "Item name code is required");
	}
	if (empty($category)) {
		array_push($errors, "Category is required");
	}
	if (empty($item_code)) {
		array_push($errors, "Item code address is required");
	}
	if (empty($unit_price)) {
		array_push($errors, "Unit price is required");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {

		$query = "INSERT INTO supplies (item_code, sku_code, item_name, category, item_description_short, item_description_long, unit_price, supplier)
		VALUES('$item_code', '$sku_code', '$item_name', '$category','$item_description_short', '$item_description_long', '$unit_price', '$supplier')";
		mysqli_query($db, $query);
		$_SESSION['success'] = "New supplies successfully created!!";
		header('location: admin_supplies_add.php');
	}

}

function deletePO(){

	global $db, $errors;


	$po_number = $_POST['po_number'];

	$query = "UPDATE purchase_order SET status ='deleted', deleted_at = now() WHERE po_number = '$po_number'";
	$result = mysqli_query($db, $query);

	echo "<script>
	alert('Deleted Successfully');
	</script>";

}

function editPO() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $email;
	

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
	$po_number = e($_POST['po_number']);
	$deliver_to = e($_POST['deliver_to']);
	$branch = e($_POST['branch']);
	$discount_type = e($_POST['discount_type']);
	$terms = e($_POST['terms']);
	$discount = e($_POST['discount']);
	$po_date = e($_POST['po_date']);
	$code = e($_POST['po_code']);
	$department = e($_POST['department']);
	$special_instruction = e($_POST['special_instruction']);
	$total_cost = e($_POST['total_cost']);
	$po_notes = e($_POST['note']);
	$supplier = e($_POST['supplier']);
	$status = "pending";
	$subclass = e($_POST['subclass']);
	$order_type = e($_POST['order_type']);
	$raw_delivery_date = htmlentities($_POST['deliver_date']);
	$delivery_date = date('Y-m-d', strtotime($raw_delivery_date));
	$raw_cancel_date = htmlentities($_POST['cancel_date']);
	$cancel_date = date('Y-m-d', strtotime($raw_cancel_date));
	$user_id = $_SESSION['user_id'];
	$subtotal = e($_POST['subtotal_cost']);


	$item_code1 = e($_POST['item_code1']);
	$item_description1 = e($_POST['item_description1']);
	$quantity1 = e($_POST['quantity1']);
	$unit_cost1 = e($_POST['unit_cost1']);
	$unit_measure1 = e($_POST['unit_measure1']);
	$unit_retail1 = e($_POST['unit_retail1']);
	$discount_cost = e($_POST['discount_cost']);

	$kind = e($_POST['kind']);
	$ordered_by = $_SESSION['name'];
	$_SESSION['supplier'] = $supplier;

	// form validation: ensure that the form is correctly filled
	if (empty($deliver_to)) {
		array_push($errors, "Deliver to is required");
	}
	if (empty($terms)) {
		array_push($errors, "Terms is required");
	}
	if (empty($discount)) {
		array_push($errors, "Discount is required");
	}
	if (empty($department)) {
		array_push($errors, "Department is required");
	}
	if (empty($item_code1)) {
		array_push($errors, "you need to purchase at least 1 item");
	}


	if (count($errors) == 0) {

		$query = "UPDATE purchase_order SET supplier = '$supplier', code = '$code', terms = '$terms', branch = '$branch', department = '$department', subclass = '$subclass', order_type = '$order_type', deliver_to = '$deliver_to', delivery_date = '$delivery_date', cancel_date = '$cancel_date', po_date = '$po_date', special_instruction = '$special_instruction', po_notes = '$po_notes', status = '$status' WHERE po_number = '$po_number'";
		mysqli_query($db, $query);

		$query2 = "DELETE FROM purchase_details WHERE po_number = '$po_number'";
		mysqli_query($db, $query2);

		$query3 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
		VALUES('$po_number', '$item_code1', '$item_description1', '$quantity1', '$unit_cost1', '$unit_measure1', '$unit_retail1')";

		mysqli_query($db, $query3);

		$item_code2 = e($_POST['item_code2']);
		if (!empty($item_code2)) {

			
			$item_description2 = e($_POST['item_description2']);
			$quantity2 = e($_POST['quantity2']);
			$unit_cost2 = e($_POST['unit_cost2']);
			$unit_measure2 = e($_POST['unit_measure2']);
			$unit_retail2 = e($_POST['unit_retail2']);

			$query4 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code2', '$item_description2', '$quantity2','$unit_cost2', '$unit_measure2', '$unit_retail2')";
		}

		mysqli_query($db, $query4);

		$item_code3 = e($_POST['item_code3']);
		if (!empty($item_code3)) {

			
			$item_description3 = e($_POST['item_description3']);
			$quantity3 = e($_POST['quantity3']);
			$unit_cost3 = e($_POST['unit_cost3']);
			$unit_measure3 = e($_POST['unit_measure3']);
			$unit_retail3 = e($_POST['unit_retail3']);

			$query5 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code3', '$item_description3', '$quantity3','$unit_cost3', '$unit_measure3', '$unit_retail3')";
		}

		mysqli_query($db, $query5);

		$item_code4 = e($_POST['item_code4']);
		if (!empty($item_code4)) {

			
			$item_description4 = e($_POST['item_description4']);
			$quantity4 = e($_POST['quantity4']);
			$unit_cost4 = e($_POST['unit_cost4']);
			$unit_measure4 = e($_POST['unit_measure4']);
			$unit_retail4 = e($_POST['unit_retail4']);

			$query6 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code4', '$item_description4', '$quantity4','$unit_cost4', '$unit_measure4', '$unit_retail4')";
		}

		mysqli_query($db, $query6);

		$item_code5 = e($_POST['item_code5']);
		if (!empty($item_code5)) {

			
			$item_description5 = e($_POST['item_description5']);
			$quantity5 = e($_POST['quantity5']);
			$unit_cost5 = e($_POST['unit_cost5']);
			$unit_measure5 = e($_POST['unit_measure5']);
			$unit_retail5 = e($_POST['unit_retail5']);

			$query7 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code5', '$item_description5', '$quantity5','$unit_cost5', '$unit_measure5', '$unit_retail5')";
		}

		mysqli_query($db, $query7);

		$item_code6 = e($_POST['item_code6']);
		if (!empty($item_code6)) {

			
			$item_description6 = e($_POST['item_description6']);
			$quantity6 = e($_POST['quantity6']);
			$unit_cost6 = e($_POST['unit_cost6']);
			$unit_measure6 = e($_POST['unit_measure6']);
			$unit_retail6 = e($_POST['unit_retail6']);

			$query8 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code6', '$item_description6', '$quantity6','$unit_cost6', '$unit_measure6', '$unit_retail6')";
		}

		mysqli_query($db, $query8);

		$item_code7 = e($_POST['item_code7']);
		if (!empty($item_code7)) { 

			$item_description7 = e($_POST['item_description7']);
			$quantity7 = e($_POST['quantity7']);
			$unit_cost7 = e($_POST['unit_cost7']);
			$unit_measure7 = e($_POST['unit_measure7']);
			$unit_retail7 = e($_POST['unit_retail7']);

			$query9 = "INSERT INTO purchase_details (po_number, item_code, item_description, quantity, unit_cost, unit_measure, unit_retail)
			VALUES('$po_number', '$item_code7', '$item_description7', '$quantity7','$unit_cost7', '$unit_measure7', '$unit_retail7')";
		}

		mysqli_query($db, $query9);

		$query10 = "UPDATE remarks SET kind = '$kind', ordered_by = '$ordered_by' WHERE po_number = '$po_number'";

		mysqli_query($db, $query10);

		$query11 = "UPDATE purchase_cost set po_number = '$po_number', discount_type = '$discount_type', discount = '$discount', subtotal = '$subtotal', discount_cost = '$discount_cost', total_cost = '$total_cost'";

		mysqli_query($db, $query11);

		$_SESSION['success'] = "New user successfully created!!";
		$count++;

		header('location: #');
	}

}

function approvePO(){

	global $db, $errors;

	$po_number = $_POST['po_number'];
	$name = $_SESSION['name'];

	$query = "SELECT verified_by FROM remarks WHERE po_number = '$po_number'";
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_array($result);

	if($row[0] == null){
		$query2 = "UPDATE remarks SET verified_by = '$name' WHERE po_number = '$po_number'";
		mysqli_query($db, $query2);
		$query3 = "UPDATE purchase_order SET status = 'verified' WHERE po_number = '$po_number'";
		mysqli_query($db, $query3);
		header('location admin2_po_list.php');
	}
	else{
		$query2 = "UPDATE remarks SET approved_by = '$name' WHERE po_number = '$po_number'";
		mysqli_query($db, $query2);
		$query3 = "UPDATE purchase_order SET status = 'approved' WHERE po_number = '$po_number'";
		mysqli_query($db, $query3);
		header('location: admin_po_list.php');
	}


}