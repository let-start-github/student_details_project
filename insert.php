<?php
include('dbconnection.php');


 if(isset($_POST['username']) && isset($_POST['submit']))
 {
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
  
    $name=$_POST['username'];
    $father=$_POST['father_name'];
    $mother = $_POST['mother_name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone_no'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $dist = $_POST['dist'];
    $at=$_POST['at'];
    $po=$_POST['po'];
    $pin= $_POST['pin'];
    $my_sql = "INSERT INTO `registration` (`username`, `fathername`, `mothername`, `age`, `dob`, `email`, `phone`, `gender`, `state`, `district`, `at`, `po`, `pin`)
    VALUES ('$name','$father','$mother','$age','$dob','$email','$phone','$gender','$state','$dist','$at','$po','$pin')";
   mysqli_query($conn,$my_sql);

   $id = mysqli_insert_id($conn);
  
   $target_folder='uploads/';
   $user_p = $_FILES['fileToUpload'];
  
   $file_name = time().$user_p['name'];
   $target_file = $target_folder.$file_name;
  
  
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] ,$target_file);
   mysqli_query($conn,"INSERT INTO `image` (`user_id`, `image_name`) VALUES ('$id','$target_file')");

   $user_id=$_POST['user_id'];
   $pass = $_POST['password'];
   $my_s = "INSERT INTO `login` (`password`, `u_id`, `user_id`) VALUES ('$pass','$id','$user_id')";
   mysqli_query($conn,$my_s);


   header("location:home.php");
   
 }

 


 ?>
 <!-- foreach($_REQUEST['mycheck'] as $facility_id)
   {
    $sql = mysqli_query($conn,"INSERT INTO `user_facility` (`user_facility_id`, `user_id`, `facility_id`)
     VALUES (NULL,$id,$facility_id)");
   } -->