<?php
session_start();
	header('Content-Type: application/json');
	$userid = $_SESSION['id'];
	$connect = mysqli_connect("localhost", "root", "", "volunteerhub");
	$query = "SELECT activity.id, activity.activity_id, volunteer.title FROM activity INNER JOIN volunteer ON activity.activity_id = volunteer.id AND activity.user_id = ".$userid;
	$result = mysqli_query($connect, $query);

	$activity_data = array();

	while ($row = mysqli_fetch_array($result)) {
		$activity_data[] = array(
			'id' => $row["id"],
			'activity_id'	=>	$row["activity_id"],
			'title'	=>	$row["title"]
		);
	}

	echo json_encode($activity_data, JSON_UNESCAPED_UNICODE);

	$connect -> close();

?>