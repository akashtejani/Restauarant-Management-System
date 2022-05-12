<?php include("dao.php");?>
<?php    
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $sql = "SELECT * FROM login where username = '$username' and password = '$password'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        setcookie("RADMIN",$username);
        header('location:order.php');
    }else{
        header('location:login.php?error=1');
    }
?>