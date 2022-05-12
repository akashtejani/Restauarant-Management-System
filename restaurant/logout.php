<?php
   
   $RADMIN = $_COOKIE['RADMIN'];
   if(isset($RADMIN)){
       setcookie('RADMIN', NULL); 
       unset($_COOKIE['RADMIN']);      
       header('location:login.php');
   }
   
?>