<?php
include 'config.php';
session_start ();
$myrid=$_SESSION["rid"];
$comment=$_POST['comment'];

	
	$sql = "INSERT INTO docomment (comment,rid,pid)
				VALUES ('$comment', '$myrid', ".$_POST["btn"].")";

$qry = mysqli_query($conn, $sql);


if($qry){
		header("location: index.php");
	}
	
//mysqli_close($conn);
?>