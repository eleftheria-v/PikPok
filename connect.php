<?php
include 'config.php';

$firstname=$_POST['firstName'];
$lastname=$_POST['lastName'];
$bday=$_POST['date'];
$sex=$_POST['gender'];
$username=$_POST['userΝame'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$email=$_POST['email'];


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
     
////////////////////////
$username = stripslashes($username);
$email = stripslashes($email);
$query = mysqli_query($conn,"select * from registered where username='$username'");
$ru = mysqli_num_rows($query);
$query = mysqli_query($conn,"select * from registered where email='$email'");
$re = mysqli_num_rows($query);
////////////////////////////////////    
    if($pass==$cpass) {
		  if($ru==1){
				echo '<script type="text/javascript">'; 
                echo 'alert("Username taken!");'; 
                echo 'window.location.href = "sign_up.php";';
                echo '</script>';
			}
            else if($re==1){
				echo '<script type="text/javascript">'; 
                echo 'alert("E-mail taken!");'; 
                echo 'window.location.href = "sign_up.php";';
                echo '</script>';
			}
			else{
					$sql = "INSERT INTO registered (name, surname, bday, sex, username,password, email, profilephoto)
				VALUES ('$firstname','$lastname', '$bday', '$sex', '$username', '$pass', '$email','$filename')";

			$qry = mysqli_query($conn, $sql);

			if($qry){
				echo "Profile in database!!!";
				// Redirecting To Other Page
				$location="/sxediash2/index.php";
			header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
			}
			
				
			}
		
    }else{
			echo '<script type="text/javascript">'; 
                echo 'alert("Unmatched passwords!");'; 
                echo 'window.location.href = "sign_up.php";';
                echo '</script>';
		
	}


}
///////////////////////////
//mysqli_close($conn);
?>