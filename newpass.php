<?php
include 'config.php';
 
  //session_start();// start session 
	
	$email=$_POST['email'];
	$username=$_POST['user_name'];
?>
<html>
<head>
<title>New password</title>
<link rel="stylesheet" href="assets/css/man.css">
<link rel='shortcut icon' type='image/x-icon' href='images/Pp.png'/><meta name="description" content="Pik-Pok App"/>
			
</head>

<body>

<div class="sign-in">
<img src="images/user-Icon.png">
<h1>Sign in with your new password</h1>
<?php
	$new=rand(1000,9999);
	mail("$email",'Test Subject', "Your new password is:$new",'From: pikpokex@gmail.com');


$sql = "UPDATE registered
						SET password='$new'
						WHERE username='$username';";
			$qry = mysqli_query($conn, $sql);
			
			if($qry){
				echo "New password in database!!!";
				// Redirecting To Other Page
				header("location:profile.php"); 
			}
    //mysqli_close($conn);
?>
<form action="check_user_pass.php" method="post" enctype="multipart/form-data" >

<input type="text" class="input-box" name="user_name" placeholder="Username">
<input type="password" class="input-box" name="pass_word" placeholder="Password">

<input type="submit" name="" value="Login">

</form>
</div>

</body>

</html>