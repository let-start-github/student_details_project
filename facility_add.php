<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>FACILITY ADD</title>
</head>
<body background="img\bgb.png">
    <div class="container p-5" style="border-radius:20px;">
        <div>
            <h1 style="text-align:center; font-family:Georgia; color:brown;">
                FACILITY ADD  FORM
            </h1>
        </div><br>
        <form action="" method="post" class="container p-5" style="background-color: azure;border-radius:60px;">
            <div class="form-group">
                <label for="name">FACILITY NAME</label>
                <input type="text" name="facility_name"class="form-control" value="">
            </div><br>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary" value="add">ADD</button>
                
            </div>
        </form>
     </div>

     <?php
        include ('dbconnection.php');
       
            
        if(isset($_POST['facility_name']) && isset($_POST['submit']))
        {
            if($_REQUEST['submit']== 'add')
            {
               
                $facility_name = $_POST['facility_name'];
                $my_sql = "INSERT INTO `facility_master` (`facility_name`) VALUES ('$facility_name')";
               mysqli_query($conn,$my_sql);
               header("location:facility_add.php");
            }
        }

     ?>
</body>
</html>