<?php include('dao.php');?>
<?php
$no = $_POST['no'];
$table_no= $_POST['table_no'];
if(isset($no) and isset($table_no)){
    $p = "select * from waiting where no=$no";
    $query = mysqli_query($conn,$p);
    while($res = mysqli_fetch_array($query)){
        $name = $res['name'];
    
    }
    $sql = "update ordermethod set name ='$name' where table_no = '$table_no'";
    $conn->query($sql);
    $q="delete from waiting where no = $no";
    $conn->query($q);               
        header("location:admin.php");      
}

?>