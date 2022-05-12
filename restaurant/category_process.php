<?php include('dao.php');?>
<?php
$cat_name = $_POST['cat_name'];
if(isset($cat_name)){
    $sql = "INSERT INTO category(category_name) values('$cat_name');";
    if($conn->query($sql)==TRUE){                  
        header("location:additem.php");          
    }
}

?>