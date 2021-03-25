<?php
 session_start();

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Pik - Pok </title>
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
					 <a href="#"> <img src="images/logo.png" width="90" height="40"/> </a>
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
                    <a class="active" style="color:slateblue;" href="search.php">Search</a>
					<a  href="most_popular.php">Most Popular</a>
					<a href="profile.php">MyProfile</a>
					<a href="sign_in.php">Sign in</a>
                    <a href="sign_up.php">Sign up</a>
					<a href="logout.php">Log out</a>
				  </div>
				</div>
				
		</header>
		<main>
				
	       
               <form action="search.php" method="post" enctype="multipart/form-data">
                <input type="text" class="input-box"  placeholder="Search" name="search">
                <button type = 'submit' name='btn'>Search</button>
               </form>


				

		
                      <?php
                        include 'config.php';

						
                        if (isset($_SESSION["rid"])==NULL) {
						echo '<div class="photo1">';

						echo "Hello to be able to comment and use like button,please sign in!";
						
						$search=$_POST['search'];
                        $result=$conn->query("SELECT * FROM upphoto WHERE tag LIKE '%$search%'") or die($conn->error);

                        while($data=$result->fetch_assoc()){
							echo '<div class="photo2" x=$x y=$y>';
                            echo "<img src='photoupload/{$data['photo']}' width='30%' height= '20%' style='vertical-align:top;margin:20px 20px'>";
							$ri=$conn->query("SELECT * FROM registered WHERE rid=".$data["rid"]."") or die($conn->error);
                                        while($di=$ri->fetch_assoc()){
                                        echo '<div class="cardprofile">';
				                        echo '<div class="imageprofile">';
                                        echo "&nbsp;&nbsp;";
                                        echo " <img src='imagesuploadedprofilephoto/{$di['profilephoto']}' width='5%' height= '5%'>";
                                        echo "</div>";
                               
                                        echo "&nbsp;&nbsp;Owner:";
                                        echo'<div class="title">';
                                        echo $di['username'];
                                        echo "</div>";
                                        echo "</div>";
                                        }
								    $ri=$conn->query("SELECT * FROM registered WHERE rid=".$data["rid"]."") or die($conn->error);
                                        while($di=$ri->fetch_assoc()){
											echo "<BR>";
											echo "<font color='slateblue'><strong>&nbsp;&nbsp;".$di["username"].":&nbsp</strong></font>";
											echo $data['description'];
											echo "<BR>";
										}
                                    echo "&nbsp;&nbsp;#";
                                    echo $data['tag'];
                                    echo "<BR>";
									 $re=$conn->query("SELECT * FROM registered,docomment WHERE pid=".$data["pid"]." AND registered.rid=docomment.rid") or die($conn->error);
                                                while($d=$re->fetch_assoc()){
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                echo $d['username'];
                                                echo ":";
                                                echo $d['comment'];
                                                echo "<BR>";
                                                }
									echo "<br>";
									 $query = mysqli_query($conn,"SELECT * FROM dolike WHERE pid=".$data["pid"]."");
                                    $likes = mysqli_num_rows($query);
                                    echo "&nbsp;&nbsp;Likes:";
                                    echo $likes;
                                    echo "<BR>";
									echo "<BR>";
                                    echo "&nbsp;&nbsp;Upload Time:";
                                    echo $data['daytime'];
                                    echo "<BR>";
				                    echo "<BR>";  

				                echo "</div>";
			                 echo "</div>";
							echo "<hr>";//γραμμή οριζόντια για να χωρίζει τις δημοσιεύσεις				
                        }
						
                        }else{
                           
                            $myrid=$_SESSION["rid"];
                            $username=$_SESSION["username"];
                            echo "Hello   ";
                            echo $username;
                            echo "!";
                            echo '<div class="photo1">';

						$search=$_POST['search'];
                        $result=$conn->query("SELECT * FROM upphoto WHERE tag LIKE'%$search%'") or die($conn->error);

                        while($data=$result->fetch_assoc()){
							echo '<div class="photo2" x=$x y=$y>';
                            echo "<img src='photoupload/{$data['photo']}' width='30%' height= '20%' style='vertical-align:top;margin:20px 20px'>";
                            $ri=$conn->query("SELECT * FROM registered WHERE rid=".$data["rid"]."") or die($conn->error);
                                        while($di=$ri->fetch_assoc()){
                                        echo '<div class="cardprofile">';
				                        echo '<div class="imageprofile">';
                                        echo "&nbsp;&nbsp;";
                                        echo " <img src='imagesuploadedprofilephoto/{$di['profilephoto']}' width='5%' height= '5%'>";
                                        echo "</div>";
                               
                                        echo "&nbsp;&nbsp;Owner:";
                                        echo'<div class="title">';
                                        echo $di['username'];
                                        echo "</div>";
                                        echo "</div>";
                                        }
							
                            echo '&nbsp;&nbsp; <BR><BR>&nbsp;&nbsp;';
                            echo "<form name='comment' method='post' action='comment.php'>";
							echo "<input type='text' class='input-box' name='comment' rows='4' cols='50' placeholder='You can comment here!'>";
							echo "	<button type = 'submit' name='btn' class = 'sighupbtn' value='".$data["pid"]."'>";
                            echo "	Comment</button>";	
                             echo " </form>";
								
						 
								  $ri=$conn->query("SELECT * FROM registered WHERE rid=".$data["rid"]."") or die($conn->error);
                                        while($di=$ri->fetch_assoc()){
											echo "<BR>";
											echo "<font color='slateblue'><strong>&nbsp;&nbsp;".$di["username"].":&nbsp</strong></font>";
											echo $data['description'];
											echo "<BR>";
										}
                                    echo "&nbsp;&nbsp;#";
                                    echo $data['tag'];
                                    echo "<BR>";
                                       
                                            $re=$conn->query("SELECT * FROM registered,docomment WHERE pid=".$data["pid"]." AND registered.rid=docomment.rid") or die($conn->error);
                                                while($d=$re->fetch_assoc()){
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                echo $d['username'];
                                                echo ":";
                                                echo $d['comment'];
                                                echo "<BR>";
                                                }
									echo "<br>";
                                    $query = mysqli_query($conn,"SELECT * FROM dolike WHERE pid=".$data["pid"]."");
                                    $likes = mysqli_num_rows($query);
                                    echo "&nbsp;&nbsp;Likes:";
                                    echo $likes;
									echo "<form name='like' method='post' action='like.php'>";
                            echo "<button type = 'submit' name='btn' class = 'sighupbtn' value='".$data["pid"]."'>";
						    echo "Like";
						    echo "</button>";
                            echo "</form>";
									echo "<br>";
									echo "&nbsp;&nbsp;Upload Time:";
                                    echo $data['daytime'];
                                    echo "<BR>";
				                echo "</div>";
			                 echo "</div>";
							 echo "<br>";
							echo "<hr>";//γραμμή οριζόντια για να χωρίζει τις δημοσιεύσεις				
                        }
                        }
                        //mysqli_close($conn);
                        ?>
                   
		</main>
		<footer>
		</footer>
		<script src="assets/js/ScriptForChoosePhoto.js"></script>
	</body>
</html>