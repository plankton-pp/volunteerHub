<!DOCTYPE html>
<html>
<head>
	<title>VolunteerHub</title>
</head>
<body>
	<?php
	$index = $_GET['index'];
			// connect to the database
			$conn=mysqli_connect("localhost", "root", "","volunteerhub");
			$conn->query("SET NAMES UTF8");
			$sql="SELECT * FROM volunteer WHERE title LIKE '%$index%'";
			$rs=$conn->query($sql);
			$row = $rs->fetch_assoc();
				echo '<div id="type">'.$row['type'].'</div>';
				echo '<h1>'.$row['title'].'</h1></br>';
				echo '<img alt="img include"src="../img/'.$row['img'].'"></br>';
				echo '<h2>'.$row['description'].'</h2></br>';
				echo '<h4>'.$row['detail'].'</h4></br>';
				echo '<h4>'.$row['expenses'].'</h4></br>';
				echo '<h4>'.$row['advantage'].'</h4></br>';
	?>
</body>
</html>