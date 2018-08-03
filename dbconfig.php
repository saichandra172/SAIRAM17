<?php
   
define('DB_SERVER', 'localhost');
 
  define('DB_USERNAME', 'qroot');
 
  define('DB_PASSWORD', 'password');
   
define('DB_DATABASE', 'qroot');
  
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
?>
