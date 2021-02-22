<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: aliceblue
}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 1000px
}

h4 {
    letter-spacing: -1px;
    font-weight: 400
}

.img {
    width: 70px;
    height: 70px;
    border-radius: 6px;
    object-fit: cover
}

#img-section p,
#deactivate p {
    font-size: 12px;
    color: #777;
    margin-bottom: 10px;
    text-align: justify
}

#img-section b,
#img-section button,
#deactivate b {
    font-size: 14px
}

label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #777;
    padding-left: 3px
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}

select {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 10px;
    height: 40px;
    padding: 5px 10px
}

select:focus {
    outline: none
}

.button {
    background-color: #fff;
    color: #0779e4
}

.button:hover {
    background-color: #0779e4;
    color: #fff
}

.btn-primary {
    background-color: #0779e4
}

.danger {
    background-color: #fff;
    color: #e20404;
    border: 1px solid #ddd
}

.danger:hover {
    background-color: #e20404;
    color: #fff
}

@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}
    </style>
	<?php
	// connect to the database
session_start();
?>
	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<!--<link rel="stylesheet" type="text/css" href="../css/style-detail.css">-->

</head>
<body bgcolor ="FFCC66">
	<?php
	$index = $_GET['index'];
	$_SESSION['index'] = $index;
		
			// connect to the database
			$conn=mysqli_connect("localhost", "root", "","volunteerhub");
			$conn->query("SET NAMES UTF8");
			$sql="SELECT * FROM volunteer WHERE title LIKE '%$index%'";
			$rs=$conn->query($sql);
			$row = $rs->fetch_assoc();

			echo '<div class="wrapper bg-white mt-sm-5">';
		    	echo '<h4 class="pb-4 border-bottom" align="center">'.$row['title'].'</h4>';
		        echo '<div class="py-3 border-bottom" align="center"> <img alt="img include" align="center" src="../img/'.$row['img'].'"> ';
		    	echo '</div>';
		    echo '<div class="py-2">';
		        echo '<div class="row py-2">';
		            echo '<div class="col-md-6"> <label for="description">คำอธิบาย</label> </div>';
		            echo '<div id="decription" align="center">'.$row['description'].'</div>';
		            echo '<div class="col-md-6"> <label for="expenses">ค่าใช้จ่าย</label> </div>';
		            echo '<div id="expenses" align="center">'.$row['expenses'].'</div>';
		            echo '<div class="col-md-6"> <label for="advantage">ประโยชน์ที่ได้รับ</label> </div>';
		            echo '<div id="advantage" align="center">'.$row['advantage'].'</div>';
		        echo '</div>';

		        $_SESSION['acid'] = $row['id'];

				$conn->close();
		        

	?>
				
	<div class="py-3 pb-4 border-bottom " align="center"> 
		<button class="btn btn-primary mr-3">Join</button>
	</div>
</body>

</html>