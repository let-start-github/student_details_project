<?php
session_start();



if(isset($_REQUEST['submit'])){
$user_id = $_REQUEST['user_id'];
$pass = $_REQUEST['pass'];
include("dbconnection.php");
 
$my_query = "select * from login where user_id = '$user_id' and password = '$pass'";
$result = mysqli_query($conn,$my_query);
$count = mysqli_num_rows($result);
if($count == 1)
{
    
    $row = mysqli_fetch_array($result);
    $id = $row['u_id'];
    $_SESSION['user_id'] = $row['user_id'];
    header("location:loginpage.php?id=".$id."");
}
else{
    header("location:home.php?msg='error'");
}
}


?>