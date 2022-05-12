<?php
    $RADMIN = $_COOKIE['RADMIN'];
    if(!isset($RADMIN)){
        header('location:login.php?error=2');
    }
?>
<?php include("header.php");?>
<?php include("nav.php");?>
<br>
<div class="container">
        <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header bg-warning text-white">AAvailable to Unavailable
                        
                    </div>
                    <div class="card-body">
                        <form ng-app="disable" action="additem_status_process.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    <td><select name="item_disable_no" class="form-control">
                                        <option selected>select Item</option>
                                        <?php
                                        include 'dao.php'; 
                                        $q = "select item.item_no,item.item_name,category.category_name from item inner join category on item.cat_no=category.category_no where item.available=1 and category.available=1";
                                       
                                        $query = mysqli_query($conn,$q);
                                       
                                        while($res = mysqli_fetch_array($query)){
                                        ?>
                                        <option value = <?php echo $res['item_no'];?> ><?php echo $res['item_name']." / ". $res['category_name'];?></option>
                                        <?php } ?>

                                    </td>
                                </tr>
                            
                                <tr>
                                    <td><input type="submit" value="Confirm Unavailable" name="disable" class="btn btn-warning btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
            <div class="card ">
                    <div class="card-header bg-info text-white">Unavailable to Available</div>
                    <div class="card-body">
                        <form action="additem_status_process.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    <td><select name="item_able_no" class="form-control">
                                        <option selected>select Item</option>
                                        <?php
                                        include 'dao.php'; 
                                        $q = "select item.item_no,item.item_name,category.category_name from item inner join category on item.cat_no=category.category_no where item.available=0 and category.available=1";
                                       
                                        $query = mysqli_query($conn,$q);
                                       
                                        while($res = mysqli_fetch_array($query)){
                                        ?>
                                        <option value = <?php echo $res['item_no'];?> ><?php echo $res['item_name']." / ". $res['category_name'];?></option>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Confirm Available" name="able"class="btn btn-info btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
    </div>
</div>
<br>


<?php 
include("item_menu.php");
include("footer.php");?>