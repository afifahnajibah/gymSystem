
<?php

   $id= $_GET['delete_id'];

   $conn=mysqli_connect("localhost","root","","gym");

   $sql="DELETE FROM `member` WHERE memberid='$id'";
   echo $sql;

   $result=mysqli_query($conn,$sql);

   if(mysqli_query($conn,$sql)){
	   echo "Delete successful";
       header("Location: memberlist.php");
   }else{
         echo "Not deleted";
   }

?>
