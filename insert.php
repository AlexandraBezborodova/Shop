<?php
	require('connect.php');

	$name = $_POST['product'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$image = $_POST['image'];

	$query = "INSERT INTO products(name,price,description,image) VALUES('$name','$price','$description','$image')";

	$result = mysqli_query($connection,$query);

	if(!$result) {
		echo "Some error" . mysql_error();
	}
	else {
		echo "Product has been added to shop!";
	}
?>