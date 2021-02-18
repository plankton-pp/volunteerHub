<?php
	// connect to the database
	$conn=mysqli_connect("localhost", "root", "","volunteerhub");
	$conn->query("SET NAMES UTF8");
	// get results from database
	if (isset($_GET["search"])&&$_GET["search"]<>"") {
		 $search = $_GET["search"];
		 $sql="SELECT * FROM volunteer WHERE type LIKE '%$search%'";
	} else {
		 $sql="SELECT * FROM volunteer";
	}
	$rs=$conn->query($sql);
	$mod=1;
	while($row = $rs->fetch_assoc()) {
		if($mod%3==1){
					echo "<tr>";
				}
				echo	"<td style=\"padding-left: 15px;\">";
				echo		"<div class=\"card\">";
				echo		  "<img alt=\"Avatar\"src=\"../img/".$row['img_banner']."\" style=\"width:100%\">";
				echo		  "<div class=\"card-body\">";
				echo		    "<a href=\"detail.php\" id=\"card-title\"><b>".$row['title']."</b></a>";
				echo		    "<p class=\"card-text\">";
				echo		    	$row['description'];
				echo			"</p>";
				echo		    "<hr style=\"margin: 0; padding-bottom: 5px;\" />";
				echo		    "<div class=\"funding-goal\">";
			    echo                "<p id=\"target\">เป้าหมาย</p>";
			    echo                "<span class=\"value \">".$row['attendants_target']." คน";
			    echo                	"<span class=\"hide-text\">ดำเนินโครงการแล้ว</span>";
			    echo                    percentage($row['attendants_target'],$row['attendants'])."%";
			    echo                "</span>";
			    echo            "</div>";

				echo		    "<div id=\"myProgress\">";
				echo			"<div id=\"myBar\" style=\"width: ".percentage($row['attendants_target'],$row['attendants'])."%\"></div>";
				echo			"</div>";
				echo			"<p id=\"target\">".duedate($row['due_date'])." วัน <span class=\"hide-text\">ในขั้นกำลังดำเนินโครงการแล้ว</span>".$row['attendants']." คน</p>";
				echo		    "<a href=\"detail.php\" class=\"btn btn-primary\" id=\"btn-join\">Join</a>";
				echo		  "</div>";
				echo		"</div>";
				echo	"</td>";
				if($mod%3==0){
					echo	"</tr>";
				}
				$mod++;
	 // echo out the contents of each row into a table
	}
	function percentage($target,$attendants){
				$perc = $target/100;
				return (int)$attendants/$perc;
			}
			function duedate($due_date){
				$datetime = new DateTime($due_date);
				$datedue = $datetime->format('Y-m-d');
				$datenow = date('Y-m-d');

				$date1=date_create($datedue);
				$date2=date_create($datenow);
				$diff=date_diff($date1,$date2);
				return $diff->format("เหลือ %a");
			}
	$conn->close(); // close database connection
?>