<?php
include 'config.php';
 session_start();// start session 
 
$username=$_SESSION["username"];

$pass=$_POST['lastpassword'];

$npass=$_POST['password'];
$cpass=$_POST['cpassword'];

$query = mysqli_query($conn,"select * from registered where password='$pass' AND username='$username'");
		
		$rows = mysqli_num_rows($query);
		
if($rows == 1) {
		 
   if($npass==$cpass) {
       
              if (!empty($_POST['lastpassword'])){
                    $sql = "UPDATE registered
                            SET password='$npass'
                            WHERE username='$username';";
                $qry = mysqli_query($conn, $sql);

                if($qry){
                    echo "New password in database!!!";
                    // Redirecting To Other Page
                    header("location:profile.php"); 
                }

              }
      
		
    }else{
			$error = "Unmached passwords!";
			echo "$error";
            // Redirecting To this Page
            $location="/sxediash2/editprofile.php";
		header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
		
	}
}
else{
 
        echo '<script type="text/javascript">'; 
        echo 'alert("Wrong Password!");'; 
        echo 'window.location.href = "editprofile.php";';
        echo '</script>';
      
}
//mysqli_close($conn);
?>