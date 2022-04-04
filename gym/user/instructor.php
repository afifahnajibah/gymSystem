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
    <link rel="stylesheet" href="../assets/css/main.css">

    <style>
    body{
        background-image: url("../assets/css/bg.jpg");

    }

    div.transbox {
      margin: 30px;
      background-color: #ffffff;
      border: 1px solid black;
      opacity: 0.95;
    }

    div.transbox p {
      margin-top: 20px;
      font-size: 20px;
      font-family: "Verdana",sans-serif;
      color: #000000;
    }


    h1{
      text-align: center;
      font-size: 50px;
      font-family: "Times New Roman", serif;
    }

    #image{
      margin-top: 50px;
      margin-bottom: 50px;
      margin-right: 10px;
      margin-left: 40px;
    }


    </style>

</head>

<body id="about">
 <?php include 'navbar.php';?>
<br/>
 <h1>OUR INSTRUCTOR</h1>

  <div class="transbox">
    <p>
       <img src="../assets/css/6.jpg" id="image">
       <b>Sara and Jake.</b> The main trainer and owner of the Alpha Fitness.
    </p>

  </div>

  <div class="transbox">
    <p>
       <img src="../assets/css/1.jpg" id="image">
       <b>Simon.</b> The co-trainer of Alpha Fitness and also a personal trainer.
    </p>

  </div>


</body>
</html>
