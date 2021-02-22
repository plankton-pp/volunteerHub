<!DOCTYPE html>
<html>
<head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
body { 
		  font-family: 'Angsana New ', sans-serif;
		  background-image: url('../img/bg4.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
   }
</style>
	<?php
	// connect to the database
session_start();
?>
	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<!--<link rel="stylesheet" type="text/css" href="../css/style-detail.css">-->

</head>
<body bgcolor ="FFCC66">
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
				echo '<div id="type" align="center" style="margin-left: 0%;">'.$row['type'].'</div>';
				echo '<div id="title" align="center"> <h2>'.$row['title'].'</h2></div></br>';
				echo '<img alt="img include" align="center" src="../upload/img/'.$row['img'].'"></br>';
				echo '<div id="decription" align="center">'.$row['description'].'</div></br>';
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