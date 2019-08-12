<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include  'config.php';
?>

<html>
<body>
        <h3>Hey Admin!</h3>



        <?php
            $search = $_POST['search'];

//$query = $mysqli->query("SELECT email, password from users");
  

         $result=$mysqli->query("SELECT * FROM `products` WHERE category='men' and `product_code` LIKE '%$search%' "); 
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<div class="large-6 columns" style="padding-left:0;">';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>New Qty</strong>:</p>';
              echo '</div>';
              echo '<div class="large-6 columns">';
              echo '<input type="number" name="quantity[]"/>';

                  echo '</div>';
              echo '</div>';
            }

          }
           

          else
            echo 'No product Found';

        ?><div class="row" style="margin-bottom:50%;">
    
        <center><p><input style="clear:both;" type="submit" class="button" value="Update"></p></center>
       

      </div>
      
    </div>

</div>

      </div>
    </div>


  </body>
</html>
