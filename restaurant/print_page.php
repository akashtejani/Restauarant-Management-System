<?php include("header.php");
include("dao.php");
$table_no= $_GET['table_no'];
?>

<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-body">
             <div class="row mb-4">
                 <div class="col-sm-6">
                     <h5 class="mb-3"></h5>
                     <h3 class="text-dark mb-1"></h3>
                     
                 </div>
                 <div class="col-sm-6 ">
                     <h2 class="mb-3">Name : <?php 
                     $que = "select name from ordermethod where table_no = '$table_no'";
                     $name = $conn->query($que); 
                     while($ans = mysqli_fetch_array($name)){  
                     echo $ans[0];}?>    </h2>
                     
                 </div>
             </div>
             <div class="table-responsive-sm">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th>Item</th>
                             <th class="right">Price</th>
                             <th class="center">Qty</th>
                             <th class="right">Amount</th>
                         </tr>
                     </thead>
                     <tbody>
                    <?php $qu = "select item.item_name,category.category_name,item.price,$table_no.quan from item inner join category join $table_no on $table_no.item_no=item.item_no and category.category_no=item.cat_no order by category.category_no";
                    $ques = mysqli_query($conn,$qu);
                    while($result = mysqli_fetch_array($ques)){
                        ?>
                        <tr>
                        <td><?php echo $result['item_name']; ?></td>
                        <td><?php echo $result['quan']; ?></td>
                        <td><?php echo $result['price']; ?></td>
                        <td><?php echo $result['quan']*$result['price'];; ?></td>
                      
                      
                      <?php }?>

                     </tbody>
                 </table>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-sm-5">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                         <tbody>
                             
                                 <td class="left">
                                     <strong class="text-dark">Total Amount :</strong> </td>
                                 <td class="right">
                                     <strong class="text-dark"><?php   
                                     $q = "select sum(price *quan) from $table_no";
                                     $qq = $conn->query($q); 
                                     while($am = mysqli_fetch_array($qq)){  
                                     echo $am[0];}?>    </h3>
                                     </strong>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div><script type="text/javascript">
      window.onload = function() { window.print(); }
 </script>


 <?php include("footer.php");?>
 