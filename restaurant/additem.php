<?php
    $RADMIN = $_COOKIE['RADMIN'];
    if(!isset($RADMIN)){
        header('location:login.php?error=2');
    }
?>
<?php include("header.php");?>
<?php include("nav.php");?>
<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header bg-primary text-white">Add item</div>
                    <div class="card-body">
                        <form action="additem_process.php" method="POST">
                            <table class="table borderless">
                                <tr>
                                    <td id="demo">  </td>
                                </tr>
                                <tr>
                                    <td><select name="cat_no" class="form-control">
                                        <option selected>Item Category</option>
                                        <?php
                                        include 'dao.php'; 
                                        $q = "select * from category where available=1";
                                       
                                        $query = mysqli_query($conn,$q);
                                       
                                        while($res = mysqli_fetch_array($query)){
                                        ?>
                                        <option value = <?php echo $res['category_no'];?> ><?php echo $res['category_name'];?></option>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="item_name" placeholder="Enter item name" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="number" name="price" placeholder="Enter price" class="form-control"/></td>
                                </tr>
                               
                                    <td><input type="submit" value="add" name= "add" class="btn btn-primary btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
</div>
<br>



<?php
include("item_menu.php");
include("footer.php");?>