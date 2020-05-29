<?php 
    if(isset($_POST['register-btn'])){

       $username = $_POST['username'];
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $affiliation = $_POST['radio'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       $sql = "INSERT INTO seerusers (username, fname, lname, radio, email, password) values(?, ?, ?, ?, ?)";
       $stmtinsert = $sql_db->prepare($sql);
       $result = $stmtinsert->execute([$username, $fname, $lname, $affiliation, $email, $password]);
       if($result){
         echo 'successfully saved';
       }else{
         echo 'there are errors while saving the data.';
       }
    ?>