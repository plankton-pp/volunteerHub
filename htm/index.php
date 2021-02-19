<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style-main.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
	<script type="text/javascript" src="../js/script-main.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
</head>
<body>
<style>
	.hide-text {
    	visibility: hidden;
	}

/* external css: flickity.css */

* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { font-family: sans-serif; }

.gallery {
  background: #EEE;
}

.gallery-cell {
  width: 66%;
  height: 300px;
  margin-right: 30px;
  counter-increment: gallery-cell;
}

/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 0px;
  color: white;
}
</style>
<!-- Flickity HTML init -->
<div class="gallery js-flickity"
  data-flickity-options='{ "wrapAround": true }'>
  <div class="gallery-cell" style="background: url('../img/banner_1.png')"></div>
  <div class="gallery-cell" style="background: url('../img/banner_2.png')"></div>
  <div class="gallery-cell" style="background: url('../img/banner3.jpg')"></div>
</div>
<div>
  <h3>หมวดหมู่กิจกรรม</h3>
  <button onclick="showList('')" class="btn-primary">Search</button> 
  <button onclick="showList('ชุมชนและสิ่งแวดล้อม')">Search Type</button>
</div>
<div align="center" style="margin-top: 30px; margin-bottom: 30px;">			
	<table id="table-card">
		<?php
			// connect to the database
			$conn=mysqli_connect("localhost", "root", "","volunteerhub");
			$conn->query("SET NAMES UTF8");
			$sql="SELECT * FROM volunteer";
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
				echo 			'<a href="detail.php?index='.$row['title'].'" class="btn btn-primary" id="btn-join">Join</a>';
				echo		  "</div>";
				echo		"</div>";
				echo	"</td>";
				if($mod%3==0){
					echo	"</tr>";
				}
				$mod++;
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
		?>
	</table>
</div>
</body>
</html> 
