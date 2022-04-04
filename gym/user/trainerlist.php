<?php
   session_start();

   $id = $_SESSION['ausername'];
   $conn=mysqli_connect('localhost','root','','gym');

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MEMBERSHIP LIST</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
<?php include 'adminnavbar.php'; ?>

    <form method="POST" action="">
      <div class="container">
        <div class="row">
            <div class="page-header">
                <h2 style="text-align: center;">Alpha Fitness Trainer</h2>
                <br/>
            </div>
        </div>
            <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Member Id</th>
						            <th>Membership Id</th>
                        <th>Name</th>
						            <th>Identification</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
             <?php
              $sql="SELECT * FROM `member` WHERE `mtype`= 'Trainer'";
              $result=mysqli_query($conn,$sql);
              while($std=mysqli_fetch_array($result)){
              ?>
                <tr>
                     <td><?php echo $std['memberid']; ?></td>
                     <td><?php echo $std['membershipid']; ?></td>
                     <td><?php echo $std['mname']; ?></td>
                     <td><?php echo $std['mic']; ?></td>
                     <td><?php echo $std['musername']; ?></td>
                     <td><?php echo $std['memail']; ?></td>
                     <td><a class="btn btn-danger" href="javascript:delete_id(id=<?php echo $std['memberid']?>)">Delete</a></td>
                </tr>
                <script src="../assets/js/main.js"></script>

              <?php }?>

</body>
</html>
