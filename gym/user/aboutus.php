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
      opacity: 0.9;
    }

    div.transbox p {
      margin: 5%;
      font-size: 25px;
      font-family: "Verdana",sans-serif;
      color: #000000;
    }

    h1{
      text-align: center;
      font-size: 50px;
      font-family: "Times New Roman", serif;
    }




    </style>

</head>

<body id="about">
 <?php include 'navbar.php';?>
<br/>
 <h1>ABOUT US</h1>

<div class="background">
  <div class="transbox">
    <p>
    <b>Welcome to Alpha Fitness,</b> a Music Functional Workout concept gym where we hustle and smiles together as a Crew<br/><br/>
    We believe fitness gives us the motivation to make us became <b>ALPHA</b> version of ourselves. So our doors are open to anyone who want to transform
    their lives as much as us. No contract, no hidden fees, only great fitness experience.<br/><br/>
    Our inspirational and experience trainers are always set to transform you physically and mentally. Drop by <b>ALPHA</b> and be part of the crew
  </p>
  </div>
</div>

</body>
</html>
