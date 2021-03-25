<html>
<head>
<title>Sign in</title>
<link rel="stylesheet" href="assets/css/man.css">
<link rel='shortcut icon' type='image/x-icon' href='images/Pp.png'/><meta name="description" content="Pik-Pok App"/>
<script>
        function checkforblank(){
            if(document.getElementById('user').value == ""){
             alert('Please enter your username!');
              document.getElementById('user').style.borderColor= "red";
              return false;
             }
             if(document.getElementById('ps').value == ""){
             alert('Please enter your password!');
              document.getElementById('ps').style.borderColor= "red";
              return false;
             }
        }
</script>			
</head>

<body>

<div class="sign-in">
<img src="images/user-Icon.png">
<h1>Sign In</h1>

<form action="check_user_pass.php" method="post" onsubmit="return checkforblank()" enctype="multipart/form-data" >

<input type="text" id="user" class="input-box" name="user_name" placeholder="Username">
<input type="password" id="ps" class="input-box" name="pass_word" placeholder="Password">

<input type="submit" name="" value="Login">

<a href="lost_password.php"> Forgot password ?</a><br>
 Not registered yet ? <a href="sign_up.php">Sign up!</a>
</form>
</div>

</body>

</html>