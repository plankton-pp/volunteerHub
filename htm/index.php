<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/style-main.css">
	<script type="text/javascript" src="../js/script-main.js"></script>
</head>
<body>
<style>
	.mySlides {
		display:none
	}
	.w3-left, .w3-right, .w3-badge {
		cursor:pointer
	}
	.w3-badge {
		height:13px;width:13px;padding:0
	}
	.hide-text {
    	visibility: hidden;
	}
</style>
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" alt="Banner"src="../img/banner1.jpg" style="width:100%">
  <img class="mySlides" alt="Banner"src="../img/banner2.jpg" style="width:100%">
  <img class="mySlides" alt="Banner"src="../img/banner3.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
  <hr/>
</div>
<div>
  <h3>หมวดหมู่กิจกรรม</h3>
  <button onclick="showList('')">Search</button> 
  <button onclick="showList('ชุมชนและสิ่งแวดล้อม')">Search Type</button>
</div>
<script>
	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
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
				echo			"<p id=\"target\">".duedate($row['due_date'])." วัน <span class=\"hide-text\">อยู่ในขั้นตอนกำลังดำเนินโครงการแล้ว</span>".$row['attendants']." คน</p>";
				echo		    "<a href=\"detail.php\" class=\"btn btn-primary\" id=\"btn-join\">Join</a>";
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
				/*$datetime = new DateTime($due_date);
				$date1 = $datetime->format('Y-m-d');
				$date2 = date('Y-m-d');


				$diff=date_diff($date1,$date2);
				$diff->format("%R%a days");
				*/
				return 13;
			}
		?>
	</table>
</div>
</body>
</html> 
