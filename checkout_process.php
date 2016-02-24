<?php

	include("global.php");

	include("jwu_mail.php");



$first_name = mysqli_real_escape_string($connection,$_POST["first_name"]);
$email = mysqli_real_escape_string($connection,$_POST["email"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$state = mysqli_real_escape_string($connection,$_POST["state"]);
$zip_code = mysqli_real_escape_string($connection,$_POST["zip_code"]);



	if ($first_name == "")
		$errormessage = $errormessage . "First name cannot be blank<br />";

	if ($email == "")
		$errormessage = $errormessage . "Email cannot be blank<br />";

	if ($address == "")
		$errormessage = $errormessage . "Address cannot be blank<br />";

	if ($city == "")
		$errormessage = $errormessage . "City cannot be blank<br />";

	if ($state == "")
		$errormessage = $errormessage . "State cannot be blank<br />";

	if ($zip_code == "")
		$errormessage = $errormessage . "Zip code cannot be blank<br />";


	if ($errormessage != "") {
		include("checkout_form.php");
		die();
	}


if ($id == 0) {
$sql = "update products set quantity_remaining = $quantity_remaining - $quantity where product_id = $id";
}


include("header.php");
echo "<h4><br />Thank you, your order has been placed.</h4>";


echo "<h4>Order Summary: </h4><br/>";
echo "First Name: " . $_POST["first_name"] . "<br />";
echo "Address: " . $_POST["address"] . "<br />";
echo "City: " . $_POST["city"] . "<br />";
echo "State: " . $_POST["state"] . "<br />";
echo "Zip Code: " . $_POST["zip_code"] . "<br />";

	$result = mysqli_query($connection, "select * from cart join products on (cart.product_id = products.id) where session_id = '".session_id()."'");


	$product_id = intval($_GET["product_id"]);


	while ($row = mysqli_fetch_assoc($result)) { 
		echo "<br/>" . "<img src='images/" . $row["image"] . "' width=210px>";
		echo "<h2>" . $row["product_name"] . "</h2>";
		echo '<h4>Quantity:</h4>' . $row["quantity"] . '<br/><br/><br/>';
	
	$body = "Product ordered.";
			$body = $body . "product: " . $row["product_name"] . "";
			$body = $body . "quantity " . $row["quantity"] . "";		
		
			jwu_mail("$email","contact",$body);


	}

	
echo "<a href='category_list.php'>Return to shop</a><br /><br /><br />";




include("footer.php");


?>