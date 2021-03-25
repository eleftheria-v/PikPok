<?php
include 'config.php';
 
session_start();// start session 


$sql ="delete from upphoto where pid=".$_POST["btn"]."";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
     header("location:profile.php"); 
} else {
  echo "Error deleting record: " . $conn->error;
}

  //mysqli_close($conn); //
 ?>