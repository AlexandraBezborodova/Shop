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
    <form class="form" action="reg.php" method="POST">
        
        <input type="text" name="username" placeholder="Имя" required>
        <input type="text" name="password" placeholder="Пароль" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" name="submit" value="Регистрация">
    </form>
</body>
</html>