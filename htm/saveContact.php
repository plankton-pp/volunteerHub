
<?php


if (isset($_POST['userid'])) {
	/*$userid strip_tags($_POST['userid']);
	$activityid strip_tags($_POST['activityid']);
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$phone = strip_tags($_POST['phone']);*/

	$userid = $_POST['userid'];
	$activityid = $_POST['activityid'];
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$phone = $_POST['phone'];
}
?>

<?php
// connect to the database
$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");
// get results from database

$sql="insert into activity(user_id, activity_id, user_username, user_email, user_phone)
 		values('$userid','$activityid','$name','$email', '$phone')";

mysqli_query($conn, $sql)
	
$conn->close();
?>