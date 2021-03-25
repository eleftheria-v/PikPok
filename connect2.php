<?php
include 'config.php';
require("profile.php");
//start_session();


$description = $_POST['photodescription'];
$tag = $_POST['tag'];
//$rid



if(isset($_POST['uploadfilesub'])){
	$filename = $_FILES['pik-pok_db']['name'];
	
	$filetmpname = $_FILES['pik-pok_db']['tmp_name'];
	$folder = 'photoupload/';
	
	
	$info = pathinfo($_FILES['pik-pok_db']['name']);
	$name_of_file = $_FILES['pik-pok_db']['name'];
	
	$ext = $info['extension']; 
	$newname = $name_of_file; 

	$target = 'photoupload/'.$newname;
	move_uploaded_file( $_FILES['pik-pok_db']['tmp_name'], $target);

$myrid=$_SESSION["rid"];
$sql = "INSERT INTO upphoto (photo ,description ,tag ,daytime, rid,likes)
VALUES ('$filename', '$description', '$tag', CURRENT_TIMESTAMP, '$myrid',0)";

$qry = mysqli_query($conn, $sql);


if($qry){
        echo '<script type="text/javascript">'; 
        echo 'alert("You upload your photo!!!");'; 
        echo 'window.location.href = "profile.php";';
        echo '</script>';
	}
	
}	
//mysqli_close($conn);
?>