<?php
	require('connect.php');
	session_start();
	$username = $_SESSION['login'];
	$product_id = $_POST['product_id'];
	
	$query = "DELETE FROM basket where user_name = '".$username."' and product_id = '".$product_id."'";

	$result = mysqli_query($connection,$query);

	if(!$result) {
		echo "Some error" . mysql_error();
	}
	else {
		
		header("location: basket.php");
	}
	
?>