<?php
  // Connect to a database

   $db_host = 'localhost';
   $db_user = 'root';
   $db_pass = '';
   $db_name = 'store';
  
   // Create mysqli object
   $mysqli = new mysqli( $db_host, $db_user,  $db_pass,  $db_name);
   //Handle error
   if(mysqli_connect_errno()){
	   echo 'This Connection failed' . mysqli_connect_error();
	   die();
   }


 

?>