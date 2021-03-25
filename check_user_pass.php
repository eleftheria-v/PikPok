<?php
include 'config.php';
 
  session_start();// start session 
	
	$username=$_POST['user_name'];
	$password=$_POST['pass_word'];
	
if($username && $password){
		echo "$username<br>";
		echo "$password<br>";
		
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		
		
		
		$query = mysqli_query($conn,"select * from registered where password='$password' AND username='$username'");
		
		$rows = mysqli_num_rows($query);
		
		if($rows == 1) {
		 
			$_SESSION["username"] = $username;
            
			echo "Session variables are set.";
            
			$rid = mysqli_query($conn,"select rid from registered where password='$password' AND username='$username'");
			 while ($row = mysqli_fetch_array($rid, MYSQLI_ASSOC)) {
                printf ("ID: %s ", $row["rid"]);
                 $myrid=$row["rid"];
            }
            $_SESSION["rid"] = $myrid;
			// Redirecting To Other Page
			header("location:profile.php"); 
			
		}else{
			$error = "Username or Password is invalid";
			echo "$error";
            // Redirecting To this Page
            $location="/sxediash2/sign_in.php";
		header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
		
	}
}
 
echo "Please enter both username and password";
// Redirecting To this Page
//$location="/sxediash2/sign_in.php";
//header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
//mysqli_close($conn);
 ?>