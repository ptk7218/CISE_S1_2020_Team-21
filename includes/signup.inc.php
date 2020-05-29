<?php
if(isset($_POST['register-btn]'])){
 
 require 'database connection/sqlinfo.php';

 $username = $_POST['username'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $radio = $_POST['radio'];
 $password = $_POST['password'];
 $passwordConf = $_POST['passwordConf'];


if (empty($username) || empty($fname) ||empty($lname)||empty($radio) ||empty($password) || empty($passwordConf)){
    header("Location: ../register.php?error=emptyfields&username=".$username."&mail=".$email);
    
}





}
