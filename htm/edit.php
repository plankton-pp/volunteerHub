<?php session_start();  ?>
<html>
<body>
<?php
echo "id=".$_SESSION['ID'];//print out for debugging

$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");


	
	$id = $_SESSION['ID'];
	$title = $_POST["title"];
	$des = $_POST["description"];
	$target = $_POST["attendants_target"];
	$atten = $_POST["attendants"];
	$due = $_POST["due_date"];
	$datail = $_POST["detail"];
	$expen = $_POST["expenses"];
	$advan = $_POST["advantage"];
	$type = $_POST["type"];
	$banner = $_POST["img_banner"];
	$img = $_POST["img"];

	$sql="UPDATE volunteer SET
	title = '$title', 
	description = '$des', 
	attendants_target = '$target', 
	attendants = '$atten', 
	due_date = '$due', 
	detail = '$datail', 
	expenses = '$expen', 
	advantage = '$advan', 
	type = '$type', 
	img_banner = '$banner', 
	img = '$img'


	WHERE id =".$id;

	//echo "<br>".$sql; //print out for debugging

	if ($conn->query($sql)) {

	}
	$conn->close();
	echo "<script>window.location.href = \"../htm/index.php\";</script>";


?>
</body>
</html>