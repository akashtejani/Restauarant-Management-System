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
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-hover">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">table_no</th> 
      <th scope="col">name</th>
      <th scope="col">total amount</th>
  </thead>
  <tbody>
  <?php 
  include("dao.php");
        $q = "select * from ordermethod";
        $qq = mysqli_query($conn,$q);
        $i =0;
        
                                       
        while($result = mysqli_fetch_array($qq)){
          $fin[$i]['table_no'] = $result['table_no'];
          $fin[$i]['name']= $result['name'];
          $i=$i+1;
        }
        ?>

<?php

foreach ($fin as $value) {
  ?><tr>
  <td><a style="color :black; text-decoration: none" href = "print.php?table_no=<?php echo $value['table_no'];?>"><?php echo $value['table_no'];?></a></td>
  <td><?php echo $value['name'];?></td>
  <td><?php $qu ="select sum(price *quan) from $value[table_no]";
  $que = mysqli_query($conn,$qu);
  while($res = mysqli_fetch_array($que)){
    echo $res['0'];
  }
  ?></td>
    </tr>
    <?php }
?>
        
 

      </tbody>
</table>
</div>
<div class="col-md-2"></div>
</div>
</div>


<?php include("footer.php");?>