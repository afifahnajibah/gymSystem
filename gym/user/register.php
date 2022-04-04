
<?php
    $connection=mysqli_connect("localhost","root","","gym");

    session_start();
    $msg="";

    if(isset($_POST['submit'])){
        $adminid= mysqli_real_escape_string($connection,strtolower($_POST['adminid']));
        $membershipid= mysqli_real_escape_string($connection,strtolower($_POST['membershipid']));
        $mtype= mysqli_real_escape_string($connection,strtolower($_POST['mtype']));
        $mname= mysqli_real_escape_string($connection,strtolower($_POST['mname']));
        $mpicprofile= mysqli_real_escape_string($connection,strtolower($_POST['mpicprofile']));
        $mic= mysqli_real_escape_string($connection,strtolower($_POST['mic']));
        $musername= mysqli_real_escape_string($connection,strtolower($_POST['musername']));
        $mpassword= mysqli_real_escape_string($connection,strtolower($_POST['mpassword']));
        $memail= mysqli_real_escape_string($connection,strtolower($_POST['memail']));
        $paymenttotal= mysqli_real_escape_string($connection,strtolower($_POST['paymenttotal']));
        $paymentstatus= mysqli_real_escape_string($connection,strtolower($_POST['paymentstatus']));


        $signup_query= "INSERT INTO `member`(`memberid`,`adminid`, `membershipid`, `mtype`, `mname`,`mpicprofile`
                                             ,`mic`,`musername`, `mpassword`, `memail`)

		                    VALUES ('', '$adminid', '$membershipid', '$mtype', '$mname', '$mpicprofile', '$mic'
                                , '$musername', '$mpassword', '$memail')";

        $check_query= "SELECT * FROM `member` WHERE musername='$musername' or memail='$memail'";

        $check_res=mysqli_query($connection,$check_query);

        if(mysqli_num_rows($check_res)>0){
             $msg= '<div class="alert alert-warning" style="margin-top:30px";>
                      <strong>Failed!</strong> Username or Email already exists.
                      </div>';
        }

        else{

          $signup_res= mysqli_query($connection,$signup_query);

          $memberid = $connection -> insert_id;
          $sql_insert="INSERT INTO `payment`(`paymentid`, `membershipid`,`memberid`, `adminid`,`musername`,`paymentdate`,`paymenttype`,
                                     `paymenttotal`,`paymentstatus`)

                       VALUES('', '$membershipid','$memberid', '$adminid', '$musername', '', '', '$paymenttotal', '$paymentstatus')";

          $signup_res= mysqli_query($connection,$sql_insert);

                 $msg= '<div class="alert alert-success" style="margin-top:30px";>
                      <strong>Success!</strong> Registration Successful.
                      </div>';
        }

        /*
        <?php
        $membershipid= mysqli_real_escape_string($connection,strtolower($_POST['membershipid']));
        $memberid= mysqli_real_escape_string($connection,strtolower($_POST['memberid']));
        $adminid= mysqli_real_escape_string($connection,strtolower($_POST['adminid']));
        $musername= mysqli_real_escape_string($connection,strtolower($_POST['musername']));
        $paymenttotal= mysqli_real_escape_string($connection,strtolower($_POST['paymenttotal']));
        $paymentstatus= mysqli_real_escape_string($connection,strtolower($_POST['paymentstatus']));

        $sql_insert="INSERT INTO `payment`(`paymentid`, `membershipid`,`memberid`, `adminid`,`musername`,`paymentdate`,`paymenttype`,
                                   `paymenttotal`,`paymentstatus`)

              VALUES('', '$membershipid','', '$adminid', '$musername', '', '', '$paymenttotal', '$paymentstatus')";

        if($connection->query($sql_insert) === TRUE){
          echo "";
        } else{
          echo "Error updating record:" .$connection->error;
        }
        */
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
    <link rel="stylesheet" type="text/css" href="..\assets\css\main.css">

    <style>

    body{
        background-image: url("../assets/css/bg2.jpg");
    }

    div.transbox {
      margin-left: 300px;
      margin-right: 300px;
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
           <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;"> Membership SignUp</h1>
            </div>
            <form class="form-horizontal animated bounce" action="" method="post">

                <input type="hidden" name="adminid" value="2">

                <div class="input-group">
                  <span class="input-group-addon"><b>Membership Type</b></span>
                  <select class="form-control" name="membershipid" id="membershipid">
                  <option>Select</option readonly>
                  <option value="1">Basic RM20/permonth</option>
                  <option value="2">Premium RM100/permonth</option>
                  <option value="3">VIP RM120/permonth</option>
                  </select>
                </div>
                <br/>

                <div class="input-group">
                  <span class="input-group-addon"><b>Who are you?</b></i></span> &nbsp;
                  <input id="mtype" type="radio" value="Trainer" name="mtype" required> &nbsp;
                  <label for="trainer">Trainer</label> <br/> &nbsp;
                  <input id="mtype" type="radio" value="Member" name="mtype" required> &nbsp;
                  <label for="trainer">Member</label> &nbsp;
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="mname" type="text" class="form-control" name="mname" placeholder="Full Name" required>
                </div>
                <br>

                <!-- profile picture -->
                <p><input type="file"  accept="mpicprofile/*" name="mpicprofile" id="file"  onchange="loadFile(event)" style="display: none;" required></p>
                <span for="file" class="input-group-addon"><b>Profile Picture</b></span>
                <p><label for="file" style="cursor: pointer;">Click here to upload profile photo</label></p>
                <p><img id="output" width="200" height="auto" /></p>

                <script>
                  var loadFile = function(event) {
                  var mpicprofile = document.getElementById('output');
                  mpicprofile.src = URL.createObjectURL(event.target.files[0]);
                  };
                </script>
                <!------>

                 <!--<div class="input-group">
                  <span class="input-group-addon"><b>Profile Picture</b></span>
                  <input id="mpicprofile" accept="image/*" type="file" class="form-control"name="mpicprofile" onchange="loadFile(event)" style="display: none;" placeholder="pic">
                  <p><img id="output" width="200" /></p>
                 </div>
                <br>-->

                 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="mic" type="text" class="form-control" name="mic" placeholder="Identification Number   e.g.:990812-03-5658" required>
                 </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="musername" type="text" class="form-control" name="musername" placeholder="Username" required>
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="mpassword" type="password" class="form-control" name="mpassword" placeholder="Password" required>
                </div>
                <br>

                <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input id="memail" type="email" class="form-control" name="memail" placeholder="Email" required>
               </div>
               <br>

               <input type="hidden" name="paymenttotal" value= 0.00>
               <input type="hidden" name="paymentstatus" value= 0>

                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
                </div>
              </form> <br/>
          </div>
        </div>
    <script src="..\assets\js\main.js"></script>
</body>
</html>
