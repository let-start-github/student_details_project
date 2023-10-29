<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>homepage</title>
    <style>
        body{
          min-height: 100vh;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment:fixed;
        }
        h1{
          min-width: 100vh;
          align-self: center;
        }
    </style>
</head>
<body background="img\anime background.webp">
    
    
    <div class="container-fluid">
        <nav class="navbar navbar-default container-fluid">
            <div class="navbar-item">
                <img src="img\logo.jpg" class="navbar-brand rounded-pill" style="height:10%;width:10%;" alt="">
                <a href="" class="navbar-brand text-white">Home</a>
                <a href="" class="navbar-brand text-white">About</a>
                <a href="" class="navbar-brand text-white">Catagory</a>
                <button class="w3-button w3-red w3-large" style="border-radius:10px;"><a href="registerform.html" class="text-white">REGISTER</a></button>
        <button onclick="document.getElementById('id01').style.display='block'" style="border-radius:10px;" class="w3-button w3-green w3-large">Login</button>
        
            </div>
           
            
        </nav>
        <div class="container" style="padding:230px;">
            <h1 class="text-white" style="font-family:Brush Script MT;font-size:100px;">Welcome to Anime World</h1>
            
        </div>
    </div>
    <html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<div class="w3-container">
  
  

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img\profabtar.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="login.php" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="user_id" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pass" required>
<?php
          if(isset($_GET['msg'])){
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    error !! invalid user , Please enter correct id .!!
</div>
<?php } ?>
          <button class="w3-button w3-block w3-green w3-section w3-padding" name="submit" type="submit"><a href="login_form.php" class="text-white">login</a></button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>
            
</body>
</html>

</body>
</html>