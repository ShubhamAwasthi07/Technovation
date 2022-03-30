<?php

include 'php/config.php';

if(isset($_POST['submit'])){
     $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $repassword = mysqli_real_escape_string($con, $_POST['repassword']);

    $hash = password_hash($password, PASSWORD_BCRYPT);
    $rehash = password_hash($repassword, PASSWORD_BCRYPT); // Encrypting Password by using the blowfish algorithm

     // Check email not exists in my database

    $email_check = "SELECT * FROM signup where email = '$email'";
    $query = mysqli_query($con, $email_check);

    // if email is already exists in the database

    // Count the numbers of emails enter in my database

    $email_count = mysqli_num_rows($query);

    if($email_count > 0){
        ?>
        <script>
            alert("This email is already exist!!!");
            alert("please enter the valid email");
        </script>
        <?php
    }
    else{

        
        if($password === $repassword){
            
            // Query to insert the data into the database
            
            $sql = "INSERT INTO `signup` (username, email, password, repassword, datetime) VALUES ('$username', '$email', '$hash', '$rehash', current_timestamp())";
            
            $insert = mysqli_query($con, $sql);
            
            if($insert){
                ?>
                <script>
                    alert("Your details is submitted successfully!!");
                    location.replace("login.php");
                    </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Something went wrong!!");
                    </script>
                <?php
            }
            
        }else{
            ?>
            <script>
                alert("Password is not matched!");
                </script>
            <?php
        }
        
    }
}

?>