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
    <div class="flex">
    <?php
        
     
        require('connect.php');
        $username = $_SESSION['login'];
        $query = "select * from product where id in 
                        (
                        SELECT product_id 
                        FROM basket 
                        where user_name = '".$username."'
                        );
                        ";

        $result = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($result)){?>
            <div class="container">
                <div class="image"><img src="<?php echo $row['image'];?>" width="250px" alt="cook"></div>
                <div class="name"><h3><?php echo $row['name'];?></h3></div>
                <div class="price"><?php echo $row['price'];?></div>
                <form method = "POST" action="delete_from_basket.php">
                    <input type="hidden" name="product_id" value="<?php echo $row['id'];?>">
                    <p><input type="submit"  value="Удалить из корзины"></p>
                </form>
            </div>
    
    <?php } ?>
    </div>
</body>
</html>