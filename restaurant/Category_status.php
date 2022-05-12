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
                    <div class="card-header bg-danger text-white">Available to Unavailable</div>
                    <div class="card-body">
                        <form action="category_status_process.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    <td><select name="cat_disable_no" class="form-control">
                                        <option selected>select Category</option>
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
                                    <td><input type="submit" value="Confirm Unavailable" name="disable" class="btn btn-danger btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
            <div class="card ">
                    <div class="card-header bg-success text-white">Unavailable to Available</div>
                    <div class="card-body">
                        <form action="category_status_process.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    <td><select name="cat_able_no" class="form-control">
                                        <option selected>select Category</option>
                                        <?php
                                        include 'dao.php'; 
                                        $q = "select * from category where available=0";
                                       
                                        $query = mysqli_query($conn,$q);
                                       
                                        while($res = mysqli_fetch_array($query)){
                                        ?>
                                        <option value = <?php echo $res['category_no'];?> ><?php echo $res['category_name'];?></option>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Confirm Available" name="able"class="btn btn-success btn-full"/></td>
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
include("category_menu.php");
include("footer.php");?>