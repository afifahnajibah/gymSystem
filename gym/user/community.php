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
      margin-left: 50px;
      margin-right: 110px;
      background-color: black;
      border: none solid black;
      opacity: 1;
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
 <?php include 'navbar.php';?>
<br/>
 <h1>OUR COMMUNITY</h1>

      <div class="transbox">
          <table>
              <tr>
                  <td>
                      <div class="transbox">
                        <p><img src="../assets/css/c1.jpg"></p>
                      </div>
                   </td>
                   <td>

                     <div class="transbox">
                       <p><img src="../assets/css/c2.jpg"></p>
                     </div>
                  </td>
                  <td>
                    <div class="transbox">
                      <p><img src="../assets/css/c3.jpg"></p>
                    </div>
                 </td>
              </tr>

              <tr>
                  <td>
                    <div class="transbox">
                      <p><img src="../assets/css/c4.jpg"></p>
                    </div>
                 </td>
                 <td>
                   <div class="transbox">
                     <p><img src="../assets/css/c5.jpg"></p>
                   </div>
                 </td>
                 <td>
                  <div class="transbox">
                    <p><img src="../assets/css/c6.jpg"></p>
                  </div>
                </td>
              </tr>
          </table>
      </div>
</body>
</html>
