<?php
    session_start();

    $id = $_SESSION['musername'];

    $conn=mysqli_connect("localhost","root","","gym");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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

    div.transbox {
      margin-left: 50px;
      margin-right: 110px;
      background-color: white;
      border: none solid black;
      opacity: 0.5;
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

    <body>

    <?php include 'navbar.php'; ?>
    <?php
    $conn=mysqli_connect('localhost','root','','gym');

    $sql="SELECT * FROM `member` WHERE `musername`='$id'";
    $result=mysqli_query($conn,$sql);
    $std=mysqli_fetch_assoc($result);
    ?>

    <br/><br/>
    <div class="container">
    <div class="transbox">
      <h1> Hello Our Trainer and Welcome back <?php echo $std['musername'];?> </h1>
      <h2 style="text-align: center;"> Have a nice day </h2>
    </div>
    </div>
</body>
</html>
