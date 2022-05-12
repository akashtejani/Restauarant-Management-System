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
<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header bg-primary text-white"><?php echo $table_no?></div>
                    <div class="card-body">
                        <form action="" method="post">
                        <table class="table borderless">
                        <tr>
                                    <select name="item_no" class="form-control">
                                                <option selected>select food</option>
                                                <?php
                                                include 'dao.php'; 
                                                $q="select item.item_no,item.item_name,category.category_name,item.price from item inner join category on item.cat_no = category.category_no where category.available=1 and item.available=1 order by category.category_no";
                                               
                                                $query = mysqli_query($conn,$q);
                                               
                                                while($res = mysqli_fetch_array($query)){
                                                ?>
                                                <option value = <?php echo $res['item_no'];?> ><?php echo $res['item_name']." / ".$res['category_name']." / ".$res['price'];
                                                
        
                                                ?></option>
                                                <?php } ?>
                                                </select>
                                                <tr>
                                    <td><input type="number" name="quan" placeholder="Enter quantity" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Add" name="add" class="btn btn-primary btn-full"/></td>
                                </tr>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br>
</div>

<?php include("showorder.php");?>
<?php include("footer.php");?>