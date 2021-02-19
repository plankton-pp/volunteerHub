<html>
<body>
	
<?php
$ID = $_GET['id'];
$conn=mysqli_connect("localhost", "root", "","Volunteerhub");
$conn->query("SET NAMES UTF8");
$sql="DELETE FROM volunteer
WHERE id = $ID ";

if ($conn->query($sql)) {
echo "ID".$ID ." Delete Already!!";
} else {
echo "Execution Error!";

}
$conn->close();

echo '<td><br><a href="view.php">Go to Home</a> ';
?>
</body>
</html>
