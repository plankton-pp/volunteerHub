<?php session_start();  ?>
<html>
<body>
<?php
echo "id=".$_POST['id']."<br>";//print out for debugging

$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");

$response = 0;
	
	$sql="SELECT * FROM volunteer WHERE id = ".$_POST['acid']."";

	$rs=$conn->query($sql);
	

	while($row = $rs->fetch_assoc()) {
		$attendants = $row['attendants'];
		$target = $row['attendants_target'];
	}
	
	 
	echo "attendants ".$attendants."<br>"; //print for check

	$attendants = $attendants +1;
	
	if($attendants>$target){
		$attendants=$target;
	}
	echo "attendants ".$attendants."<br>";



	$id = $_POST['id'];
	$acid = $_POST['acid'];

	echo "acid ".$acid."<br>";

	$username = $_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];

	echo "username ".$username."<br>";


	$sql2="INSERT INTO activity (user_id, activity_id, user_username, user_name, user_email, user_phone)
 		VALUES('$id','$acid','$username','$name', '$email', '$phone')";

	$sql3="UPDATE volunteer SET
	attendants = '$attendants'
	WHERE id ='$acid'";

	$rs2=$conn->query($sql2);
	$rs3=$conn->query($sql3);

	echo "<br>".$sql2; //print out for debugging

	if($rs2 && $rs3) {
	echo $response=$response+1;
	
	}else{
		echo "<br>"."respon".$response;
	}
		
	
		
		
	
	$conn->close();
?>
</body>
</html>