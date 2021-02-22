<?php session_start();  ?>
<html>
<body>
<?php
echo "id=".$_POST['id'];//print out for debugging

$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");

$response = 0;
	
	if($_POST['id'] != "" && $_POST["username"] != "" && $_POST["name"] != "" && $_POST["email"] != "" && $_POST["phone"] != "" && $_POST["address"] != "" ){

	$id = $_POST['id'];
	$username = $_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];

	$sql="UPDATE register SET
	username = '$username', 
	name = '$name', 
	email = '$email', 
	telephone = '$phone', 
	address = '$address'
	
	WHERE id =".$id;

	//echo "<br>".$sql; //print out for debugging

	if ($conn->query($sql)) {
		echo "success";
		echo $response=$id;
	}else{
		
		
	}
	$conn->close();

	}else{
		echo "fill information";
	}
	

	

echo $response;
?>
</body>
</html>