<?php
session_start();
require_once "config.php";
$user_err = $pass_err = $acc_err = "";
$username = $password = "";

if(isset($_POST['login'])){
    if(empty(trim($_POST['username']))){
        $user_err = "Username Can't be blank";
    } else{
        $username = trim($_POST['username']);
    }

    if(empty(trim($_POST['password']))){
        $pass_err = "Password Can't be blank";
    } else{
        $password = trim($_POST['password']);
    }

    if(empty($user_err) && empty($pass_err)){
        require "loginController.php";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>Collabable</title>
        <link rel="stylesheet" href="dist/app.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

    </head>
    <body>
    <div class="horizontal_line"></div>
    <div class ="line_layout">
        <div class="dot_pattern"></div>
        <img class="logo" src="assets/images/unifield_logo.png">
        <h1 class="main_title">Collabable</h1>

        <form class="form_layout" method="POST">
            <div class="credentials">
                <input type="text" name="username" id="user" placeholder="Enter Username" required> <?php echo "<p>". $user_err . "</p>" ?>
                <input type="password" name="password" id="pass" placeholder="Enter Password" required><?php echo "<p>". $pass_err . "</p>" ?> <?php "<p>". $acc_err . "</p>" ?>
            <button class="default_button" type="submit" name="login">Login</button>
        </form>

        <a href="forgetpassword.php"><h4 id="forget_text">Forgot Password?</h4></a>
    </div>

    <footer>Created by: Thesis IT Pansit, 2018</footer>

    </body>
</html>