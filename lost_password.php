<html>
<head>
<title>Lost password</title>
<link rel="stylesheet" href="assets/css/man.css">
<script>
        function checkforblank(){
            if(document.getElementById('user').value == ""){
             alert('Please enter your username!');
              document.getElementById('user').style.borderColor= "red";
              return false;
             }
             if(document.getElementById('email').value == ""){
             alert('Please enter your email!');
              document.getElementById('email').style.borderColor= "red";
              return false;
             }
        }
</script>	
</head>
<body>

<div class="sign-in">
<img src="images/user-Icon.png">
<h1>Lost password</h1>
<!--Bgale to katw apo ta sxolia kai bale to diko mas open tou form-->
<form action="newpass.php" method="post" onsubmit="return checkforblank()" enctype="multipart/form-data" >
<!--<form action="newpass.php" method="post" enctype="multipart/form-data" >-->
<input type="text" id="user" class="input-box" name="user_name" placeholder="Username">
<input type="email" id="email" class="input-box" maxlength="30" size="12" placeholder="Your email" name="email">
<input type="submit" name="" value="Send">

</form>
 It was a mistake to send it again !<br>
  Other <a href="sign_up.php">Sign up!</a>
</div>

</body>

</html>