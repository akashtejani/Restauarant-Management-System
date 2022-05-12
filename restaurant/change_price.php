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
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header bg-primary text-white">Change price</div>
                    <div class="card-body">
                        <form action="change_price_process.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    <td><select name="item_no" class="form-control">
                                        <option selected>select Category</option>
                                        <?php
                                        include 'dao.php'; 
                                        $q = "select * from item where available=1";
                                       
                                        $query = mysqli_query($conn,$q);
                                       
                                        while($res = mysqli_fetch_array($query)){
                                        ?>
                                        <option value = <?php echo $res['item_no'];?> ><?php echo $res['item_name']." / "?> &#8377 <?php echo $res['price']."/- ";?></option>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="number" name="price" placeholder="Enter new price" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Apply change" name="change" class="btn btn-primary btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
</div>
<br>
<?php include("item_menu.php");
include("footer.php");
?>