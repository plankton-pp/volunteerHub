<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->
	<link rel="stylesheet" type="text/css" href="../css/style-main.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
	<script type="text/javascript" src="../js/script-main.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">VolunteerHub</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="insertForm.htm">InsertForm</a>
	        </li>
	   
	        <li class="nav-item">
	          <a class="nav-link" href="view.php">view</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="editForm.php">EditForm</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="docForm.php">docForm</a>
	        </li>
	       <li class="nav-item">
	          <a class="nav-link" href="viewdoc.php">viewdoc</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link"  href="downloaddoc.php?nama=doc.pdf" >Dowload</a>
	        </li>
	      </ul>
	      <!-- Split button -->
			<div class="btn-group btn-group-left">
			    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span>
			 <span class="sr-only"><div id="profilename">Profile</div></span>
			    </button>
			    <ul class="dropdown-menu">
			        <li><a href="#">Action</a>
			        </li>
			        <li><a href="#">Another action</a>
			        </li>
			        <li><a href="#">Something else here</a>
			        </li>
			        <li role="separator" class="divider"></li>
			        <li>
			        	<div id="logoutbutton"><a href="logout.php" class="btn btn-danger" onclick="logout()">Logout</a></div>
			        </li>
			    </ul>
			</div>
	    </div>
	  </div>
	</nav>

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
<script type="text/javascript">
		function say(str){
  alert("login first");
}
	function saynothing(id, title){
		document.getElementById("foreground"+id.toString()).innerHTML="<div><p></p></div>";
		//alert(title);
		if(sessionStorage.getItem('loggedin')==null){
			alert("login first");
			document.getElementById("logoutbutton").innerHTML = "<p hidden>This paragraph should be hidden.</p>";
		    document.getElementById("foreground"+id.toString()).innerHTML = "<button class='btn btn-primary'id='btn-join'>Join</button>";
		}else if(sessionStorage.getItem('loggedin')=='true'){
		    document.getElementById("foreground"+id.toString()).innerHTML = "<a href='detail.php?index="+title+"' class='btn btn-primary'id='btn-join'>Join</a>";
		            	}
	}
function logout(){
	sessionStorage.clear();
	//
}
</script>
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
  <a href="login.php" class="btn btn-primary">Login</a>
  
<!-- Split button -->
<div class="btn-group btn-group-left">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span>
 <span class="sr-only"><div id="profilename"></div></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a>
        </li>
        <li><a href="#">Another action</a>
        </li>
        <li><a href="#">Something else here</a>
        </li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a>
        </li>
    </ul>
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
				echo		  '<a href="detail.php?index='.$row['title'].'"><img alt="Avatar" src="../img/'.$row['img_banner'].'" style="width:100%"/></a>';
				echo		  "<div class=\"card-body\">";
				echo		   '<a href="detail.php?index='.$row['title'].'" id="card-title"><b>'.$row['title'].'</b></a>';
				echo		    "<p class=\"card-text\">";
				echo		    	$row['description'];
				echo			"</p>";
				echo		    "<hr style=\"margin-bottom: 10px; padding-bottom: 1px;\" />";
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
				echo '<div id="buttonset'.$row["id"].'">';
				echo "<script type=\"text/javascript\">
		            	if(sessionStorage.getItem('loggedin')==null){
		            		document.getElementById(\"logoutbutton\").innerHTML = \"<p hidden>This paragraph should be hidden.</p>\";
		            		document.getElementById(\"buttonset".$row['id']."\").innerHTML = \"<button class='btn btn-primary'id='btn-join' onclick='say()'>Join</button>\";
		            	}else if(sessionStorage.getItem('loggedin')=='true'){
		            		document.getElementById(\"buttonset".$row['id']."\").innerHTML = \"<a href='detail.php?index=".$row['title']."' class='btn btn-primary'id='btn-join'>Join</a>\";
		            	}
			

		            </script>
		        ";
		        echo "</div>";
		        /*echo 			'<a href="detail.php?index='.$row['title'].'" class="btn btn-primary" id="btn-join">Join</a>';*/
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
