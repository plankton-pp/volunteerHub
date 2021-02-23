<?php
session_start();
	header('Content-Type: application/json');
	$userid = $_SESSION['id'];
	$connect = mysqli_connect("localhost", "root", "", "volunteerhub");
	$query = "SELECT volunteer.title FROM activity INNER JOIN volunteer ON activity.activity_id = volunteer.id";
	$result = mysqli_query($connect, $query);

	$volunteer_data = array();

	while ($row = mysqli_fetch_array($result)) {
		$volunteer_data[] = array(
			'title'	=>	$row["title"]
		);
	}

	echo json_encode($volunteer_data, JSON_UNESCAPED_UNICODE);

	$connect -> close();

?>