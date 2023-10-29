
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
       body{
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
       }

    </style>
    <title>Document</title>
</head>
<body background="img\croad.jpg">
    <br>
    <br><br><br><br><br><br>
    <br>
    <br><br><br><br><br><br>
    <br>
    <br><br><br><br><br><br>
    
    <marquee behavior="" id="scroll" scrollamount="15" direction="right" onmouseover="stop()" onmouseout="start()">
        <img src="img\a.gif" style="height:15%;width:15%;"alt="">
        <img src="img\b.gif" style="height:9%;width:8%;" alt="">
        <img src="img\c.gif" alt="">
    </marquee>
    <script>
        function stop()
        {
            document.getElementById("scroll").scrollamount="0";
        }
        function start(){
            document.getElementById("scroll").scrollamount="15";
        }
    </script>

</body>
</html>