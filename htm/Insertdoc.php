<?php session_start();  ?>
<?php 
	$id = $_SESSION['id'];

	echo "string".$_SESSION['id']."<BR>";
	?>



<?php
if ($_FILES["file"]["error"] > 0)
{ echo "Error: " . $_FILES["file"]["error"] . "<br>"; }
else
{
echo "Upload: " . $_FILES["file"]["name"] . "<br>";
echo "Type: " . $_FILES["file"]["type"] . "<br>";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
echo "Stored in: " . $_FILES["file"]["tmp_name"];
}
?> 
<?php
if ($_FILES["file"]["error"] > 0)
{ echo "Error: " . $_FILES["file"]["error"] . "<br>"; }
else
{ echo "Temp: " . $_FILES["file"]["tmp_name"] . "<br>";
if (file_exists("upload/" . $_FILES["file"]["name"]))
{ echo $_FILES["file"]["name"] . " already exists. "; }
else
{ move_uploaded_file($_FILES["file"]["tmp_name"],
"upload/".$_FILES["file"]["name"]);
echo "Copyed to: " . "upload/".$_FILES["file"]["name"];
}
}
?>
<?php
//print_r($_POST);
// connect to the database
$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");

$userphone = $_POST["userphone"];
$perphone = $_POST["perphone"];
$file = $_FILES["file"]["name"];






$sql="insert into permission(user_id, user_phone, permission_phone, permission_doc)
 values('$id','$userphone','$perphone','$file')";

echo $sql;

$rs=$conn->query($sql);

if(!$rs){
	
	echo $_SESSION['id']."+".$userphone."+".$perphone."+".$file;
	echo "<br>fale";
	echo "<p><a href='index.php'>Go to Home</a></p>";
}else{
	echo "Insertion Successfully!!";
	echo "<p><a href='index.php'>Go to Home</a></p>";
}


$conn->close();
?>
