<?php include('path.php') ?>
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

        <title>login page</title>  
    </head>

    <body>

    <?php include("includes/header.php"); ?>

    
      <div class="auth-content">

      <form action="login.html" method = "post">
          <h2 class="form-title">Login</h2>

          <div>
              <label>Username</label>
              <input type="text" name="username" class="text-input">
          </div>
          
        
          <div>
            <label>Password</label>
            <input type="password" name="password" class="text-input">
         </div> 

        <div>
            <button type="submit" name="login-btn" class="btn btn-big">login</button>
        </div>
        <p>Or <a href="register.html">Sign Up</a></p>

      </form>
      </div>
          

    <!--footer-->
    <?php include("includes/footer.php"); ?>

    </main>
</body>
</html>