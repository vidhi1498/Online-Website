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
    <title>Login to Perfect Site</title>
    <script type = "text/javascript"  
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>             
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">  
      </script>   
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <body>
       

      <center>
        <h1>  Welcome Again............!  </h1>      </center>

    <div>




    <form method="POST" action="verify.php" style="margin-top:30px;">
         <div class="container">
             <label><b><font size = "4"> Email</font></b></label>
             <input type="email" placeholder="" name="username" required>

             <label><b><font size = "4">Password</font></b></label>
             <input type="password" placeholder="Enter your Password" name="pwd" required>

             <button class="waves-effect waves-light btn" type="submit">Login</button>
           </div>
           </form>
           <center>
           <p id="signup">Don't have account? <a class="snup" href="register.php" id="signup">Sign up here</a></p>
         </center>
         </div>
     


   </div>




  </body>
</html>
