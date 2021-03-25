<!DOCTYPE html>
<html>
	<head>
		<title>Display MySQL Images</title>
		
	</head>
	
	<body>
		<?php
			include 'config.php';
			
			$table='registered';
			
			$result=$conn->query("SELECT * FROM $table") or die($conn->error);
			
			while($data=$result->fetch_assoc()){
				echo "<h2>{$data['profilephoto']}</h2>";
				echo "<img src='imagesuploadedprofilephoto/{$data['profilephoto']}' width='30%' height= '30%'>";
				
			}
			
			$table='upphoto';
			
			$result=$conn->query("SELECT * FROM $table") or die($conn->error);
			
			while($data=$result->fetch_assoc()){
				echo "<h2>{$data['photo']}</h2>";
				echo "<img src='photoupload/{$data['photo']}' width='40%' height= '40%'>";
				
			}
		mysqli_close($conn);	
		?>
		
	</body>