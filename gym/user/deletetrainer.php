<?php

   $id= $_GET['delete_id'];
   $conn=mysqli_connect('localhost','root','','gym');

   $sql = "DELETE FROM member WHERE memberid=$id";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
      header("Location: trainerlist.php");
    } else {
      echo "Error deleting record: " . $conn->error;
    }


?>
