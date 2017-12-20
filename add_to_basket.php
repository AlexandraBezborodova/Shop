<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <ul class="nav">
            <li class="home"><a href="index.php">Главная</a></li>
            <li><a href="basket.php">Корзина</a></li>
            <li><a href="register.php">Регистрация</a></li>
            <li><a href="signin.php">Логин</a></li>
        </ul>
    </div>
	 <img src="img/logol.png" alt="" class="logo">
     <?php
	require('connect.php');
	$username = $_SESSION['login'];
	$product_id = $_POST['product_id'];
	
	$query = "INSERT INTO basket(user_name, product_id) VALUES('$username','$product_id')";

	$result = mysqli_query($connection,$query);

	if(!$result) {
		echo "Some error" . mysql_error();
	}
	else {
		echo "<p class = 'add'>Ваш товар успешно добавлен</p>" . "      <a href='index.php' class = 'back'>Вернуться назад</a>";
	}
	
?>