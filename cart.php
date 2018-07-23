<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

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

    <style type="text/css">
    body {
  background: #fff;
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
</style></head>
  </head>
  <body>

    

<center>

    <div class="container">
    <div class="striped">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr >';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
          
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }


          
          echo '<tr>';
          echo '<td colspan="3" align="left">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }

          else {
       
            echo '<a href="login.php"><button  class=" " style=" float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>
          </div>
          </center>
</div>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">




        

      </div>
    </div>





   
  </body>
</html>
