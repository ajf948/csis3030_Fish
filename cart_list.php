<?php

	include("global.php");
	include("header.php");


	$result = mysqli_query($connection, "select * from cart join products on (cart.product_id = products.id) where session_id = '".session_id()."'");


	$product_id = intval($_GET["product_id"]);

	?>
<form action="cart_process.php" method="POST">

<?php
	while ($row = mysqli_fetch_assoc($result)) { 
		echo "<br/>" . "<img src='images/" . $row["image"] . "' width=210px>";
		echo "<h2>" . $row["product_name"] . "</h2>";
		echo '<h4>Quantity:</h4> <input type="text" name="product_' . $row["product_id"] . '" value="' . $row["quantity"] . '" size="3"><br/><br/><br/>';
		//echo 'Quantity: <input type="text" name="product_' . $product_id . '" value="' . $row["quantity"] . '" size="3"><br/><br/><br/>'

	}


?>


	<input type="submit" value="update cart">
	<input type="submit" name="checkout" value="checkout">
	<br /><br /><br /> <br />
</form>

<?php



	include("footer.php");


?>



