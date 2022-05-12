<?php include('dao.php');?>
<?php
$no = $_POST['no'];
if(isset($no)){
    
    $q="delete from waiting where no = $no";
    $conn->query($q);               
        header("location:admin.php");  
}