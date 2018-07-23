<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:feedback.php");
}
if(isset($_SESSION["email"])){

        header("location:feedback.php");
}
$user = $_SESSION["email"];

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


 $result = $mysqli->query("SELECT * from orders where email = ".$user);
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
          }

/*$conn =  mysqli_connect('localhost' , 'root' , '' , 'cool_stuff') or die("unable");
$cmd1= "SELECT email from orders where cust_id=1 ";
$result=mysqli_query($conn,$cmd1);
if(mysqli_num_rows($result)>0)
{
	$row =mysqli_fetch_assoc($result);
	echo '<tr> <td> <label for="cus_name">CUSTOMER NAME:</label> </td>
	<td><input type="text" name="cus_name"  placeholder="Customer Name" value="'.$row["first_name"].'"disabled></td></tr>';
}
else
	echo " no customer name found:";
$cmd2="SELECT product_code from orders where  ";
$result=mysqli_query($conn,$cmd2);
if(mysqli_num_rows($result)>0)
{
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
	}*/
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