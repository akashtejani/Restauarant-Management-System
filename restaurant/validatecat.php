<?php include("dao.php");?>
<?php    
    $cat_name = $_GET['cat_name'];    
    $sql = "SELECT * FROM category where category_name = '$cat_name'";
    $result = $conn->query($sql);
    
    if($result -> num_rows > 0){
        echo "Category Already Exits.";
    }else{
        echo "Go Ahead..";
    }
?>