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
                    <div class="card-header bg-primary text-white">Add order</div>
                    <div class="card-body">
                        <form action="makeorder.php" method="get">
                            <table class="table borderless">
                                
                            <tr>
                                    

                                    <td><select name="table_no" class="form-control">
                                                <option selected>select table/parsal no</option>
                                                <?php
                                                include 'dao.php'; 
                                                $q = "select * from ordermethod where name is not NULL";
                                               
                                                $query = mysqli_query($conn,$q);
                                               
                                                while($res = mysqli_fetch_array($query)){
                                                ?>
                                                <option value = <?php echo $res['table_no'];?> ><?php echo $res['table_no']." / ".$res['name'];?></option>
                                                <?php } ?>
                                                </select>
        
                                            </td>
        
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
</div>


<?php include("footer.php");?>