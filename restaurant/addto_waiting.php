<?php include('dao.php');?>
<?php
$name = $_POST['name'];
$type= $_POST['type'];
$person = $_POST['person'];
if(isset($name) and isset($type) and isset($person)){
    $sql = "INSERT INTO waiting (time,name,type,person) values(curdate(),'$name',$type,$person);";
    if($conn->query($sql)==TRUE){                  
        header("location:admin.php");          
    }
}

?>