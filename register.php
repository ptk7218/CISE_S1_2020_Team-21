<?php include("database connection/sqlinfo.php"); ?>
<!DOCTYPE html>
<html>
    <!-- head -->
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">

        <!-- Font Awesome kit's code -->
        <script src="https://kit.fontawesome.com/4e6ccfc44a.js" crossorigin="anonymous"></script> 
       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Lora&display=swap" rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" type="text/css" href = "css/style.css">

        <title>User Register page</title>  
    </head>

    <body>
    <!-- header -->
    <?php include("includes/header.php"); ?>
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
    
      <div class="auth-content">

      <form action="register.php" method = "post">
          <h2 class="form-title">User Register</h2>

          <div>
            <label>Username</label>
              <input type="text" name="username" class="text-input">
          </div>
          <div>
              <label>First name</label>
              <input type="text" name="fname" class="text-input">
          </div>
          <div>
              <label>Last name</label>
              <input type="text" name="lname" class="text-input">
          </div>

          <p></p>

          <div>
            <label for "radio">Affiliation:<br></label>
		        <input type = "radio" name = "radio" value = "institution" />
			      <label for ="institution">institution</label>
		      	<input type = "radio" name = "radio" value = "organisation" />
		      	<label for ="organisation">organisation</label>       
          </div>

          <div>
            <label>Email</label>
            <input type="email" name="email" class="text-input">
          </div>
        
          <div>
            <label>Password</label>
            <input type="password" name="password" class="text-input">
         </div> 

         <div>
            <label>Password Confirmation</label>
            <input type="password" name="passwordConf" class="text-input">
        </div>

        <div>
            <button type="submit" name="register-btn" class="btn btn-big">Register</button>
        </div>
        <p>Or <a href="login.html">Sign In</a></p>

      </form>
      </div>
          

      <!--footer-->
      <?php include("includes/footer.php"); ?>

    
    </body>
  </html>   
  

