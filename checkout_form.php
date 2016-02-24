<?php

	include("global.php");
	include("header.php");

	?>

<span style="color: red;"><?php echo $errormessage;?></span>
<br/><br/>


<form action="checkout_process.php" method="POST" enctype="multipart/form-data">
	First Name: <input type="text" name="first_name" value="<?php echo $first_name;?>"><br /><br />
	Email: </label> <input type="text" name="email" id="email"value="<?php echo $email;?>"><br/><br/>
	Address: <input type="text" name="address" value="<?php echo $address;?>"><br /><br />
	City: <input type="text" name="city" value="<?php echo $city;?>"><br /><br />
	State: <input type="text" name="state" value="<?php echo $state;?>"><br /><br />
	Zip code: <input type="text" name="zip_code" value="<?php echo $zip_code;?>"><br /><br /><br />
	<input type="submit" value="place order">
	<br /><br /><br /> <br />
</form>




<?php

	include("footer.php");
?>




