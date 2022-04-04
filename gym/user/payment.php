
<?php
    $conn=mysqli_connect("localhost","root","","gym");
    session_start();
    $id = $_SESSION['musername'];

    if(isset($_POST['submit']))
    {
      $paymentid=$_POST['paymentid'];
      $membershipid=$_POST['membershipid'];
      $memberid=$_POST['memberid'];
      $adminid=$_POST['adminid'];
      $musername=$_POST['musername'];
      $paymentdate=$_POST['paymentdate'];
      $paymenttype=$_POST['paymenttype'];
      $paymenttotal=$_POST['paymenttotal'];
      $paymentstatus=$_POST['paymentstatus'];

        $conn=mysqli_connect('localhost','root','','gym');

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql="UPDATE `payment` SET `paymentid`='$paymentid', `membershipid`='$membershipid',`memberid`='$memberid', `adminid`='$adminid',
                                   `musername`='$musername',`paymentdate`='$paymentdate',`paymenttype`='$paymenttype',
                                   `paymenttotal`='$paymenttotal',`paymentstatus`='$paymentstatus'
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

    <style>

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

      <?php
        $conn=mysqli_connect('localhost','root','','gym');
        $sql="SELECT *
              FROM `payment`
              JOIN `membership`
              ON payment.membershipid = membership.membershipid
              WHERE payment.musername='$id'";

        $result=mysqli_query($conn,$sql);
        $std=mysqli_fetch_assoc($result);
      ?>

      <div class="container">
        <div class="transbox">
            <div class="page-header">
                <h1> Membership Payment</h1>
                <?php if($std['paymentstatus']==0){?>
                <p class="alert alert-warning" style="text-align: center; color: red;">You haven't pay yet!</p>
                <?php }else if($std['paymentstatus']==1){?>
                <p class="alert alert-success" style="text-align: center; color: green;">ThankYou. Please wait, your payment will be process.</p>
              <?php } ?>
            </div>
            <form class="form-horizontal animated bounce" action="" method="post">

              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> <b> Payment ID </b> </span>
                <input id="mname" type="text" class="form-control" name="paymentid" value="<?php echo $std['paymentid']?> " readonly>
              </div>
              <br>

              <input type="hidden" name="membershipid" value="<?php echo $std['membershipid']?>">

              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> <b> Member ID</b> </span>
                <input id="mname" type="text" class="form-control" name="memberid" value="<?php echo $std['memberid']?> " readonly>
              </div>
              <br>

              <input type="hidden" name="adminid" value="<?php echo $std['adminid']?>">
              <input type="hidden" name="musername" value="<?php echo $std['musername']?>">

              <div class="input-group">
                <span class="input-group-addon"><b> Payment Date </b></span>
                <input type='date' class="form-control" id='hasta' name="paymentdate" value='<?php echo date('Y-m-d');?>' readonly>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><b> Price Permonth for <?php echo $std['mslevel'];?></b></span>
                <input type='text' class="form-control" value='RM <?php echo $std['msprice'];?>' readonly>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><b>Total Price </b></span>
                <input type="text" class="form-control" value="RM <?php echo $std['msprice']." x ".$std['msperiod'];?> months" readonly>
                <!-- calculate total payment -->
                <?php $paymenttotal = $std['msprice'] * $std['msperiod']; ?>
                <!---->
                <input type="hidden" name="paymenttotal" value="<?php echo $paymenttotal?>">
                <input type="text" class="form-control" value="RM <?php echo $std['paymenttotal']?>" readonly>
              </div>
              <br>

              <div class="input-group">
              <span class="input-group-addon"><b>Payment Type</b></i></span> &nbsp;
                <!-------- 0 not paid & 1 paid ------>
                <?php
                if($std['paymentstatus'] == 0){
                ?>
                <input id="card" type="radio" value="card" name="paymenttype" required> &nbsp;
                <label for="card">Card</label> <br/> &nbsp;
                <input id="online" type="radio" value="online transfer" name="paymenttype" required> &nbsp;
                <label for="online">Online Transfer</label>
                <!-- payment type (card/online)-->
                <!----->
                <?php } else if($std['paymentstatus'] == 1){?>
                <textarea rows="2" cols="50" /readonly> You already paid RM <?php echo $std['paymenttotal']?> using <?php echo $std['paymenttype']?></textarea>
                <?php }?>

            </div>
              <br>

              <!----------------------->
              <?php if($std['paymentstatus']==0){ ?>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                  <label class="form-check-label" for="invalidCheck2">
                    Confirm with the selected payment method
                  </label>
                </div>
                <br/>

                <input onClick="confirmpayment()" type="submit" name="submit" class="btn btn-info" value="Pay">
                <?php
                $count=1;
                $std['paymentstatus'] =+ $count; ?>
                <input type="hidden" name="paymentstatus" value="<?php echo $std['paymentstatus']?>">
              <?php }else if($std['paymentstatus'] == 1){?>
                <input type="submit" name="submit" onclick="" class="btn btn-info disabled" value="Pay">
              <?php } ?>
              </form> <br/>
          </div>
        </div>
  <script src="../assets/js/main.js"></script>
</body>
</html>
