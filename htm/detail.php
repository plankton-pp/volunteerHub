<!DOCTYPE html>
<html>
<head>
	<?php
	// connect to the database
session_start();
?>
	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<title>VolunteerHub</title>
	<link rel="stylesheet" type="text/css" href="../css/style-detail.css">

</head>
<body id="body">
	<?php
	$index = $_GET['index'];
	$_SESSION['index'] = $index;
		
	

			// connect to the database
			$conn=mysqli_connect("localhost", "root", "","volunteerhub");
			$conn->query("SET NAMES UTF8");
			$sql="SELECT * FROM volunteer WHERE title LIKE '%$index%'";
			$rs=$conn->query($sql);
			$row = $rs->fetch_assoc();
			echo '<div id="main">';
				echo '<div id="type" align="left" style="margin-left: 10%;">'.$row['type'].'</div>';
				echo '<div id="title"><h1>'.$row['title'].'</h1></div></br>';
				echo '<img alt="img include" src="../img/'.$row['img'].'"></br>';
				echo '<div id="decription">'.$row['description'].'</div></br>';
			echo '</div>';
	?>
				<hr style="margin-top: 2%;margin-bottom: 2%;" />
	<?php
				echo '<div id="detail">'.$row['detail'].'</div></br>';
				echo '<div>'.$row['expenses'].'</div></br>';
				echo '<div>'.$row['advantage'].'</div></br>';

				$_SESSION['acid'] = $row['id'];

				$conn->close();
	?>
				
	<p>
		<a href="meen.php">go</a>
	</p>
</body>

</html>