<?php include('dao.php');?>
<?php
if(isset($_POST['add'])){
    $cat_no = $_POST['cat_no'];
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    }
    if(isset($cat_no) and isset($item_name) and isset($price)){
        $que = "insert into item(cat_no,item_name,price) values($cat_no,'$item_name',$price)";
        $result = $conn->query($que);
        header('location:admin.php');
    }  
?>

