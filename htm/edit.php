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
	$target = $_POST["target"];
	$atten = $_POST["attendant"];
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
	echo "<script type='text/javascript'>alert('UPDATE Successfully!');</script>";
	echo '<td><br><a href="view.php">Go to Home</a> ';
	} else {
	//echo "<br>"; //print out for debugging
	$message = "Execution Error!"."<br>".$title." ".$des." ".$target." ".$atten." ".$due." ".$datail." ".$expen." ".$expen." ".$advan." ".$type." ".$banner." ".$img;
	echo $message;
	echo '<td><br><a href="editForm.php?id='.$id.'">Back</a> ';
	echo $title." ".$des." ".$target." ".$atten." ".$due." ".$datail." ".$expen." ".$expen." ".$advan." ".$type." ".$banner." ".$img;
	}
	$conn->close();
	echo "<script>window.location.href = \"../htm/index.php\";</script>";


?>
</body>
</html>