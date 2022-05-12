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
                    <div class="card-header bg-primary text-white">Add Category</div>
                    <div class="card-body">
                        <form action="category_process.php" method="POST">
                            <table class="table borderless">
                                <tr>
                                    <td id="demo">  </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="cat_name" placeholder="Enter Category name" class="form-control" onkeyup="validatecategory(this.value)"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Add" class="btn btn-primary btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br>
        <?php include("category_menu.php"); ?>
</div>


<?php include("footer.php");?>