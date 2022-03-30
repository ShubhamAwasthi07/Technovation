<?php
session_start();
include 'php/signin.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="signupFrm">
        <div class="wrapper">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" class="form" method="POST">
                <h1 class="title">Sign in</h1>
               

                <div class="inputContainer">
                    <input type="email" class="input" name="email" placeholder="a" required>
                    <label for="" class="label">Email_Id</label>
                </div>


                <div class="inputContainer">
                    <input type="password" class="input" name="password" placeholder="a" required>
                    <label for="" class="label">Password</label>
                </div>
                <div class="inputContainer">
                
                    <p> Create New Account ? <a href="index.php" class="already">Sign up</a></p>
                </div>

            

                <input type="submit" class="submitBtn" value="Sign in" name="submit" />
            </form>
        </div>
    </div>
</body>

</html>