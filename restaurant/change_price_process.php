<?php include('dao.php');?>
<?php
if(isset($_POST['change'])){
    $item_no = $_POST['item_no'];
    $price = $_POST['price'];
    }

    $que = "update item set price = $price where item_no = $item_no";
    $result = $conn->query($que);
    header('location:change_price.php');
      
?>

