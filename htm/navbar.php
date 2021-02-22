<!DOCTYPE html>
<html>
<head>
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
     
          <li class="nav-item" id="view">
            <a class="nav-link" href="view.php">view</a>
          </li>
          <li class="nav-item" id="editFormTest">
            <a class="nav-link" href="editFormTest.php">EditForm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="tutorial.php" >Tutorial</a>
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