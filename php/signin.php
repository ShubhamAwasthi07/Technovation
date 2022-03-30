<?php
include 'config.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_check = "select * from signup where email = '$email' ";

    $query = mysqli_query($con,$email_check);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

      $db_pass_check =   $email_pass['password'];

      $_SESSION['username'] = $email_pass['username'];

      $password_decode = password_verify($password,$db_pass_check);

      if($password_decode){
          echo "login Successful";
          ?>
        <script>
            location.replace("home.php");
        </script>

          <?php
      }else{
          echo "Password Incorrect";
      }

    }else{
        echo "Invalid Email";
    }
}


?>