<?php session_start();  ?>
<html>
<body>
<?php
echo "id=".$_POST['id'];//print out for debugging

$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");

$response = 0;
	
	if($_POST['id'] != "" && $_POST["username"] != "" && $_POST["name"] != "" && $_POST["email"] != "" && $_POST["phone"] != "" && $_POST["address"] != "" ){

		if($_POST["newphoto"] != 0)){
			echo "newphoto ".$_POST['newphoto']."<br>";
			$photo = $_FILES["newphoto"]["name"];
			$filename = $photo;

			$target_picPath = "upload/pic/";

			$location = $filename;
			$file_extension = pathinfo($location, PATHINFO_EXTENSION);

			$image_ext = array("jpg","png","jpeg","gif","pdf");

			if(in_array($file_extension,$image_ext)){

				$new_name = $_POST['username']. '.'.rand() . '.'. $filename; 
				
			  // Upload file
			  if(move_uploaded_file($_FILES['newphoto']['tmp_name'],$target_picPath.$new_name)){
			    $response = $target_picPath;
			  }
			}
		}else{
			
			$new_name = $_SESSION['photo'];
			echo "newname ".$new_name."<br>";

		}

	$id = $_POST['id'];
	$username = $_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$status = $_POST["status"];

	$sql="UPDATE register SET
	username = '$username', 
	name = '$name', 
	email = '$email', 
	telephone = '$phone', 
	address = '$address',
	photo = '$new_name',
	status = '$status'
	
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