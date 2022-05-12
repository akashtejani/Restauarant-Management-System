<?php
    $RADMIN = $_COOKIE['RADMIN'];
    if(!isset($RADMIN)){
        header('location:login.php?error=2');
    }
?>
<?php include("header.php");?>
<?php include("nav.php");?>
<br>
<br>
<div class="container">
        <div class="row">
            <div class="col-md-4">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <div class="card ">
                    <div class="card-header bg-warning text-white">Add to waiting-list</div>
                    <div class="card-body">
                        <form action="addto_waiting.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    <td><input type="text" name="name" placeholder="Enter customer name" class="form-control"/></td>
                                </tr>
                                <tr>
                                <select name="type" class="form-control">
                                <option selected>select method</option>
                                <option value=1>On table</option>
                                <option value=0>Parsal</option>
                                </select>
                                </tr>
                                <tr>
                                    <td><input type="number" name="person" placeholder="Enter total person" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Add" class="btn btn-warning btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                </div>
            
                <div class="col-md-1"></div>
            </div>
            </div>




            <div class="col-md-4">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <div class="card ">
                    <div class="card-header bg-success text-white">Assign table</div>
                    <div class="card-body">
                        <form action="assign_table.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    

                            <td><select name="no" class="form-control">
                                        <option selected>select name</option>
                                        <?php
                                        include 'dao.php'; 
                                        $q = "select * from waiting order by no ";
                                       
                                        $query = mysqli_query($conn,$q);
                                       
                                        while($res = mysqli_fetch_array($query)){
                                        ?>
                                        <option value = <?php echo $res['no'];?> ><?php echo $res['name']." / ";
                                        if($res['type']=1){ echo "On Table";}
                                        if($res['type']=0){ echo "parsal";}

                                        ?></option>
                                        <?php } ?>
                                        </select>

                                    </td>

                                    </tr>
                                    <tr>
                                    
                                    <td><select name="table_no" class="form-control">
                                        <option selected>select table</option>
                                        <?php
                                        $qu = "select table_no from ordermethod where name is NULL";
                                       
                                        $que = mysqli_query($conn,$qu);
                                       
                                        while($result = mysqli_fetch_array($que)){
                                        ?>
                                        <option value = <?php echo $result['table_no'];?> ><?php echo $result['table_no'];
                                        ?></option>
                                        <?php } ?>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="assign" class="btn btn-success btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            </div>




            <div class="col-md-4">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <div class="card ">
                    <div class="card-header bg-danger text-white">Remove From List</div>
                    <div class="card-body">
                        <form action="remove.php" method="POST">
                            <table class="table borderless">
                            <tr>
                                    

                            <td><select name="no" class="form-control">
                                        <option selected>select name</option>
                                        <?php
                                        include 'dao.php'; 
                                        $q = "select * from waiting order by no ";
                                       
                                        $query = mysqli_query($conn,$q);
                                       
                                        while($res = mysqli_fetch_array($query)){
                                        ?>
                                        <option value = <?php echo $res['no'];?> ><?php echo $res['name']." / ";
                                        if($res['type']=1){ echo "On Table";}
                                        if($res['type']=0){ echo "parsal";}

                                        ?></option>
                                        <?php } ?>
                                        </select>

                                    </td>

                                    </tr>
                                   
                                <tr>
                                    <td><input type="submit" value="Remove name" name="delete" class="btn btn-danger btn-full"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            </div>





        </div>
</div>



            
           



           
<br>
        <?php include("category_menu.php");?>
        <br>
        <?php include("item_menu.php");?>



<?php include("footer.php");?>