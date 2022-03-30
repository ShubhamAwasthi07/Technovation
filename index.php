<?php

include 'php/signup.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp Form</title>
    <link rel="stylesheet" href="css/style1.css">

    <!-- form Validation -->
    <script language="javascript">
        function validate(){
            var user = document.validation.username.value;
            var email = document.validation.email.value;
            var pass = document.validation.password.value;
            var cpass = document.validation.repassword.value;
         

            if(pass.length <8){
                alert("Password Atleast 8 characters");
                alert("Please enter the password in this format: Atleast one Uppercase, atleast one numeric number ,password atleast conatins the 8 characters and no Special Symbols are Allowed !!");
                return false;
            }
            if(pass.search(/[0-9]/) == -1){
                alert("Password atleast one numeric character");
                 alert("Please enter the password in this format: Atleast one Uppercase, atleast one numeric number ,password atleast conatins the 8 characters and no Special Symbols are Allowed !!");
                return false;
            }
            if(pass.search(/[A-Z]/) == -1){
                alert("Password atleast one UpperCase character");
                  alert("Please enter the password in this format: Atleast one Uppercase, atleast one numeric number ,password atleast conatins the 8 characters and no Special Symbols are Allowed !!");
                return false;
            }

            if(pass.search(/[@\#\$\%\^\&\*\(\)\{\}\+\-\_\!]/)!=-1){
                alert("Special Characters are not Allowed!!");
                alert("Please enter the password in this format: Atleast one Uppercase, atleast one numeric number ,password atleast conatins the 8 characters and no Special Symbols are Allowed !!");
                return false;
            }
            
            

           
        }
    </script>

</head>

<body>
    <div class="signupFrm">
        <div class="wrapper">
            <form action="" class="form" method="post" name="validation" onsubmit="return validate();">
            <h1 class="title">Sign up</h1>
                <div class="inputContainer">
                    <input type="text" id="user" class="input" name="username" value="" placeholder="a" required>
                    <label for="user" class="label">Username</label>
                </div>

                <div class="inputContainer">
                    <input type="email" id="email" class="input" name="email" value="" placeholder="a" required>
                    <label for="" class="label">Email</label>
                </div>


                <div class="inputContainer">
                    <input type="password" id="passs" class="input" name="password" value="" placeholder="Password" required>
                    <label for="" class="label"> Password</label>
                </div>

                <div class="inputContainer">
                    <input type="password" id="cpass" class="input" name="repassword" value="" placeholder="a" required>
                    <label for="" class="label">Confirm Password</label>
                    
                </div>
                <div class="inputContainer">
                    
                    <p>Already have an Account ? <a href="login.php" class="already">Sign in</a></p>
                </div>


                <input type="submit" class="submitBtn" value="Sign up" name="submit" />
            </form>
        </div>
    </div>
</body>

</html>