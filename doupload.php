<?php
session_start();

?>


<html>

<head>
    <?php 
					$username=$_SESSION["username"];
                    $rid=$_SESSION["rid"];
					echo "<title>Upload photo $username</title>";
					?>

<link rel="stylesheet" href="assets/css/man.css">
    <script>
        function checkforblank(){
            if(document.getElementById('real-file').value == ""){
             alert('Please enter your photo!');
              document.getElementById('real-file').style.borderColor= "red";
              return false;
             }
        }
    </script>
</head>

<body>
<div class="sign-up">
<img src="images/user-Icon.png">
<h1>Upload photo</h1>

<form action="connect2.php" method="post" onsubmit="return checkforblank()" enctype="multipart/form-data">

<input type="file" name="pik-pok_db" id="real-file" hidden="hidden"/>
<button type="button" id="custom-button" name="upload">Choose a photo!</button>
<span id="custom-text">No file choosen, yet.</span>


<input type="text" class="input-box" maxlength="50" size="5" placeholder="description" name="photodescription">
<input type="text" class="input-box" maxlength="50" size="5" placeholder="tag" name="tag">

    
    


<input type="submit" name="uploadfilesub" value="upload"/>



</form>
</div>

<script src="assets/js/ScriptForChoosePhoto.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/password.js"></script>
    
</body>

</html>