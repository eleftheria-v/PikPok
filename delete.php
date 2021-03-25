<?php
include 'config.php';
 
  session_start();// start session 
$photoname=$_POST['photoName'];

$photoname = stripslashes($photoname);
$sql ="delete from upphoto where photo='$photoname'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
     header("location:profile.php"); 
} else {
  echo "Error deleting record: " . $conn->error;
}

   //mysqli_close($conn);
 ?>