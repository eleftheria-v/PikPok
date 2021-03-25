
<?php
session_start();

?>


<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="assets/css/man.css">
<link rel='shortcut icon' type='image/x-icon' href='images/Pp.png'/><meta name="description" content="Pik-Pok App"/>

    <script>
        function checkforblank(){
            if(document.getElementById('fname').value == ""){
             alert('Please enter your first name!');
              document.getElementById('fname').style.borderColor= "red";
              return false;
             } 
            if(document.getElementById('lname').value == ""){
             alert('Please enter your last name!');
              document.getElementById('lname').style.borderColor= "red";
              return false;
             }  
            if(document.getElementById('uname').value == ""){
             alert('Please enter your username!');
              document.getElementById('uname').style.borderColor= "red";
              return false;
             }  
            if(document.getElementById('email').value == ""){
             alert('Please enter your e-mail!');
              document.getElementById('email').style.borderColor= "red";
              return false;
             }
            if(document.getElementById('real-file').value == ""){
             alert('Please enter your photo!');
              document.getElementById('real-file').style.borderColor= "red";
              return false;
             }
            if(document.getElementById('date').value == ""){
             alert('Please enter your birthdate!');
              document.getElementById('date').style.borderColor= "red";
              return false;
             }
             var valid=false;
            var x=document.myform.gender;
            for(var i=0;i<x.length;i++){
                if(x[i].checked){
                    valid=true;
                    break;
                }
            }
            if(!valid){
                alert("Please select your gender!");
                return false;
            }
        }
    </script>
    
    
    
</head>
<body>

<div class="sign-up">
<img src="images/user-Icon.png">
<h1>Sign Up Now</h1>

<form name="myform" action="connect.php" method="post" onsubmit="return checkforblank()" enctype="multipart/form-data" >
<input type="text" id="fname" class="input-box" maxlength="20" size="5" placeholder="Fisrtname" name="firstName">
<input type="text" id="lname" class="input-box" maxlength="20" size="5" placeholder="Lastname" name="lastName">
<input type="text" id="uname" class="input-box" maxlength="20" size="8" placeholder="Username" name="userΝame">
    
    
    
<input type="password" id="password1" class="input-box" maxlength="20" size="8" placeholder="Password"  name="password">
<input type="password" id="password2" class="input-box" maxlength="20" size="8" placeholder="Confirm-Password" name="cpassword" onfocusout="password_match()">
<!-- The result will show in this div -->
     <div id="show-result"></div>
   
    
    
    
<input type="email" id="email" class="input-box" maxlength="30" size="12" placeholder="Your email" name="email">
<input type="date" id="date" class="input-box" id="send" oninput="rsult.value=send.value" name="date">
<input type="radio" id="g1" name="gender"  value="Male">Male
<input type="radio" id="g2" name="gender"  value="Female">Female
<input type="radio" id="g3" name="gender"  value="Other">Other
    
<input type="file" name="pik-pok_db" id="real-file" hidden="hidden"/>
<button type="button" id="custom-button" name="upload">Choose a photo!</button>
<span id="custom-text">No file choosen, yet.</span>
<input type="submit" name="uploadfilesub" value="Create my Profile"/>


<p>Do you have an account ?<a href="sign_in.php">Sign in</a></p>
</form>
</div>
<script src="assets/js/ScriptForChoosePhoto.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/password.js"></script>
    
</body>

</html>