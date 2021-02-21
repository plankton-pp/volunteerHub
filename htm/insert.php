<html>
<head>
	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insertion</title>
</head>
<body>
	
<?php
//print_r($_POST);
// connect to the database
	$conn=mysqli_connect("localhost", "root", "","volunteerhub");
	$conn->query("SET NAMES UTF8");

	$title = $_POST["title"];
	$des = $_POST["description"];
	$target = $_POST["target"];
	$atten = $_POST["attendant"];
	$due = new DateTime($_POST["due_date"]);
	$datail = $_POST["detail"];
	$expen = $_POST["expenses"];
	$advan = $_POST["advantage"];
	$type = $_POST["type"];
	$banner = $_POST["img_banner"];
	$img = $_POST["img"];


	$sql="insert into volunteer(title, description, attendants_target, attendants, due_date, detail, expenses, advantage, type, img_banner, img)
 		values('$title','$des','$target','$atten', '$due', '$datail', '$expen', '$advan', '$type', '$banner', '$img')";

 	if (mysqli_query($conn, $sql)) {
		echo "success";
	} 
	else {
		echo "error";
	}
	mysqli_close($conn);	
?>

</body>
</html>