<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","gym");

    $message="";
    if(isset($_POST['submit'])){
        $musername=mysqli_real_escape_string($connection,strtolower($_POST['musername']));
        $mpassword=mysqli_real_escape_string($connection,$_POST['mpassword']);
        $mtype=mysqli_real_escape_string($connection,$_POST['mtype']);

        $login_query="SELECT * FROM `member` WHERE musername='$musername' and mpassword='$mpassword' and mtype='Trainer'";

        $login_res=mysqli_query($connection,$login_query);

        if(mysqli_num_rows($login_res)>0){
            $_SESSION['musername']=$musername;
            header('Location:trainerindex.php');
        }
        else{
             $message= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Unsuccessful!</strong> Login Unsuccessful.
                        </div>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">

    <style>

    body{
        background-image: url("../assets/css/bg2.jpg");
    }

    div.transbox {
      margin-left: 300px;
      margin-right: 300px;
      margin-top:50px;
      background-color: #ffffff;
      border: 1px solid black;
      opacity: 0.9;
      padding-left: 16px;
      padding-right: 16px;
    }


    h1{
      text-align: center;
      font-size: 50px;
      font-family: "Times New Roman", serif;
    }

    </style>

</head>

<body data-target=".navbar" >
  <?php include 'navbar.php';?>


      <div class="container">
        <div class="transbox">
          <?php echo $message; ?>
            <div class="page-header">
                <h1 style="text-align: center;">Trainer SignIn</h1>
          </div>
            <form class="form-horizontal animated bounce" action="" method="post">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="musername" type="text" class="form-control" name="musername" placeholder="Username">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="mpassword" type="password" class="form-control" name="mpassword" placeholder="Password">
                </div>
                <br>

                <input type="hidden" name="mtype">

                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Log in</button>

                </div>

              </form>
              <br>
              <div class="input-group">
                 <p> Sign in as member? <a href="login.php">Click here</a> </p>
                 <p> Are you admin? Log in here. <a href="adminlogin.php">Click here</a></p>
              </div>

            </div>
          </div>
</body>
</html>
