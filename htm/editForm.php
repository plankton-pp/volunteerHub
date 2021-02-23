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

	

$response = 0;

  

  if($_FILES['img_banner']['name'] !=""){
			echo "newphoto ".$_FILES['img_banner']['name']."<br>";
			$banner = $_FILES['img_banner']['name'];
			$filename = $banner;

			$target_bannerPath = "upload/img_banner/";

			$location = $filename;
			$file_extension = pathinfo($location, PATHINFO_EXTENSION);

			$image_ext = array("jpg","png","jpeg","gif","pdf");

			if(in_array($file_extension,$image_ext)){
				echo "Hello Mother Fucker";
				$new_name = $id. '_'.rand() . '.'. $filename; 
				
			  // Upload file
			  if(move_uploaded_file($_FILES['img_banner']['tmp_name'],$target_bannerPath.$new_name)){
			    $response = $response+1;
			  }
			}
		}else{
			echo "Hello Mother Fucker Bitch";
			$new_name = $_SESSION['img_banner'] ;
			echo "newname ".$new_name."<br>";

		}

	if($_FILES['img']['name'] !=""){
			echo "newphoto ".$_FILES['img']['name']."<br>";
			$img = $_FILES['img']['name'];
			$filename2 = $img;
   
			$target_imgPath = "upload/img/";

			$location2 = $filename2;
			$file_extension = pathinfo($location2, PATHINFO_EXTENSION);

			$image_ext = array("jpg","png","jpeg","gif","pdf");

			if(in_array($file_extension,$image_ext)){
				echo "Hello Mother Fucker";
				$new_name2 = $id. '_'.rand() . '.'. $filename2;  
				
			  // Upload file
			  if(move_uploaded_file($_FILES['img']['tmp_name'],$target_imgPath.$new_name2)){
			    $response = $response+1;
			  }
			}
		}else{
			echo "Hello Mother Fucker Bitch";
			$new_name2 = $_SESSION['img'] ;
			echo "newname ".$new_name2."<br>";

		}
		
		if($_FILES['doc']['name'] !=""){
			echo "newphoto ".$_FILES['doc']['name']."<br>";
			$doc = $_FILES['doc']['name'];
			$filename3 = $doc;

			$target_docPath = "upload/doc/";

			$location3 = $filename3;
			$file_extension = pathinfo($location3, PATHINFO_EXTENSION);

			$image_ext = array("jpg","png","jpeg","gif","pdf");

			if(in_array($file_extension,$image_ext)){
				echo "Hello Mother Fucker";
				$new_name3  $id. '_'.rand() . '.'. $filename3; 
				
			  // Upload file
			  if(move_uploaded_file($_FILES['doc']['tmp_name'],$target_docPath.$new_name3)){
			    $response = $response+1;
			  }
			}
		}else{
			echo "Hello Mother Fucker Bitch";
			$new_name3 = $_SESSION['doc'] ;
			echo "newname ".$new_name3."<br>";

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