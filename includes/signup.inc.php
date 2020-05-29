<?php
if(isset($_POST['register-btn]'])){
 
 require 'database connection/sqlinfo.php';

 $username = $_POST['username'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $radio = $_POST['radio'];
 $password = $_POST['password'];
 $passwordConf = $_POST['passwordConf'];


if (empty($username)||empty($fname)||empty($lname)||empty($radio)||empty($password) || empty($passwordConf)){
    header("Location: ../register.php?error=emptyfields&username=".$username."&mail=".$email);
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../register.php?error=invalidmailusername");
    exit();

}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../register.php?error=emptyfields&username=".$username);
    exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../register.php?error=emptyfields&username=".$email);
    exit();
}
else if($password == $passwordConf){
    header("Location: ../register.php?error=passwordcheck&username=".$username."&mail=".$email);
    exit();
}
else {
    $sql = "SELECT username FROM seerusers WHERE username=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_init($stmt, $sql)){
       header("Location: ../register.php?error=sqlerror");
       exit();

    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck >0){
            header("Location: ../register.php?error=usertaken&mail=". $email);
            exit();
        }
        else{
         $sql = "INSERT INTO seerusers (username, fname, lname, radio, email, password) VALUES (?, ?, ?, ?, ?, ?)";
         $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt, $sql)){
             header("Location: ../register.php?error=sqlerror");
             exit();
         }
         else{
             $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssssss", $username, $fname, $lname, $radio, $email, $password);
            mysqli_stmt_execute($stmt);
            header("Location: ../register.php?register=success");
            exit();

         }
        }
    }

}
mysqli_stmt_close($stmt);
mysqli_close($conn);

}

else{
    header("Location: ../register.php");
            exit();

}
