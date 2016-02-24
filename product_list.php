<?php
 
include("global.php");
	include("header.php");

$category_id = intval($_GET["category_id"]);
$product_id = intval($_GET["product_id"]);
$result = mysqli_query($connection, "select * from categories where id = $category_id"); 
$row = mysqli_fetch_assoc($result);
echo "<h1>" . $row["category_name"] . "<h1/>";


$result = mysqli_query($connection, "select * from products where category_id = $category_id order by product_name");
while ($row = mysqli_fetch_assoc($result)) { 
		echo "<img src='images/" . $row["image"] . "' width=290px>";
		echo "<h2>" . $row["product_name"] . "</h2>";
		echo  $row["description"] . "<br />" . "<br />" . "<br />";
		echo "<a href='product_detail.php?product_id=" . $row["id"] . "'>Product Detail</a>" . "<br/> <br/> <br/> <br/>";
		
	}

     


	include("footer.php");
?>








