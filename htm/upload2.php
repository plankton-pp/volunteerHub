<?php
// file name
$userid = $_POST['userid'];
$filename = $_FILES['img']['name'];
$filename2 = $_FILES['img_banner']['name'];

// Location
$targetPath = "upload/";
$location = $filename;
$location2 = $filename2;

// file extension
$file_extension = pathinfo($location, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);

$file_extension2 = pathinfo($location2, PATHINFO_EXTENSION);
$file_extension2 = strtolower($file_extension2);

// Valid image extensions
$image_ext = array("jpg","png","jpeg","gif","pdf");

$response = 0;
if(in_array($file_extension,$image_ext)&&in_array($file_extension2,$image_ext)){

	$new_name = rand() . '.'. $filename; 
	$new_name2 = rand() . '.'. $filename2; 
  // Upload file
  if(move_uploaded_file($_FILES['img']['tmp_name'],$targetPath.$new_name ) && move_uploaded_file($_FILES['img_banner']['tmp_name'],$targetPath.$new_name2)){
    $response = $targetPath;
  }
}

$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");




$sql="insert into test(userid, photo, photo2)
 values('$userid','$new_name','$new_name2')";

echo $sql;

$rs=$conn->query($sql);


if($rs){
	echo $response;
}


?>