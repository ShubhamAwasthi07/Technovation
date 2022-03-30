<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "internship";

//Connecting with database

$con = mysqli_connect($servername, $username, $password, $db_name);

if($con){
   ?>
   <script>
       alert("Connection is successful!!");
   </script> 
    <?php
}
else{
    ?>
    <script>
        alert("Error! Connection failed");
    </script>
    <?php
}

?>

