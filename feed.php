   <?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>


 <?php

                 
                $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);
              
                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
                  echo '<input type="text" id="right-label" placeholder="'. $obj->fname. '" name="fname">';

                  echo '</div>';
                    echo '</div>';

                  echo '<div class="row">';
                  echo '<div class="small-3 columns">';
                  echo '<label for="right-label" class="right inline">Last Name</label>';
                  echo '</div>';
                  echo '<div class="small-8 columns end">';

                  echo '<input type="text" id="right-label" placeholder="'. $obj->lname. '" name="lname">';
               } 
                ?>

               



          <?php



          echo '
<!doctype html>
<head>
<style>
body{
	background-color:blue;
}
div.contain{
	text-align:center;
	display:block;
	border:1px solid;
	background-color:#00FFFF;
}
form{
	display:inline-block;
	margin-left:auto;
	margin-right:auto;
	text-align:left;
}
</style>
<title>FEEDBACK FORM</title>
</head>
<body>
<h1 align="center">FEEDBACK FORM</h1>
<div class="contain" >
<form action="" >
<table>' ;

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$product_id = $_GET['id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$result = $mysqli->query("SELECT qty FROM products WHERE id = ".$product_id);


if($result){

       while($row =mysqli_fetch_assoc($result))
	{
	echo '
	<tr>
	<td><label for="pro_name">PRODUCT NAME:</label></td>
	<td><input type="text" name="pro_name"  placeholder="Product name" value="'.$row["product_name"].'" disabled></td>
	</tr>
	<tr>
	<td><label for="ratings">RATINGS:</label></td>
	<td><input type="number" name="ratings"  maxlength="1" min="0" max="5"></td>
	</tr>';
	}
echo '
<tr><td><button type="submit">SUBMIT</button></td></tr>
</table>
</form>
</div>
</body>
</html>';
}
else
	echo "NO product found";
?>



 
 



