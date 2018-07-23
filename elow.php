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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    color: black;
}

input[type=text]:focus {
    width: 100%;
}
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
.cover{
        text-align:right;
        top:50;
      }
 .cover1{
        text-align:right;
        top:60;
      }     
      .button{
        position:absolute;
        top:20%;
        right:5%;
      }
</style></head>
<body>
<nav>
  <ul>
  <li>
  <i class="fa-fa-search">
   <form>
 <li> <input type="text" name="search" placeholder="Search.." ></li>
</form></li></i>
    <li><a href="index.php">Home</a></li>
    <li class="submenu"><a href="#" title="productslist">Products</a>
      <ul class="megamenu">
        <div class="column">
          <ul>
            <h4>Women</h4>
            <li><a href="western.php">Western</a></li>
            <li><a href="womenethnic.php">Ethnic</a></li>
          
          </ul>
         
        </div>
        <div class="column">
          <ul>
      <h4>Men</h4>
            <li><a href="casualmen.php">Casual</a></li>
            <li><a href="formalmen.php">Formal</a></li>
            <li><a href="traditionalmen.php">Traditional</a></li>
            
          </ul>
          
        </div>
        <div class="column">
          <ul>
            <h4>Electronics</h4>
            <li><a href="mobile.php">Mobile</a></li>
            <li><a href="tablet.php">Tablet</a></li>
            <li><a href="laptop.php">Laptops</a></li>
            
           
  </ul></div></li>
  
  </ul>
  <li><a href="cart.php">View Cart</a></li>
 

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
         
  </ul>
</nav>
<br><BR>
    <div class="cover">
      <button class="button"style="font-size:24px" name="ASC" > <i class="fa fa-angle-double-down"></i><a href="elow.php">Low</a> &nsb;</button><br><br>
    </div>
    <div class="cover1">
      <button class="button"style="font-size:24px" name="DESC"> <i class="fa fa-angle-double-up"></i><a href="ehigh.php">High </a></button>
      </div>

    <div class="row" style="margin-top:10px;">
      <div class="container">

  <div class="jumbotron">
  <div id="content"> 

        <?php

          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products where category="women" and sub_cat="ethnic" order by price asc');
          if($result === FALSE){
            die(mysql_error());
           }
          echo '<br>';
          echo '<br>';
          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
             
              echo '<img class="img-rounded" alt="Cinque Terre" width="200" height="250" src="images/products/'.$obj->product_img_name.'"/>';

              echo '<p style="text-align:center"><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p  style="text-align:center"><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p  style="text-align:center"><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p  style="text-align:center"><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';



              if($obj->qty > 0){
                echo '<p style="text-align:right"><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;align:right;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

</div>
</div>


</div>
</div>





</body>
</html>