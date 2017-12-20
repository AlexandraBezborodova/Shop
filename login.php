<?php
    session_start();
    include('connect.php');

    $error = '';
    
    if(isset($_POST['submit'])){
        if(empty($_POST['login']) || empty($_POST["password"])){
            echo "Both fields are required.";
        }else{
            $username=$_POST['login'];
            $password=$_POST['password'];

            $sql="SELECT id FROM users WHERE username='$username' and password='$password'";
            $result=mysqli_query($connection,$sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

            if(mysqli_num_rows($result) == 1){
                session_start();
                $_SESSION['login'] = $username;
                
                header("location: index.php");
            }else{
                echo "Incorrect username or password";
                
            }
        }
    }
?>