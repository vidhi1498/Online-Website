<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include  'config.php';


$echeck="select email from register where email=".$_POST['email'];
   $echk=mysql_query($echeck);
   $ecount=mysql_num_rows($echk);
  if($ecount!=0)
   {
      echo "Email already exists";
   }


   ?>