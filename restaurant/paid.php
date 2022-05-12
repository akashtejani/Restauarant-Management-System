<?php include("header.php");
include("dao.php");
$table_no= $_GET['table_no'];
$que = "select name from ordermethod where table_no = '$table_no'";
                     $name = $conn->query($que); 
                     while($res = mysqli_fetch_array($name)){  
                     $name= $res[0];}

                     $qu = "select item.item_noitem.price,$table_no.quan from item inner join category join $table_no on $table_no.item_no=item.item_no and category.category_no=item.cat_no order by category.category_no";
                     $ques = mysqli_query($conn,$qu);
                     while($result = mysqli_fetch_array($ques)){
                     $temp['item_no']=$result['item_no'];
                    $temp['quan']=$result['quan']; 
                    $temp['price']=$result['price']; 
                     }
                     $qu ="select sum(price *quan) from $table_no";
  $qq = mysqli_query($conn,$qu);
  while($r = mysqli_fetch_array($qq)){
    $totel_bill= $r['0'];}
    $item_no=serialize(array($temp['item_no']));
    $quan=serialize(array($temp['quan']));
    $price=serialize(array($temp['price']));

    $p="insert into history(name,item_no,quan,price,totel_bill) values('$name','$item_no,'$quan','$price','$totel_bill')";
    $conn->query($p);
    
    $pp="delete from $table_no";
    $conn->query($pp);
    $r ="UPDATE ordermethod SET name = NULL WHERE table_no ='$table_no';";
    $conn->query($r);
    header('location:order.php');
    
                     
                     
                     ?> 


 <?php include("footer.php");?>