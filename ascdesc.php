<?php


// Ascending Order
if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM users1 ORDER BY age ASC";
    $result = executeQuery($asc_query);
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM users1 ORDER BY age DESC";
          $result = executeQuery($desc_query);
    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM users1";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "cool_stuff");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> ascdec </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
			.cover{
				text-align:right;
			}
			.button{
				position:absolute;
				top:20%;
				right:5%;
			}
        </style>
    </head>
    <body>
      
        <form action="ascdesc.php" method="post">				<!-- INSERT THE NAME OF PAAGE HERE IN ACTION PLEASE-->
          
            <!--<input type="submit" name="ASC" value="Ascending"><br><br>
            <input type="submit" name="DESC" value="Descending"><br><br>-->
			<div class="cover">
			<button class="button"style="font-size:24px" name="ASC"> <i class="fa fa-angle-double-down"></i></button>
			<button class="button"style="font-size:24px" name="DESC"> <i class="fa fa-angle-double-up"></i></button>
			</div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                </tr>
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
      
    </body>
</html>