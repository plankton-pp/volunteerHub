<html>
<?php session_start();?>
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

	$id = $_SESSION["edit_index"];

	$title = $_POST["title"];
	$des = $_POST["description"];
	$target = $_POST["attendants_target"];
	$atten = $_POST["attendants"];
	$due = $_POST["due_date"];
	$detail = $_POST["detail"];
	$expen = $_POST["expenses"];
	$advan = $_POST["advantage"];
	$type = $_POST["type"];
	$banner = $_FILES['img_banner']['name'];
	$img = $_FILES['img']['name'];
	$doc = $_FILES['doc']['name'];

	// Location
	//$target_docPath = "upload/document";
	$target_bannerPath = "upload/img_banner/";
	$target_imgPath = "upload/img/";
	$target_docPath = "upload/doc/";

	$location = $banner;
	$location2 = $img;
	$location3 = $doc;
	$username = $_SESSION['username'];

	// file extension
	$file_extension = pathinfo($location, PATHINFO_EXTENSION);
	$file_extension = strtolower($file_extension);

	$file_extension2 = pathinfo($location2, PATHINFO_EXTENSION);
	$file_extension2 = strtolower($file_extension2);

	$file_extension3 = pathinfo($location3, PATHINFO_EXTENSION);
	$file_extension3 = strtolower($file_extension3);

	$response = 0;
	
		$new_name = $id.rand() . '_'. $banner;
		$new_name2 = $id.rand() . '_'. $img;
		$new_name3 = $id.rand() . '_'. $doc;  
  	// Upload file
  	if(move_uploaded_file($_FILES['img_banner']['tmp_name'],$target_bannerPath.$new_name) && move_uploaded_file($_FILES['img']['tmp_name'],$target_imgPath.$new_name2 )&& move_uploaded_file($_FILES['doc']['tmp_name'],$target_docPath.$new_name3)){
    	$response = $target_imgPath;
  	}



	$sql="UPDATE `volunteer` SET title='$title',description='$des',attendants_target='$target',attendants='$atten',due_date='$due',detail='$detail',expenses='$expen',advantage='$advan',type='$type',img_banner='$new_name',img='$new_name2',doc='$new_name3',status='pass',author= '$username' WHERE id = '$id'";

 	if (mysqli_query($conn, $sql)) {
		echo "success";
	} 
	else {
		echo "editForm_error!!!!";
	}
	mysqli_close($conn);	
?>

</body>
</html>