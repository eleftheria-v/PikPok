<?php
include 'config.php';
session_start ();
$myrid=$_SESSION["rid"];


$query = mysqli_query($conn,"SELECT * FROM dolike WHERE rid='$myrid' and pid=".$_POST["btn"]."");
$likes = mysqli_num_rows($query);
	if($likes==1){
        $message = "You already like this photo!";
        
        echo '<script type="text/javascript">'; 
        echo 'alert("You already like this photo!");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
      
    }
    else{
        $sql = "INSERT INTO dolike (rid,pid)
				VALUES ('$myrid', ".$_POST["btn"].")";
	
	     mysqli_query($conn,$sql);
         $s = "UPDATE upphoto SET likes = likes + 1 WHERE pid = ".$_POST["btn"].";";
	
	     mysqli_query($conn,$s);
        
	header("location: index.php");
    }
//mysqli_close($conn);
?>