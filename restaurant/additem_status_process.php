<?php include('dao.php');?>
<?php
if(isset($_POST['disable'])){
    $item_disable_no = $_POST['item_disable_no'];
    if(isset($item_disable_no))
    $que = "UPDATE item SET available = 0 where item_no = $item_disable_no";
    $result = $conn->query($que);
    header('location:additem_status.php');
    }
if(isset($_POST['able'])){
    $item_able_no = $_POST['item_able_no'];
    if(isset($item_able_no))
    $que = "update item set available = 1 where item_no = $item_able_no";
    $result = $conn->query($que);
    header('location:additem_status.php');
}
?>

