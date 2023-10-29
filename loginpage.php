<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location:login_form.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>DARGON BALL Z</title>
    <style>
        body{
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
       }
        /* div{
            border: 1px solid white;
        } */
        p{
            font-size: 20px;
            padding-top: 60px;
            padding-right: 10px;
            padding-left: 10px;
            font-weight:bold ;
            color:aliceblue;
        }
    </style>
</head>
<body background="img\bacgrnd.jpg">
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
              <!-- <button class="btn btn-danger"><a class="text-white" href="home.php">HOME</a></button> -->
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
            <button class="btn btn-danger navbar-item"><a class="text-white" href="logout.php">LOG OUT</a></button>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
       <br><br> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <img src="img\goku1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-sm-2">
                <p>Goku is introduced as an eccentric,monkey-tailed boy who practices martial arts and prossesses superhuman strength.</p>

            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
                <img src="img\goku10.jpg" class="img-fluid"  style="height:100%" alt="">
            </div>
            <div class="col-sm-2">
                <p>Currently,Goku is the only known mortal to achieve and master of ultra instrinct and shocking think is he uses it as transformation..</p>

            </div>

            
        </div>

    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <img src="img\vegita.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-sm-2">
                <p>Vegeta is the prince of an extraterrestrial warrior race known as the Saiyans. He is extremely arrogant, proud and hardworking..</p>

            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
                <img src="img/vegita.e.jpg" class="img-fluid" style="height:90%"alt="">
            </div>
            <div class="col-sm-2">
                <p>Vegeta first attains Ultra Ego through the Ultra Ego transformation against Granolah after his Super Saiyan God SS Evolved is overwhelmed by the Cerealian..</p>

            </div>

            
        </div>

    </div>
    <br><br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <img src="img/brl1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-sm-2">
                <p>BROLY- Broly is the legendary super saiyan, son of Paragus, that everyone feared. He was born with a power level of 10000. He was considered as a threat to King ...</p>

            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-2">
                <img src="img/broly.webp" class="img-fluid" style="height:90%"alt="">
            </div>
            <div class="col-sm-2">
                <p>The from is called super broly,it super passes all super saiyans.The powerfull saiyan ever exists</p>

            </div>

            
        </div>

    </div>

  
</body>
</html>