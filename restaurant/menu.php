<?php include("header.php");?>
<div class="container">
        <div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-hover">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Item Name</th> 
      <th scope="col">Category Name</th>
      <th scope="col">Price</th>
  </thead>
  <tbody>
  <?php 
  include("dao.php");
        $qu = "select item.item_name,category.category_name,item.price,item.available from item inner join category on item.cat_no= category.category_no where category.available=1 order by category.category_no";

        $que = mysqli_query($conn,$qu);
                                       
        while($result = mysqli_fetch_array($que)){
        ?>
        <tr>
        <td><?php echo $result['item_name']; ?></td>
        <td><?php echo $result['category_name']; ?></td>
        <td><?php echo $result['price']; ?></td>
        </td>
      
      
      <?php }?>
      </tbody>
</table>
</div>
<div class="col-md-2"></div>
</div>
</div>
