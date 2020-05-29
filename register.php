<?php include("path.php"); ?>
<?php include("controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
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
    <?php include(ROOT_PATH . "/includes/header.php"); ?>

    
      <div class="auth-content">

      <form action="register.php" method = "post">
          <h2 class="form-title">User Register</h2>

          <div>
            <label>Username</label>
              <input type="text" name="username" class="text-input">
          </div>
          <div>
              <label>First name</label>
              <input type="text" name="firstname" class="text-input">
          </div>
          <div>
              <label>Last name</label>
              <input type="text" name="lastname" class="text-input">
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
            <label for "radio">User role:<br></label>
		    <input type = "radio" name = "radio2" value = "admin" />
			<label for ="admin">admin</label>
			<input type = "radio" name = "radio2" value = "moderator" />
            <label for ="moderator">moderator</label>  
            <input type = "radio" name = "radio2" value = "user" />
            <label for ="user">user</label>  
            <input type = "radio" name = "radio2" value = "analyst" />
            <label for ="analyst">analyst</label> 
            <input type = "radio" name = "radio2" value = "sdm" />
			<label for ="sdm">member of SDM class</label>  
        </div>

        <div>
            <button type="submit" name="register-btn" class="btn btn-big">Register</button>
        </div>
        <p>Or <a href="login.html">Sign In</a></p>

      </form>
      </div>
          

    <!--footer-->
    <?php include("includes/footer.php"); ?>

    </main>
</body>
</html>