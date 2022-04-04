<?php
    session_start();
    $id = $_SESSION['ausername'];

    $conn=mysqli_connect("localhost","root","","gym");
    $sql="SELECT * FROM `admin` WHERE ausername = $id";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MEMBERSHIP LIST</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../assets/css/main.css">
<style>
	.bs-example{
    	margin: 20px;
    }
  table{
    margin-left: 100px;
    margin-right: 100px;
    padding-left: 16px;
    padding-right: 16px;
  }

  h4{
    font-family: "Courier", monospace;
    font-size: 27px;
  }
</style>
</head>
<body>
  <?php include 'adminnavbar.php'; ?>

<div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#basic" class="nav-link active" data-toggle="tab">BASIC</a>
        </li>
        <li class="nav-item">
            <a href="#premium" class="nav-link" data-toggle="tab">PREMIUM</a>
        </li>
        <li class="nav-item">
            <a href="#vip" class="nav-link" data-toggle="tab">VIP</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="basic">
            <h4 class="mt-2">This is the Basic Membership List.</h4>
            <br/>
            <div class="container" >
              <table border="3" width="80%" height="auto">
                 <tr style="text-align: center;">
                     <th> ID </th>
                     <th> Username</th>
                     <th> Identification Number</th>
                     <th> Email </th>
                     <th> Payment Date </th>
                     <th> Status </th>
                 </tr>
          <?php
          $sql="SELECT *
                FROM `payment`
                JOIN `member`
                ON payment.memberid = member.memberid
                WHERE payment.membershipid = 1";
           $result=mysqli_query($conn,$sql);
           while($std=mysqli_fetch_array($result)){
           ?>
             <tr style="text-align: center;">
                  <td><?php echo $std['memberid']; ?></td>
                  <td><?php echo $std['musername']; ?></td>
                  <td><?php echo $std['mic']; ?></td>
                  <td><?php echo $std['memail']; ?></td>
                  <td><?php echo $std['paymentdate']; ?></td>
                  <?php if($std['paymentstatus']==0){ ?>
                  <td style="background-color:red"><b>NOT PAID YET</b></td>
                <?php }else { ?>
                  <td style="background-color:lightgreen"><b>ALREADY PAID</b></td>
                 <?php } ?>
             </tr>
           <?php }?>
        </table>
        </div>
      </div>


      <div class="tab-pane fade" id="premium">
          <h4 class="mt-2">This is the Premium Membership List.</h4>
          <br/>

          <div class="container" >
            <table border="3" width="80%" height="auto">
               <tr style="text-align: center;">
                   <th> ID </th>
                   <th> Username</th>
                   <th> Identification Number</th>
                   <th> Email </th>
                   <th> Payment Date </th>
                   <th> Status </th>
               </tr>
        <?php
         $sql="SELECT *
               FROM `payment`
               JOIN `member`
               ON payment.memberid = member.memberid
               WHERE payment.membershipid = 2";
         $result=mysqli_query($conn,$sql);
         while($std=mysqli_fetch_array($result)){
         ?>
           <tr style="text-align: center;">
                <td><?php echo $std['memberid']; ?></td>
                <td><?php echo $std['musername']; ?></td>
                <td><?php echo $std['mic']; ?></td>
                <td><?php echo $std['memail']; ?></td>
                <td><?php echo $std['paymentdate']; ?></td>
                <?php if($std['paymentstatus']==0){ ?>
                <td style="background-color:red"><b>NOT PAID YET</b></td>
              <?php }else { ?>
                <td style="background-color:lightgreen"><b>ALREADY PAID</b></td>
               <?php } ?>
           </tr>
         <?php }?>
      </table>
      </div>
    </div>
    <div class="tab-pane fade" id="vip">
            <h4 class="mt-2">This is the VIP Membership List.</h4>
            <br/>

            <div class="container" >
              <table border="3" width="80%" height="auto">
                 <tr style="text-align: center;">
                     <th> ID </th>
                     <th> Username</th>
                     <th> Identification Number</th>
                     <th> Email </th>
                     <th> Payment Date </th>
                     <th> Status </th>
                 </tr>
          <?php
           $sql="SELECT *
                 FROM `payment`
                 JOIN `member`
                 ON payment.memberid = member.memberid
                 WHERE member.membershipid = 3";
           $result=mysqli_query($conn,$sql);
           while($std=mysqli_fetch_array($result)){
           ?>
             <tr style="text-align: center;">
                  <td><?php echo $std['memberid']; ?></td>
                  <td><?php echo $std['musername']; ?></td>
                  <td><?php echo $std['mic']; ?></td>
                  <td><?php echo $std['memail']; ?></td>
                  <td><?php echo $std['paymentdate']; ?></td>
                  <?php if($std['paymentstatus']==0){ ?>
                  <td style="background-color:red"><b>NOT PAID YET</b></td>
                <?php }else { ?>
                  <td style="background-color:lightgreen"><b>ALREADY PAID</b></td>
                 <?php } ?>
             </tr>
           <?php }?>
        </table>
        </div>
      </div>
    </div>
</div>
</body>
</html>
