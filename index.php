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
        $query = "SELECT * FROM `product`";
//запрос к бд
        $result = mysqli_query($connection,$query);
// Извлекает результирующий ряд в виде ассоциативного массива
        while($row = mysqli_fetch_assoc($result)){?>
            <div class="container">
                <div class="image"><img src="<?php echo $row['image'];?>" width="250px" alt="cook"></div>
                <div class="name"><?php echo $row['name'];?></div>
                <div class="price"><?php echo $row['price'] . "₴";?></div>
                <form method = "POST" action="add_to_basket.php">
                    <input type="hidden" name="product_id" value="<?php echo $row['id'];?>">
                    <p><input type="submit"  value="Купить"></p>
                </form>

            </div>
    
    <?php } ?>

    </div>

<hr align="center" />
     <div class="contacts">
       <h1>Свяжитесь с нами</h1>
       <p>Наши контакты:</p>
       <p>+3806659303</p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d320.56808986951927!2d36.239696746927066!3d50.00114468181937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e7c1a35a01%3A0x57d9595b0d6bdc25!2z0KHQsNC70L7QvSDQutGA0LDRgdC-0YLRiyAi0JvQvtGA0LDQvdC2Ig!5e0!3m2!1sru!2sua!4v1513686914180" width="600" height="450" frameborder="0"  allowfullscreen></iframe>
   </div>
   

  
</body>
</html>