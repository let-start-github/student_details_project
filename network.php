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
            background-attachment:fixed;
            
        }
    </style>
</head>
<body background="img\nteworkbackground.jpg">
<?php
$id = $_GET['id'];
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
            <li><a class="dropdown-item" href="network.php">NETWORK</a></li>
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
<?php
include 'dbconnection.php';
// $id = $_GET['id'];
$my_qry1 = mysqli_query($conn,"SELECT `registration`.`username`,`image`.`image_name` FROM `registration`,`image` where `registration`.`user_id`=`image`.`user_id`");

?>
<?php
while($my_arr = mysqli_fetch_array($my_qry1))
{
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header" style="background-repeat:no-repeat;">
                        <h1><?php echo $my_arr['username']; ?></h1>
                    </div>
                    <div class="card-body">
                        <img src="<?Php echo $my_arr['image_name'];  ?>" class="img-fluid" alt="">
                    </div>

                </div>
                
            </div>
            <div class="col-sm-4">

            </div>

        </div>

    </div>
    <?php
}
?>
</body>
</html>