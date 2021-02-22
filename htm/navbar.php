<!DOCTYPE html>
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
          <li class="nav-item">
            <a class="nav-link" href="insertForm.php">InsertForm</a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" href="view.php">view</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editFormTest.php">EditForm</a>
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
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <div class="nav-link" ><li class="nav-item" ><a href="profile.php"><button id="profile">Profile</button></a></li></div>
            <div class="nav-link" ><li class="nav-item" id="logoutbutton"><a href="logout.php" style="color: white;" class="btn btn-danger">Logout</a></li></div>

          </ul>
        </div>
      </div>
    </div>
  </nav>
</head>
<body>
	<style type="text/css">
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
    </style>
</body>
</html>