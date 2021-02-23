<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            <div class="header-thumb">
            
<html>
<body>	
<?php
$con = mysqli_connect("localhost","root","","volunteerhub");
if(!$con) {
	die("Could not connect : " . mysqli_error());
}
mysqli_set_charset($con,"utf8");
mysqli_select_db($con,"volunteer"); 

$photo = $_FILES["photo"]["name"];
$filename = $photo;

$target_picPath = "upload/pic/";

$location = $filename;
$file_extension = pathinfo($location, PATHINFO_EXTENSION);

$image_ext = array("jpg","png","jpeg","gif","pdf");

if(in_array($file_extension,$image_ext)){

	$new_name = $_POST['username']. '.'.rand() . '.'. $filename; 
	
  // Upload file
  if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_picPath.$new_name)){
    $response = $target_picPath;
  }
}


$sql = "INSERT INTO register (username, password, name, email, address, telephone, photo, status) VALUES ('".$_POST['username']."',
 '".$_POST['password']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['address']."', '".$_POST['telephone']."','$new_name','".$_POST['status']."')";


$rs = mysqli_query($con,$sql);

if($rs){

}else{
	echo $sql."<br>";
	echo $rs."<br>";
	echo "False Register";
}

mysqli_close($con);
echo "<script>alert('Register Successfully!'); window.location.href = \"../htm/index.php\"; </script>";
?>
				</div>
			</div>
		</div>
	</div>		
</section>

</body>
</html>