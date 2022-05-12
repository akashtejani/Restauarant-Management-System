<?php include("header.php");
include("dao.php");
$table_no= $_GET['table_no'];
    
    $pp="delete from $table_no";
    $conn->query($pp);
    $r ="UPDATE ordermethod SET name = NULL WHERE table_no ='$table_no';";
    $conn->query($r);
    header('location:order.php');
    
                     
                     
                     ?> 


 <?php include("footer.php");?>
