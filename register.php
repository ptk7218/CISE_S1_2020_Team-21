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

        <title>Register page</title>  
    </head>

    <body>
        
    <?php include("app/header.php"); ?>

    
      <div class="auth-content">
      <form action="register.html" method = "post">
          <h2 class="form-title">Register</h2>

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
    <div class= "footer">
        <div class="footer-content">

            <div class = "footer-section about">
                <h1 class="logo-text"><span>SEER</span>Search</h1>
                <p>short introduction</p>

                <div class= "contact">
                    <span><i class="fas fa-phone"></i>&nbsp; 0800-12341234</span>
                    <span><i class="fas fa-envelope"></i>&nbsp; info@autuni.ac.nz</span>
                </div>

                <div class="socials">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section links">
                <h2>Quick Links </h2>
                <br>
                <ul>
                    <a href="#"><li>Help</li></a>
                    <a href="#"><li>Developer Team</li></a>
                    <a href="#"><li>Privacy Policy</li></a>
                    <a href="#"><li>Blog</li></a>
                    <a href="#"><li>Subscribe</li></a>
                </ul>


            </div>
            
        </div>
        <div class="footer-bottom">
            &copy; SEERSearch | Designed by SE Stream14 Group 21
        </div>
    </footer>
    </main>
</body>
</html>