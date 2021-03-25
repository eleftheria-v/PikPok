<?php
include 'config.php';
 session_start();// start session 
$username=$_SESSION["username"];


if(isset($_POST['uploadfilesub'])){
  
	$filename = $_FILES['pik-pok_db']['name'];
	
	$filetmpname = $_FILES['pik-pok_db']['tmp_name'];
	$folder = 'imagesuploadedprofilephoto/';
	
	
	$info = pathinfo($_FILES['pik-pok_db']['name']);
	$name_of_file = $_FILES['pik-pok_db']['name'];
	
	$ext = $info['extension']; 
	$newname = $name_of_file; 

	$target = 'imagesuploadedprofilephoto/'.$newname;
	move_uploaded_file( $_FILES['pik-pok_db']['tmp_name'], $target);

    /////////////////////////////
     echo $username ;
    ////////////////////////
    $username = stripslashes($username);

    $query = mysqli_query($conn,"select * from registered where username='$username'");
    $ru = mysqli_num_rows($query);

    //////////////////////////////////// 
     
        $sql = "UPDATE registered
                            SET profilephoto='$filename'
                            WHERE username='$username';";
                $qry = mysqli_query($conn, $sql);

                if($qry){
                    echo "New Profile in database!!!";
                    // Redirecting To Other Page
                    header("location:profile.php"); 
                }

        ///////////////////////////


}



?>