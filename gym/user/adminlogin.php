<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","gym");

    $msg="";
    if(isset($_POST['submit'])){
        $ausername=mysqli_real_escape_string($connection,strtolower($_POST['ausername']));

        $apassword=mysqli_real_escape_string($connection,$_POST['apassword']);

        $login_query="SELECT * FROM `admin` WHERE ausername='$ausername' and apassword='$apassword'";

        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){
            $_SESSION['ausername']=$ausername;
            header('Location:adminindex.php');
        }
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
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
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
  <?php include 'adminnavbar.php'; ?>


    <br>
    <div class="container">
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;">ADMIN SIGN IN</h1>
          </div>
            <form class="form-horizontal animated bounce" action="" method="post">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="ausername" type="text" class="form-control" name="ausername" placeholder="Username">
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="apassword" type="password" class="form-control" name="apassword" placeholder="Password">
                </div>
                <br>

                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Log in</button>
                </div>
                <br/>

                <div class="input-group">
                   <p> Sign in as member? <a href="login.php">Click here</a> </p>
                   <p> Are you trainer? Log in here. <a href="trainerlogin.php">Click here</a></p>
                </div>
          </form>

     </div>


    </div>



</body>
</html>
