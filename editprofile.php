<?php
session_start();

?>


<html>
<head>
<title>Edit profile</title>
<link rel="stylesheet" href="assets/css/man.css">
    <script>
        function checkforblankp(){
            if(document.getElementById('real-file').value == ""){
             alert('Please enter your photo!');
              document.getElementById('real-file').style.borderColor= "red";
              return false;
             }
        }
        
        function checkforblank(){
            if(document.getElementById('ps').value == ""){
             alert('Please enter your latest password!');
              document.getElementById('ps').style.borderColor= "red";
              return false;
             }
            if(document.getElementById('password1').value == ""){
             alert('Please enter your new password!');
              document.getElementById('password1').style.borderColor= "red";
              return false;
             }
            if(document.getElementById('password2').value == ""){
             alert('Please enter your confirm password!');
              document.getElementById('password2').style.borderColor= "red";
              return false;
             }
        }
    
    </script>
</head>
<body>

<div class="sign-up">
<img src="images/user-Icon.png">
<h1>Edit Profile</h1>
<?php 
		$username=$_SESSION["username"];
	?>
<form action="check_editprofile.php" method="post" onsubmit="return checkforblank()" enctype="multipart/form-data" >

<h2><?=$username?></h2>

<input type="password" id="ps" class="input-box" maxlength="20" size="5" placeholder="Last Password" name="lastpassword">
			
			
<input type="password" id="password1" class="input-box" maxlength="20" size="8" placeholder="Password"  name="password">
<input type="password" id="password2" class="input-box" maxlength="20" size="8" placeholder="Confirm-Password" name="cpassword" onfocusout="password_match()">
<!-- The result will show in this div -->
<div id="show-result"></div>
<input type="submit" name="uploadfilesub" value="Change my data"/>
</form>				     
                

<form action="changeprofilephoto.php" method="post" onsubmit="return checkforblankp()" enctype="multipart/form-data" >    
<input type="file" name="pik-pok_db" id="real-file" hidden="hidden"/>
<button type="button" id="custom-button" name="upload">New profile photo!</button>
<span id="custom-text" >No file choosen, yet.</span>
<input type="submit" name="uploadfilesub" value="Change my profile photo"/>

</form>
</div>
<script src="assets/js/ScriptForChoosePhoto.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/password.js"></script>
    
</body>

</html>