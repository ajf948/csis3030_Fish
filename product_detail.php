<?php

	include("global.php");
	include("header.php");

	$product_id = intval($_GET["product_id"]);


	$result = mysqli_query($connection, "select * from products where id = $product_id");
	while ($row = mysqli_fetch_assoc($result)) { 
	
	echo "<br/>";
	echo "<img src='images/" . $row["image"] . "' width=220px>" . "<br/>";
	echo "<h2>" . $row["product_name"] . "</h2>";
	echo $row["description"] . "<br /> <br/> <br/>"; 


}


?>

<form action="cart_process.php" method="POST">
	<? echo 'Quantity: <input type="text" name="product_' . $product_id . '" size="3"><br/><br/><br/>' ?>
	<input type="submit" value="Add to cart">
	<br /><br /><br /> <br />
</form>


<?php

	include("footer.php");
?>










