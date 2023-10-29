<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>Document</title>
    <style>
        body{
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
       }
    </style>
</head>
<body background="img\profback.jpg">
    <?php
include 'dbconnection.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $my_qry1 = mysqli_query($conn,"SELECT `user_id`, `image_name` FROM `image` WHERE`user_id`='$id'");
    $my_arr1= mysqli_fetch_array($my_qry1);

    $my_qry2= mysqli_query($conn,"SELECT `password`,`user_id` FROM `login` WHERE `u_id`='$id'");
    $my_arr2= mysqli_fetch_array($my_qry2);
    

     $my_qry3 = mysqli_query($conn,"SELECT `username`, `age`, `dob`, `email`, `phone`,`district`, `at`
     FROM `registration` WHERE `user_id`='$id'");
     $my_arr3= mysqli_fetch_array($my_qry3);
    
}



?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="javascript:void(0)">Logo</a> -->
          <img src="img\logo.jpg" class="navbar-brand rounded-pill" style="height:5%;width:5%;" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
              <button class="btn btn-danger"><a class="text-white" href="loginpage.php?id=<?php echo $id; ?>">HOME</a></button>
              </li>
              
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MENU
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="myprofile.php?id=<?php echo $id;?>">MY PROFILE</a></li>
            <li><a class="dropdown-item" href="../snake_game/index.php">GAME</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="network.php?id=<?php echo $id;?>">NETWORK</a></li>
          </ul>
        </li>
              <li class="nav-item">
                <!-- <button class="btn btn-danger"><a class="text-white" href="logout.php">LOG OUT</a></button> -->
              </li>
            </ul>
            <!-- <button class="btn btn-danger navbar-item"><a class="text-white" href="logout.php">LOG OUT</a></button> -->
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <br><br><br>
    <div style="border-radius: 100PX;" class="container">
       <div class="row">
        <div style="border-radius: 200PX;" class="container rounded-pill col-sm-6">
        <img src="<?php  echo $my_arr1['image_name']; ?>" class="img-fluid rounded-pill" style="border-radius: 900px;height:1000px;width:1350px;" alt="">
        <!-- <button type="submit" class="btn btn-primary" value="imageupdate"><a href="edit.php?e_id=<?php echo $id; ?>" class="text-white">EDIT</a></button> -->
        <button onclick="document.getElementById('id01').style.display='block'" style="border-radius:10px;" class="w3-button w3-green w3-large">EDIT</button>

    </div>
        <div style="border-radius: 30PX;background-color: rgb(0, 0, 0); font-size: 20px;" class="container col-sm-6 text-white">
            <br><br><p>NAME : <?php echo $my_arr3['username']    ?></p>
            <p>AGE: <?php  echo $my_arr3['age']    ?></p>
            <p>EMAIL : <?php  echo $my_arr3['email']    ?></p>
            <p>AT : <?php echo $my_arr3['at']     ?></p>
            <p>DIST : <?php echo $my_arr3['district']     ?></p>
            <p>DOB : <?php   echo $my_arr3['dob']   ?></p>
            <p>PHONE : <?php echo $my_arr3['phone']     ?></p>
            <p>USER ID : <?php echo $my_arr2['user_id']     ?></p>
            
            <button type="submit" class="btn btn-primary" value="update"><a href="edit.php?e_id=<?php echo $id; ?>" class="text-white">EDIT</a></button>
           </div>
           

           
       </div>
       
 
        
    </div>
    <html>
      <head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>

<div class="w3-container">
  
  

  <div id="id01" style="display:none;" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="<?php  echo $my_arr1['image_name']; ?>" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="edit.php?i_id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <div class="w3-section">
          <label><b>CHANGE YOUR PROFILE PICTURE</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="file" placeholder="upload image" name="fileToUpload" required>
          

          <button class="w3-button w3-block w3-green w3-section w3-padding" name="change_image" type="submit" value="change_image"><a href="edit.php?i_id=<?php echo $id; ?>" class="text-white">UPLOAD</a></button>
          
        </div>
      </form>

      
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
    
      </div>

    </div>
  </div>
</div>
            
</body>
</html>
   
</body>
</html>