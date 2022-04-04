<?php
    session_start();
    $id = $_SESSION['ausername'];

    $conn=mysqli_connect("localhost","root","","gym");
    $sql="SELECT * FROM `admin` WHERE ausername = $id";

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
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

<?php include 'adminnavbar.php'; ?>
<?php
$conn=mysqli_connect('localhost','root','','gym');

$sql="SELECT * FROM `admin` WHERE `ausername`='$id'";
$result=mysqli_query($conn,$sql);
$std=mysqli_fetch_assoc($result);
?>

<br/><br/>
<div class="container">
  <div class="transbox">
    <h1> Hello and Welcome back <?php echo $std['ausername'];?> </h1>
    <h2 style="text-align: center;"> You can control the system from here </h2>
  </div>
</div>
</body>
