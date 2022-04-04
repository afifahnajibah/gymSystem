<?php
   session_start();

   $id = $_SESSION['musername'];

   if(isset($_POST['submit']))
   {

       $memberid=$_POST['memberid'];
       $membershipid=$_POST['membershipid'];
       $mtype=$_POST['mtype'];
       $mname=$_POST['mname'];
       $mpicprofile=$_POST['mpicprofile'];
       $mic=$_POST['mic'];
       $musername=$_POST['musername'];
       $mpassword=$_POST['mpassword'];
       $memail=$_POST['memail'];

       $conn=mysqli_connect('localhost','root','','gym');

       if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
       }

       $sql="UPDATE `member` SET `memberid`='$memberid',`membershipid`='$membershipid',`mtype`='$mtype',
            `mname`='$mname',`mpicprofile`='$mpicprofile', `mic`='$mic',`musername`='$musername',
            `mpassword`='$mpassword', `memail`='$memail'
             WHERE `musername` ='$id'";

       if($conn->query($sql) === TRUE){
         echo "";
       } else{
         echo "Error updating record:" .$conn->error;
       }
   }

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

</head>

<body>
    <?php include 'navbar.php';?>

	  <div class="container">
		 <div class="row">
    			<h2>My Profile</h2>
          <hr>


          <?php
          $conn=mysqli_connect('localhost','root','','gym');

          $sql="SELECT * FROM `member` WHERE `musername`='$id'";
          $result=mysqli_query($conn,$sql);
          $std=mysqli_fetch_assoc($result);
          ?>

    			<form  action="" method="POST">
            <div class="col-md-6">
            <!-- profile pic -->
              <div class="input-group">
                 <p><label for="file" style="cursor: pointer;">Click here to change picture</label></p>
                    <img src="../assets/css/<?php echo $std['mpicprofile']?>" id="output" width="300">
                    <input type="file" accept="mpicprofile/*" name="mpicprofile" id="file" onchange="loadFile(event)" style="display: none;">
      				</div>
              <br/>
              <script>
                var loadFile = function(event) {
      	        var mpicprofile = document.getElementById('output');
      	        mpicprofile.src = URL.createObjectURL(event.target.files[0]);
                };
              </script>
              <!------------>
          </div>

          <div class="col-md-6">
      				<div class="input-group">
      				   <span class="input-group-addon"><b><?php echo $std['mtype']?> id</b></span>
      				  <input type="text" class="form-control" name="memberid" value="<?php echo $std['memberid']?>" /readonly>
      				</div>
              <br/>

              <!-- dropdown-->
              <!--<div class="input-group">
                <span class="input-group-addon"><b>Membership Type</b></span>
                <select class="form-control" name="membershipid">
                <option>Select</option readonly>
                 <option value="
                 </option>

                </select>
              </div>
              <br/>-->

              <div class="input-group">
      				   <span class="input-group-addon"><b>membership type [1-Basic 2-Premium 3-VIP]</b></span>
      				  <input type="text" class="form-control" name="membershipid" value="<?php echo $std['membershipid']?>" /readonly>
      				</div>
              <br/>

              <input type="hidden" name="mtype" value="<?php echo $std['mtype']?>">

              <div class="input-group">
      				   <span class="input-group-addon"><b><?php echo $std['mtype']?> name</b></span>
      				  <input type="text" class="form-control" name="mname" value="<?php echo $std['mname']?>" /required>
      				</div>
              <br/>

              <!-- profile pic-->

              <!------------>

              <div class="input-group">
      				   <span class="input-group-addon"><b>identification number</b></span>
      				  <input type="text" class="form-control" name="mic" value="<?php echo $std['mic']?>"/required>
      				</div>
              <br/>

              <div class="input-group">
      				   <span class="input-group-addon"><b><?php echo $std['mtype']?> username</b></span>
      				  <input type="text" class="form-control" name="musername" value="<?php echo $std['musername']?>" /readonly>
      				</div>
              <br/>

              <div class="input-group">
      				   <span class="input-group-addon"><b><?php echo $std['mtype']?> password</b></span>
      				  <input type="text" class="form-control" name="mpassword" value="<?php echo $std['mpassword']?>" /required>
      				</div>
              <br/>

              <div class="input-group">
      				   <span class="input-group-addon"><b><?php echo $std['mtype']?> email</b></span>
      				  <input type="text" class="form-control" name="memail" value="<?php echo $std['memail']?>" /required>
      				</div>
              <br/>

      				<input onClick="successupdate()" type="submit" name="submit" class="btn btn-info" value="Save">
			  </form>
        </div>
      </div>
     <script src="../assets/js/main.js"></script>
</body>
</html>
