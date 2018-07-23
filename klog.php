<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include('config.php')
?>

<html>
<head>
<title>Home Page</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<style>
body {
  background: #fff;
}
#content img {
  float: left;
}
#content .col {
  float: left;
}

#footer {
  clear: left;
}

* {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  box-sizing: border-box;
}

nav {
  position: absolute;
  width: 100%;
  background: #2a2a2a;
  font-size: 16px;
  box-shadow: 0 0 10px rgba(0,0,0,1);
}

/* first stage */

nav > ul {
  position: relative;
  width: 800px;
  margin: 0 auto;
  padding: 0;
  text-align: center;
}

nav a {
  display: block;
  color: #fff;
  text-decoration: none;
}

nav li {
  display: inline-block;
  color: #fff;
  list-style: none;
  transition: 0.5s;
}

nav > ul > li > a {
  padding: 15px 25px;
}

nav ul > li.submenu > a:after {
  position: relative;
  float: right;
  content: '';
  margin-left: 10px;
  margin-top: 8px;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #fff;
  border-bottom: 5px solid transparent;
}

nav ul > li.submenu:hover > a:after {
  margin-top: 2px;
  color:black;
  border-top: 5px solid transparent;
  border-bottom: 5px solid #000;
}

nav > ul > li:hover {
 // background: #fff;
  color:black;
}

/* second stage (the mega-menu) */

nav ul.megamenu {
  position: absolute;
  width: 800px;
  top: -9999px;
  left: 0;
  padding: 40px 40px 0 40px;
  background: #fff;
  text-align: left;
  border-top: 5px solid #4096ee;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
  z-index: 1;
}

nav ul li:hover ul.megamenu {
  top: 100%;
}

/* third stage (child-menus in the mega-menu) */

nav .column {
  float: left;
  width: 32%;
  margin-right: 2%;
}

nav .column:last-child {
  margin-right: 0;
}

nav .column ul {
  margin-bottom: 40px;
}

nav .megamenu li {
  display: block;
}

nav .megamenu li a {
  margin-top: 10px;
  transition: 0.5s;
  color: #000;
}

nav .megamenu li a:hover {
  color: #4096ee;
}

nav .megamenu h4 {
  margin-bottom: 15px;
  color: #000;
  text-transform: uppercase;
}
</style>
</head>
<body>


<nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li class="submenu"><a href="#" title="productslist">Products</a>
      <ul class="megamenu">
        <div class="column">
          <ul>
            <h4>Women</h4>
            <li><a href="#">Western</a></li>
            <li><a href="#">Ethnic</a></li>
          
          </ul>
         
        </div>
        <div class="column">
          <ul>
      <h4>Men</h4>
            <li><a href="#">Western</a></li>
            <li><a href="#">Ethnic</a></li>
            
          </ul>
          
        </div>
        <div class="column">
          <ul>
            <h4>Electronics</h4>
            <li><a href="#">Mobile</a></li>
            <li><a href="#">Tablet</a></li>
            <li><a href="#">Laptops</a></li>
            
           
  </ul></div></li>
  
  </ul>
  <li><a href="#">View Cart</a></li>
 
  <li><a href="index.php">Home</a></li>
  <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
          </li>
  </ul>
</nav>
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
           <p id="signup">Don't have account? <a class="snup" href="signup.php" id="signup">Sign up here</a></p>
         </center>
         </div>





</body>
</html>
