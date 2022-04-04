<?php
    $connection=mysqli_connect("localhost","root","","gym");

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GYM Membership</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link  type="text/css" rel="stylesheet" href="../assets/css/main.css">

    <style>
    body{
      background-image: url("../assets/css/bg.jpg");
    }
    #mainpage{
      background-color: white;
      opacity: 0.9;
    }
    p{
      font-size: 25px;
    }
    .row{
      text-align: center;
    }
    h1.nav{
      font-size: 30px;
      font-family: "Times New Roman", serif;
    }

    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">
    <!--
    <div>
       <div class="jumbotron">
          <h2 class="animated bounce">Ruet Vehicle Management</h2>
          <p>A management system where you can easily manage vehicles.</p>
        </div>

    </div>
    -->

    <?php include 'navbar.php';?>
       <br/>
       <!--section-->
        <div id="mainpage" class="container">

          <div class="page-header">
            <h1 style="text-align: center"> It's ALPHA FITNESS</h1>
            <p style="text-align: center"> Welcome to our Fighter!</p>
          </div>

          <div class="row">
                <h2><b>If you think lifting is dangerous,try being weak.<br/>Being weak is dangerous.</b></h2>
                <!--<img src="../assets/css/gym.png">-->
                  <br/><br/>
                 <p> <br/>What is ALPHA FITNESS? Click the <a href="aboutus.php"><button class ="btn btn-info"> ABOUT US </button></a> here to find out more.

                 </p>
          </div>
          <p></p>
        </div>
        <br/>

</body>
</html>
