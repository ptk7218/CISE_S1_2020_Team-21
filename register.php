<?php 
include_once ("connection.php"); 
?>
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

  
      <div class="auth-content">

      <form action="includes/signup.inc.php" method = "post">
          <h2 class="form-title">User Register</h2>

          <div>
            <label>Username</label>
              <input type="text" name="username" class="text-input" placeholder="username">
          </div>
          <div>
              <label>First name</label>
              <input type="text" name="firstname" class="text-input" placeholder="first name">
          </div>
          <div>
              <label>Last name</label>
              <input type="text" name="lastname" class="text-input" placeholder="last name">
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
            <input type="email" name="email" class="text-input" id = "email" placeholder="email">
          </div>
        
          <div>
            <label>Password</label>
            <input type="password" name="password" class="text-input" id = "pwd" placeholder="password">
         </div> 
        <!-- 
         <div>
            <label>Password Confirmation</label>
            <input type="password" name="passwordConf" class="text-input" placeholder="Repeat password">
        </div>
        -->
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
  
