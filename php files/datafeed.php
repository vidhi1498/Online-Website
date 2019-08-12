

<?php

include 'config.php';

$exp = $_POST['experience'];
$com = $_POST['comments'];



 
   
if($mysqli->query("INSERT INTO feedback (exp,comment) VALUES('$exp', '$com')")){
  echo 'Data inserted';
  echo '<br/>';
 
}


 header ("location:thanks.php");
?>
