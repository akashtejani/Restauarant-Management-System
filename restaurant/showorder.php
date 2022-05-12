<div class="container">
        <div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-hover">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Item Name</th> 
      <th scope="col">Category Name</th>
      <th scope="col">quantity</th>
      <th scope="col">Price</th>
      <th scope="col">amount</th>
  </thead>
  <tbody>
  <?php 
  include("dao.php");
        $qu = "select item.item_name,category.category_name,item.price,$table_no.quan from item inner join category join $table_no on $table_no.item_no=item.item_no and category.category_no=item.cat_no order by category.category_no";

        $ques = mysqli_query($conn,$qu);
                                       
        while($result = mysqli_fetch_array($ques)){
        ?>
        <tr>
        <td><?php echo $result['item_name']; ?></td>
        <td><?php echo $result['category_name']; ?></td>
        <td><?php echo $result['quan']; ?></td>
        <td><?php echo $result['price']; ?></td>
        <td><?php echo $result['quan']*$result['price'];; ?></td>
      
      
      <?php }?>
      </tbody>
</table>
</div>
<div class="col-md-2"></div>
</div>
</div>
