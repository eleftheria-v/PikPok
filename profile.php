<?php
session_start();	

?>
	

<!DOCTYPE HTML>

<html>
	<head>
		<?php 
        if (isset($_SESSION["rid"])==NULL) {
						
            header("location: sign_in.php");
						
        }
        else{
		  $username=$_SESSION["username"];
		  echo "<title>$username</title>";
        }
		?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/style.css">
		 <link rel='shortcut icon' type='image/x-icon' href='images/Pp.png'/><meta name="description" content="Pik-Pok App"/>
			
	</head>
	
	
	<body>
		<header>
			<div class="nav">
				  <input type="checkbox" id="nav-check">
				  <div class="nav-header">
					<div class="nav-title">
					 <a href="#"> <img src="images/logo.png" width="110" height="40"/> </a>
					</div>
				  </div>
				  <div class="nav-btn">
					<label for="nav-check">
					  <span></span>
					  <span></span>
					  <span></span>
					</label>
				  </div>
				  
				  <div class="nav-links">
					<a href="index.php">Home</a>
					<a href="most_popular.php">Most Popular</a>
					<a  class="active" style="color:slateblue;" href="profile.php">MyProfile</a>
					<a href="sign_in.php">Sign in</a>
					<a href="sign_up.php">Sign up</a>
                    <a href="logout.php">Log out</a> 
				  </div>
				</div>
				
            
			<div class="cardprofile">
				<div class="imageprofile">
					<?php
					include 'config.php';
					
                    if (isset($_SESSION["rid"])==NULL) {

                        header("location: sign_in.php");

                    }
                    else{
                        $myrid=$_SESSION["rid"];
                        $result=$conn->query("SELECT * FROM registered WHERE rid='$myrid'") or die($conn->error);

                        while($data=$result->fetch_assoc()){

                            echo "<img src='imagesuploadedprofilephoto/{$data['profilephoto']}' width='20%' height= '20%'>";

                        }
                    }
					//mysqli_close($conn);
					?>
				<div>
				<div class="title">
					<?php 
                     if (isset($_SESSION["rid"])==NULL) {

                        header("location: sign_in.php");

                    }
                    else{
                        $username=$_SESSION["username"];
                        echo "<h1>$username</h1>";
                    }
					?>
				</div>		
			</div>
                    
                </div></div>
		
		</header>

		<main>
            
            <div class="edit">
					<button><a href="editprofile.php"><font color="#ddccff">Edit Profile</font></a></button>
					<input type="file" id="real-file" hidden="hidden"/>
                    <button> <a href="doupload.php"><font color="#ddccff">Upload New Photo</font></a></button>
				</div>
               <div align="center"> 
               <form action="search.php" method="post" enctype="multipart/form-data">
                <input type="text" class="input-box"  placeholder="Search" name="search">
                <button type = 'submit' name='btn'>Search</button>
                </form>

                
				<div class="main">
                    
		
                      <?php
                        include 'config.php';
                       
                        if (isset($_SESSION["rid"])==NULL) {

                            header("location: sign_in.php");

                        }
                        else{
                        $myrid=$_SESSION["rid"];

					
                        $result=$conn->query("SELECT * FROM upphoto WHERE rid='$myrid'") or die($conn->error);
                            while($data=$result->fetch_assoc()){
                            echo "<img src='photoupload/{$data['photo']}' width='50%' height= '50%'>";
                            $ri=$conn->query("SELECT * FROM registered WHERE rid=".$data["rid"]."") or die($conn->error);
                                        while($di=$ri->fetch_assoc()){
											echo "<BR>";
											echo "<font color='slateblue'><strong>&nbsp;&nbsp;".$di["username"].":&nbsp</strong></font>";
											echo $data['description'];
											echo "<BR>";
										}
                            echo "#";
                            echo $data['tag'];
                            echo "<BR>";
                            echo "<BR>";
                            echo "<form name='delete' method='post' action='dodelete.php'>";
                            echo "<button type = 'submit' name='btn' class = 'deletebtn' value='".$data["pid"]."'>";
						    echo "Delete";
						    echo "</button>";
                            echo "</form>";
                          echo "<hr>";//γραμμή οριζόντια για να χωρίζει τις δημοσιεύσεις	
						  echo "<br>";
                            }
                        }
                        //mysqli_close($conn);
                        ?>
                 </div>
                </div>
		</main>
		<footer>
		</footer>
		<script src="assets/js/ScriptForChoosePhoto.js"></script>
	</body>
</html>