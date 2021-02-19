<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            <div class="header-thumb">
            <h1 class="wow fadeIn" data-wow-delay="1.6s">Register Successfully</h1>
<html>
<body>	
<?php
$con = mysqli_connect("localhost","root","","volunteerhub");
if(!$con) {
	die("Could not connect : " . mysqli_error());
}
mysqli_set_charset($con,"utf8");
mysqli_select_db($con,"volunteer"); 
$sql = "INSERT INTO register (username, password, name, email, address, telephone) VALUES ('".$_POST['username']."',
 '".$_POST['password']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['address']."', '".$_POST['telephone']."')";
mysqli_query($con,$sql);
mysqli_close($con);
?>
<form action="login.php">
<br/>
<input type="submit" name="back" value=" Back to login ">
			
          </div>
			</div>

		</div>
	</div>		
</section>

</body>
</html>