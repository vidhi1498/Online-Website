<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include('config.php')
?>

<html>
<head>
<title>Welcome to cool_stuffs</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<meta charset="utf-8">
<!--meta tag viewport purpose is to scale screen correctly-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/bootstrap.min.css" >

<style>
.post-container{
    margin: 20px 20px 0 0;  
    border:5px solid #333;
}


body {
  background: #fff;
  padding :0;
  margin:0;
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
  margin-top:-50px;
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
  background: #fff;                         /* kachra mainis here */
}
nav > ul > li > a:hover{
color:#000;
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
form.search input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid white;
    float: left;
    width: 80%;
    background: #f1f1f1;
}
.serach{
width:10px;
width:10px;
padding:5px;
border-radius: 0 10px 10px0;
border:none;
border: 1px solid white;
font-size:17px;
text-align:center;
margin-top:13px;
}
.searchb
{
 float: left;
    width: 30px;
  height: 20px;
   
    background: #2196F3;
    color: white;
    font-size: 15px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}
#slideshow { 
    margin-top: 45px ; 
    position: relative; 
    width: 100%; 
    height: 100%;
    padding:none;
    //box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#slideshow > div { 
    position: absolute; 
  width:100%;
  height:50%;
}
#slideshow > div > img{
width:100%;
height:100%;
}
#slideshow1{ 
    margin-top: 45px ; 
    position: relative; 
    width: 100%; 
    height: 100%;
    padding:none;
  }
  #slideshow1 > div { 
    position: absolute; 
  width:100%;
  height:50%;
}
#slideshow1 > div > img{
width:100%;
height:100%;
}
</style></head>
<body>
<nav>
  <ul>
  <li>
<?php

          if(isset($_SESSION['username'])){
            
            echo '<h3 style="font-family: cursive"> Hey ' .$_SESSION['fname'] .'!!</h3></p></li>';
          }
?>
  
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
        </li>
         
  </ul></li></ul></nav>
</nav>
  
 

  <div id="slideshow1" style="top:50px">
    <div >
       <img src="https://littleshelly.me/assets/images/2016/08/shopping-blog-post-cover-1024x344.jpg" >
       </div >
       <div style="background-color:orange">
  <form action="mentraditional.php">

  <h1 style="margin-left:150px ;color: brown; font-style:Monotype Corsiva">New Arrival </h1>
  <input type="image" src="images/products/m6.jpg" alt="Submit" style="margin-left:180px">
  <input type="image" src="images/products/m7.jpg" alt="Submit">
   <input type="image" src="images/products/m8.jpg" alt="Submit">
</form>
</div>

       
       <div >
       <img src="http://top10tale.com/wp-content/uploads/2016/05/deprives-you-of-tangibility.jpg" >
       </div>
          
  <div style="background-color:blue">
  <form action="laptop.php">

  <h1 style="margin-left:150px ;color: brown; font-style:Monotype Corsiva">New Generation laptops </h1>
  <input type="image" src="images/products/lap1.jpeg" alt="Submit" style="margin-left:180px">
  <input type="image" src="images/products/lap2.jpeg" alt="Submit">
   <input type="image" src="images/products/lap4.jpeg" alt="Submit">
</form>
</div>


<div style="background-color: pink">
  <form action="mobile.php">

  <h1 style="margin-left:150px ;color: brown; font-style:Monotype Corsiva">New Generation Mobile </h1>
  <input type="image" src="images/products/mob2.jpg" alt="Submit" style="margin-left:180px">
  <input type="image" src="images/products/mob4.jpg" alt="Submit">
   <input type="image" src="images/products/tab1.jpg" alt="Submit">
</form>
</div>





</div>
</div>
</div>



</div>

<br><br>

  <div>
  
  <form action="index.php">

<h1 style="font-family: cursive;
  font-size: 24px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 26.4px;
  margin-left:150px; color : brown;">NEW ARRIVAL</h1>

  <input type="image" src="images/products/t.jpg" alt="Submit" style="margin-left:180px">
 <input type="image" src="images/products/west2.jpg" alt="Submit">
   <input type="image" src="images/products/et5.jpg" alt="Submit">
</form></div>
  
  <div>
  

  
  <form action="western.php">

  <h1 style="margin-left:150px; color : brown; font-style:Monotype Corsiva">Trending Western </h1>
  <input type="image"  src="images/products/et3.jpg" alt="Submit" style="margin-left:180px;width:250;height: 400"">
  <input type="image" src="images/products/et2.jpg" alt="Submit">
   <input type="image" src="images/products/west.jpg" alt="Submit">
</form>

<form action="traditionalmen.php">

  <h1 style="margin-left:150px; color : brown; font-style:Monotype Corsiva">Trending Western </h1>
  <input type="image" src="images/products/mf3.jpg" alt="Submit" style="margin-left:180px; width:250;height: 300">
  <input type="image" src="images/products/mf4.jpg" alt="Submit" style=" width:250;height: 300">
   <input type="image" src="images/products/mf5.jpg" alt="Submit"   style=" width:250;height: 300">
</form>
</div>

<br>
<br>

  
  
  
  <div class="jumbotron">
   <div style="background-color:grey">
  <strong>Shop with us!!</strong>
<p> We have all planned our trips to the clothing store in advance, vividly dreaming about what we would buy once 
there. Some of us even have sales assistants for friends and have often asked them for a favour or two during peak 
shopping season (read: festivals and sales). But what we can all admit to is that we have always wished it was 
easier than to go down to the store in dense traffic, navigating through throngs of fashionistas, all vying for the 
same trendy clothing items, waiting in line to try on our top picks in the trial rooms, etc. </p>

<p> Well, you can do all this from the comfort of your home while enjoying many online shopping benefits, right from 
irresistible deals and discounts to a robust user interface with many shopping filters (based on various categories 
  of clothing, brands, budget, etc.). to make your shopping experience truly hassle free. Myntra, THE place to be 
when it comes to the latest in fashion, offers you fine, high-quality merchandise – go ahead and indulge in a bit of 
shopping online for men, women and kids. You can even pick up gift sets for your near and dear ones while being 
absolutely certain that it will put a smile on their faces. Go ahead and shop till you drop on India’s largest online 
fashion store. </p>
<h3> 
</p>

<h3><strong>Avail added online shopping benefits  </strong></h3>
<p>
Make sure to use our card or cash on delivery option, easy 30-day returns policy, try and buy option (for select products), and other
 customer-friendly features. A comprehensive sizing guide and detailed product descriptions coupled with high-resolution product 
 shots will give you all the information to make the right buying decision.
</p>
<p>
You just need to pay for the product, while we ensure free shipping on almost everything. You can also buy gifts for your loved ones 
and avail our special gift-wrap facility at a nominal cost on Myntra.
</p>
<p>
Give your wardrobe an upgrade with stylish clothing – head to Myntra.com for a great online fashion shopping experience now!
</p></div></footer></div>
  </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  <script type="text/javascript">
  $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(100)
    .next()
    .fadeIn(100)
    .end()
    .appendTo('#slideshow');
},  3000);
$("#slideshow1 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow1 > div:first')
    .fadeOut(100)
    .next()
    .fadeIn(100)
    .end()
    .appendTo('#slideshow1');
},  3000);
</script>
</body>
</html>