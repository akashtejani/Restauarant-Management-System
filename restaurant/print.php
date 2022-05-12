<?php
    $RADMIN = $_COOKIE['RADMIN'];
    if(!isset($RADMIN)){
        header('location:login.php?error=2');
    }
    $table_no = $_GET['table_no'];
    include 'dao.php'; 
    if(isset($_POST['add'])){
        $item_no = $_POST['item_no'];
        $qua = $_POST['quan'];
        if(isset($item_no) and isset($qua)){
            $que = "insert into $table_no(item_no,quan,price) values($item_no,$qua,NULL)";
            $conn->query($que);
        } 
        $p ="UPDATE $table_no
        SET price = (SELECT price
                          FROM item
                          WHERE item.item_no = $table_no.item_no)
        WHERE price is NULL;"; 
        $conn->query($p);
    }  
    ?> 
<?php include("header.php");?>
<?php include("nav.php");?>


<?php include("showorder.php");?>
<div class="container">
        <div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3"><button type="button" class="btn btn-primary btn-lg" onclick=window.location.href="print_page.php?table_no=<?php echo $_GET['table_no']?>" >Print Bill</button></div>
<div class="col-md-4"><p>Totel : <?php $qu ="select sum(price *quan) from $table_no";
  $qq = mysqli_query($conn,$qu);
  while($res = mysqli_fetch_array($qq)){
    echo $res['0'];} ?></p></div>
<div class="col-md-3"><button type="button" class="btn btn-danger btn-lg"  onclick=window.location.href="paid.php?table_no=<?php echo $_GET['table_no']?>" >Paid</button></div>
<div class="col-md-1"></div>
<?php include("footer.php");?>