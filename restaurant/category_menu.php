<div class="container">
        <div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-hover">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Category Name</th>
      <th scope="col">Status</th>
  </thead>
  <tbody>
  <?php include("dao.php");
        $qu = "select category_name,available from category";

        $que = mysqli_query($conn,$qu);
                                       
        while($result = mysqli_fetch_array($que)){
        ?>
        <tr>
        <td><?php echo $result['category_name']; ?></td>
        <td><?php if($result['available']==0){ echo "Not Available";}
        if($result['available']==1){ echo "Available";}
        ?></td>
      
      
      <?php }?>
      </tbody>
</table>
</div>
<div class="col-md-2"></div>
</div>
</div>


      


      
         

    
