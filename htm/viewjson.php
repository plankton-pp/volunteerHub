<?php
	header('Content-Type: application/json');

	$connect = mysqli_connect("localhost", "root", "", "volunteerhub");
	$query = "SELECT * FROM volunteer ";
	$result = mysqli_query($connect, $query);

	$volunteer_data = array();

	while ($row = mysqli_fetch_array($result)) {
		$volunteer_data[] = array(
			'id'				=>	$row["id"],
			'title'	 			=>	$row["title"],
			'description'		=>	$row["description"],
			'attendants_target'	=>	$row["attendants_target"],
			'attendants'		=>	$row["attendants"],
			'due_date'			=>	$row["due_date"],
			'detail'			=>	$row["detail"],
			'expenses'			=>	$row["expenses"],
			'advantage'			=>	$row["advantage"],
			'type'				=>	$row["type"],
			'img_banner'		=>	$row["img_banner"],
			'img'				=>	$row["img"]
		);
	}

	echo json_encode($volunteer_data, JSON_UNESCAPED_UNICODE);

	$connect -> close();

?>