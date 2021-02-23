<html>
<body>
	
<?php
	$ID = $_GET['id'];
	$VO_ID = $_GET['activity_id'];
	$conn=mysqli_connect("localhost", "root", "","Volunteerhub");
	$conn->query("SET NAMES UTF8");
	$sql1="DELETE FROM activity WHERE id = '$ID' AND activity_id = '$VO_ID' ";
	$conn->query($sql1);

	$sql2="SELECT * FROM volunteer WHERE id = '$VO_ID'";

	$rs=$conn->query($sql2);
	

	while($row = $rs->fetch_assoc()) {
		$attendants = $row['attendants'];
		$target = $row['attendants_target'];
	}
	
	 
	echo "attendants ".$attendants."<br>"; //print for check

	$attendants = $attendants -1;
	
	if($attendants>$target){
		$attendants=$target;
	}
	echo "attendants ".$attendants."<br>";

	echo $data = 0;
	echo $sql1."sss";



	$sql3="UPDATE volunteer SET attendants = '$attendants' WHERE id = '$VO_ID'";

	$conn->query($sql3);
	
	$conn->close();
?>
</body>
</html>