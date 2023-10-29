<?php
include('dbconnection.php');

if(isset($_GET['d_id']))
{
    $my_qry = "DELETE FROM `registration` WHERE `user_id`=".$_GET['d_id'];
    mysqli_query($conn,$my_qry);
    header("location:table.php");                                
}




?>