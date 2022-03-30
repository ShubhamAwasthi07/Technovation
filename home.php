<?php

session_start();
if(!isset($_SESSION['username'])){
    echo "Please Login!!";
    header('php/login.php');
}


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <nav>
        <div class="menu">
            <div class="logo">
                <a href="#">Technovation</a>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="php/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="img"></div>
    <div class="center">
        <div class="title">Welcome to Techno World! <h4><?php  echo $_SESSION['username'];  ?></h4> </div>
        <div class="sub_title">Thanks For Visiting</div>
        <div class="btns">
            <button>Learn More</button>
            <button>Explore More</button>
        </div>
    </div>
</body>

</html>