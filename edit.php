<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>edit</title>
</head>
<body>
    <?php
    include 'dbconnection.php';
    if(isset($_GET['e_id']))
    {
        $id=$_GET['e_id'];
        $my_sql = mysqli_query($conn,"SELECT * FROM `registration` WHERE `user_id`='$id'");
        $my_arr = mysqli_fetch_array($my_sql);
        ?>
        <div class="container">
        <form action="" method="post" enctype="multipart/form-data" class="container p-5" style="background-color:aqua;">
            <!-- <div class="form-group">
                <label for="">UPLOAD YOUR IMAGE</label>
                <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
            </div> -->
            <div class="form-group">
                    <h1 style="text-align:center;color:red;">UPDATE YOUR DETAILS</h1>
                </div><br>
            <div class="form-group">
                    <label for="name">USERNAME</label>
                    <input type="text" name="username" id="name" class="form-control" value="<?php echo $my_arr['username']   ?>"  required>
                </div><br>
                <div class="form-group">
                    <label for="f_name">FATHER NAME</label>
                    <input type="text" name="father_name" id="f_name" class="form-control" value="<?php echo $my_arr['fathername']   ?>"  required>
                </div><br>
                <div class="form-group">
                    <label for="m_name">MOTHER NAME</label>
                    <input type="text" name="mother_name" id="m_name" class="form-control" value="<?php echo $my_arr['mothername']   ?>"  required>
                </div><br>
                <div class="form-group">
                    <label for="">AGE</label>
                    <input type="number" name="age" id="age" class="form-control" value="<?php echo $my_arr['age']   ?>"  required>
                </div><br>
                <div class="form-group">
                    <label for="">DATE OF BIRTH</label>
                    <input type="date" name="dob" id="dob" class="form-control" required>
                </div><br>
                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input type="email" name="email" id="" class="form-control" value="<?php echo $my_arr['email']   ?>"  required>
                    <small style="color:green">we will never share your email....</small>
                </div><br>
                <div class="form-group">
                    <label for="">PHONE NO</label>
                    <input type="number" name="phone_no" id="" class="form-control" value="<?php echo $my_arr['phone']   ?>"  required>
                    <small style="color:green">we will never share your phone no....</small>
                </div><br>
                <div class="form-group">
                    <label for="">GENDER</label>
                    <input type="radio" name="gender" id="male" value="male" >
                    <label for="male">male</label>
                    <input type="radio" name="gender" id="female" value="female" >
                    <label for="female">female</label>        

                </div><br>
                <div class="form-group">
                    <label for="">SELECT YOUR STATE</label>
                    <select name="state" id="">
                        <option value="odisha">odisha</option>
                        <option value="bihar">bihar</option>
                        <option value="jhadkhand">jhadkhand</option>
                        <option value="andhrapradesh">andhrapradesh</option>
                        <option value="tamilnadu">tamilnadu</option>
                        <option value="paschimbang">paschimbang</option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="">SELECT YOUR DISTRICT</label>
                    <select name="dist" id="">
                        <option value="kendrapara">kendrapara</option>
                        <option value="baleswar">baleswar</option>
                        <option value="bhadrak">bhadrak</option>
                        <option value="jajpur">jajpur</option>
                        <option value="dhenkanal">dhenkanal</option>
                        <option value="cuttack">cuttack</option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="at">AT</label>
                    <input type="text" name="at" id="at" class="form-control" value="<?php echo $my_arr['at']   ?>" required>
                </div><br>
                <div class="form-group">
                    <label for="po">PO</label>
                    <input type="text" name="po" id="po" class="form-control" value="<?php echo $my_arr['po']   ?>" required>
                </div><br>
                <div class="form-group">
                    <label for="pin">PIN</label>
                    <input type="text" name="pin" id="pin" class="form-control" value="<?php echo $my_arr['pin']   ?>"  required>
                </div><br>
                <div class="form-group">
                    <button type="submit" name="submit" onclick="check()" class="btn btn-primary" value="update">UPDATE</button>
                    
                </div>


        </form>

    </div>
        <?php
      
    }
   else if($_GET['i_id'])
{
    $id = $_GET['i_id'];
    // echo'<pre>';
    // print_r($_FILES);
    $target_folder='uploads/';
   $user_p = $_FILES['fileToUpload'];
  
   $file_name = time().$user_p['name'];
   $target_file = $target_folder.$file_name;
  
  
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] ,$target_file);
   mysqli_query($conn,"UPDATE `image` SET `image_name`='$target_file',`image`='$target_file' WHERE `user_id`='$id'");
   header("location:myprofile.php?id=$id");
   session_unset();
  

}
    
    if(isset($_REQUEST['username']) && isset($_REQUEST['submit']))
    {
    
        if($_REQUEST['submit'] == 'update')
        {
            $name=$_POST['username'];
    $father=$_POST['father_name'];
   $mother  = $_POST['mother_name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone_no'];
   
    $state = $_POST['state'];
    $dist = $_POST['dist'];
    $at=$_POST['at'];
    $po=$_POST['po'];
    $pin= $_POST['pin'];

        mysqli_query($conn,"UPDATE `registration` SET `username`='$name',`fathername`='$father',`mothername`='$mother',`age`='$age',
        `dob`='$dob',`email`='$email',`phone`='$phone',`state`='$state',`district`='$dist',`at`='$at',`po`='$po',`pin`='$pin' WHERE `user_id`='$id'");
        header("location:myprofile.php?id=$id");
        session_unset();
        ?>
            
        <?php

        }
    }

?>
<?php


?>
    
</body>
</html>