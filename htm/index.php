<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">

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

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">VolunteerHub</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item" id="insertForm">
	          <a class="nav-link" href="insertForm.php">InsertForm</a>
	        </li>
	   
	        <li class="nav-item" id="view">
	          <a class="nav-link" href="view.php">view</a>
	        </li>
	        <li class="nav-item" id="editFormTest">
	          <a class="nav-link" href="editFormTest.php">EditForm</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link"  href="tutorial.php" >Tutorial</a>
	        </li>
	        <li class="nav-item">
		        	<form method="get" class="nav-link">
						<input class="nav-item" list="namesugg" name="search" onkeyup="searchName(this.value)">
						<datalist id="namesugg">
						</datalist>
						<input class="nav-item" type="submit" value="search">
					</form>
		        </li>
	      </ul>
	      <div class="d-flex">
	      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
	      		<li class="nav-item" ><div class="nav-link" id="profilediv"><a href="profile.php" style="margin-right: -30px;"><button id="profile">Profile</button></a></li></div>
	      		<div class="nav-link" ><li class="nav-item" id="logoutbutton"><a href="logout.php" style="color: white;" class="btn btn-danger">Logout</a></div>
	      		</li>


	      	</ul>
	      </div>
	    </div>
	  </div>
	</nav>

</head>
<body class="body">
<style>
	.hide-text {
    	visibility: hidden;
	}

/* external css: flickity.css */

* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { font-family: 'Kanit', sans-serif; }

.gallery {
  background: #EEE;
}

.gallery-cell {
  width: 66%;
  height: 450px;
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
#profile{
		width: 150px;
		height: 36px;
		border-radius: 50px;
		color: white;
		background-color:#555555 ;
		border:0px;
		opacity: 0.8;
	}
#profile:hover {
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,1);
	}
html {
	  scroll-behavior: smooth;
		}
</style>
<script type="text/javascript">
    	window.onload = function(){
			window.scrollTo(30, 500);
		}
    </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	function say(str){
		Swal.fire({
					  icon: 'error',
					  title: 'คุณยังไม่ได้ Login',
					  text: 'กรุณา Login เพิ้อเข้าใช้งาน!'
					})
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
  <div class="gallery-cell" style="background: url('../img/banner3_1_1.jpg')"></div>
  <div class="gallery-cell" style="background: url('../img/banner3_2_1.jpg')"></div>
  <div class="gallery-cell" style="background: url('../img/banner3_3_1.jpg')"></div>
</div>
<br><br>
<div align="center">
  <h3>หมวดหมู่กิจกรรม</h3>
  <button onclick="showList('')" class="btn-primary">Search</button>
  <button onclick="showList('เด็กและเยาวชน')">เด็กและเยาวชน</button>
  <button onclick="showList('สิ่งแวดล้อม')">สิ่งแวดล้อม</button>
  <button onclick="showList('สัตว์')">สัตว์</button>
  <button onclick="showList('ผู้สูงอายุ')">ผู้สูงอายุ</button>
  
<div align="center" style="margin-top: 30px; margin-bottom: 30px;">			
	<table id="table-card">
		<?php
			// connect to the database
			$conn=mysqli_connect("localhost", "root", "","volunteerhub");
			$conn->query("SET NAMES UTF8");
			if(isset($_GET['search'])&&$_GET['search']<>""){
				$search = $_GET['search'];
				$sql="SELECT * FROM volunteer WHERE title LIKE '%$search%' AND status ='pass'";
			}else{
				$sql="SELECT * FROM volunteer WHERE status LIKE '%pass%'";
			}
			$rs=$conn->query($sql);
			$mod=1;
			if($row = $rs->fetch_assoc()){
				while($row = $rs->fetch_assoc()) {
				if($mod%4==1){
					echo "<tr>";
				}
				echo	"<td style=\"padding-left: 25px;\">";
				echo		"<div class=\"card\">";
				echo		  '<a href="detail.php?index='.$row['title'].'"><img alt="Avatar" src="../htm/upload/img_banner/'.$row['img_banner'].'" style="width:100%; height:150px;"/></a>';
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
		            		
		            		document.getElementById(\"buttonset".$row['id']."\").innerHTML = \"<button class='btn btn-primary'id='btn-join' onclick='say()'>Join</button>\";
		            		document.getElementById(\"logoutbutton\").innerHTML = \"<a href='login.php' class='btn btn-primary'>Login</a>\";
		            		document.getElementById(\"insertForm\").innerHTML = \"<p></p>\";
		            		document.getElementById(\"editFormTest\").innerHTML = \"<p></p>\";
		            		document.getElementById(\"view\").innerHTML = \"<p></p>\";
		            		document.getElementById(\"profilediv\").innerHTML = \"<p></p>\";
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
				if($mod%4==0){
					echo	"</tr>";
				}
				$mod++;
				}
			}
			function percentage($target,$attendants){
				$perc = $target/100;
				$res = $attendants/$perc;
				$ret = number_format((float)$res, 2, '.', '');
				return $ret;
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
