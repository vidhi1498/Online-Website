<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:index.php");
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login || BOLT Sports Shop</title>
    <script type = "text/javascript"  
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>             
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">  
      </script>   
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <style >
      </style>
  </head>
  <body>

<button><a href="index.php">Home</a></button>




  <form method="POST" action="insert.php" style="margin-top:30px;">
 
      <div class="container">
            <b><font size = "4">First Name</font></b>
            <input type="text" placeholder="First Name" size="35" name="fname" required>     
            <span class="warning-text">   
            <?php 
                if(isset($validation['fname'])) { 
                    echo $validation['fname'];
                }
                ?></span>
            <b><font size = "4">Last Name</font></b>
            <input type="text" placeholder="Last Name" name="lname" required>
             <span class="warning-text">   
            <?php 
                if(isset($validation['lname'])) { 
                    echo $validation['lname'];
                }
                ?></span>
            <b><font size = "4">Address</font></b>
            <input type="text" placeholder="" name="address" required>
              <b><font size = "4"> City</font></b>
            <input type="text" placeholder="Mumbai" name="city" required pattern="[a-zA-Z ]+" title="only alphabets are allowed">
           

            <b><font size = "4">Pincode</font></b>
            <input type="text" placeholder="Pincode" name="pin" required maxlength="6" pattern="[0-9]{6}">
           
             <b><font size = "4"> Email address</font></b>
            <input type="email" placeholder="Enter your Email Address" name="email" required>
            <span class="warning-text">
             <b><font size = "4"> Password</font></b>
           <input type="password" placeholder="Password" name="pwd" id="pwd" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              
         

            <b><font size = "4">Confirm Password :</font></b>
            <input type="password" name="cpassword" id="cpassword" required>
            



           <button class="waves-effect waves-light btn" type="submit">Register</button>
          </div>
          </form>
          <center>
        <p id="login">Already have an account? <a class="sign" href="login.html" id="login">Sign in</a></p>
        </center>
        </div></div>


     


   </div>
<script type="text/javascript">
	var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("cpassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>



  </body>
</html>
