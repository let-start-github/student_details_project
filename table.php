<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <title>DATA TABLE</title>
    <style>
        tr,th,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <?php
    include('dbconnection.php');

    ?>
    <div class="container-fluid">
        <table class="container-fluid border">
            <tr>
                <th>NAME</th>
                <th>FATHER NAME</th>
                <th>MOTHER NAME</th>
                <th>AGE</th>
                <th>DOB</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>GENDER</th>
                <th>STATE</th>
                <th>DIST</th>
                <th>AT</th>
                <th>PO</th>
                <th>PIN</th>

                <th>ACTION</th>
          
            </tr>
            <tr>
                <?php
               
                $my_sql = "select * from registration";
                $my_obj= mysqli_query($conn,$my_sql);
             
                
                while($my_array=mysqli_fetch_array($my_obj))
                {
                    ?>
                    <td><?php echo $my_array['username']?></td>
                    <td><?php echo $my_array['fathername']?></td>
                    <td><?php echo $my_array['mothername']?></td>
                    <td><?php echo $my_array['age']?></td>
                    <td><?php echo $my_array['dob']?></td>
                    <td><?php echo $my_array['email']?></td>
                    <td><?php echo $my_array['phone']?></td>
                    <td><?php echo $my_array['gender']?></td>
                    <td><?php echo $my_array['state']?></td>
                    <td><?php echo $my_array['district']?></td>
                    <td><?php echo $my_array['at']?></td>
                    <td><?php echo $my_array['po']?></td>
                    <td><?php echo $my_array['pin']?></td>
                    <td><button class="btn btn-danger "><a class="text-white" href=delete.php?d_id=<?php echo $my_array['user_id']?>>DELETE</a></button>
                    <button class="btn btn-primary"><a class="text-white" href=delete.php?d_id=<?php echo $my_array['user_id']?>>EDIT</a></button></td>
                    
                    <?php
                }
                ?>

            </tr>

        </table>
    </div>
</body>
</html>