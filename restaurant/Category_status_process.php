<?php include('dao.php');?>
<?php
if(isset($_POST['disable'])){
    $cat_disable_no = $_POST['cat_disable_no'];
    if(isset($cat_disable_no))
    $que = "UPDATE category SET available = 0 where category_no = $cat_disable_no";
    $conn->query($que);
    header('location:admin.php');
    }
if(isset($_POST['able'])){
    $cat_able_no = $_POST['cat_able_no'];
    if(isset($cat_able_no))
    $que = "update category set available = 1 where category_no = $cat_able_no";
    $conn->query($que);
    header('location:additem_status.php');
}
?>

