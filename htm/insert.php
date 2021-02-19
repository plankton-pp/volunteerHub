<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insertion</title>
</head>
<body>
	
<?php
//print_r($_POST);
// connect to the database
$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");
if ( ($_POST["title"] <> "") &&
 	 ($_POST["description"] <> "") &&
 	 ($_POST["target"] <> "") &&
	 ($_POST["attendant"] <> "") &&
	 ($_POST["due_date"] <> "") &&
	 ($_POST["detail"] <> "") &&
	 ($_POST["expenses"] <> "") &&
	 ($_POST["advantage"] <> "") &&
	 ($_POST["type"] <> "") &&
	 ($_POST["img_banner"] <> "") &&
  	 ($_POST["img"] <> ""))
{
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


} else exit("คุณยังกรอกข ้อมูลไม่ครบ!");



$sql="insert into volunteer(title, description, attendants_target, attendants, due_date, detail, expenses, advantage, type, img_banner, img)
 values('$title','$des','$target','$atten', '$due', '$datail', '$expen', '$advan', '$type', '$banner', '$img')";


$rs=$conn->query($sql);

if(!$rs){
	
	echo $title."+".$des."+".$target."+".$atten."+".$due."+".$datail."+".$expen."+".$advan."+".$type."+".$banner."+".$img;
	echo "<br>false";
	echo "<p><a href='view.php'>Go to Home</a></p>";
}else{
	echo "Insertion Successfully!!";
	echo "<p><a href='view.php'>Go to Home</a></p>";
}


$conn->close();
?>

</body>
</html>