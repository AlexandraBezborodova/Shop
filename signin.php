<?php
    include('login.php');
    if ((isset($_SESSION['username']) != '')) {
        header('Location: home.php');
    }
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
    <form action="login.php" method="POST">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
</body>
</html>