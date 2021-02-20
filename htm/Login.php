<? session_start(); ?>
<html lang="en">
<head>
  <link rel="shortcut icon" href="../img/volunteer.ico" />
  <title>VolunteerHub</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Volunteer Hub</title>
  
  <style>
    @import url('https://fonts.googleapis.com/css?family=Kanit');


    .login-box {
      width: 100%;
      padding: 20px;
      border-radius: 10px;
      color: #fff;
      background-color: rgba(86, 86, 86, 0.7)
    }
    .wrapper-content {
	    color: #CCFFFF;
      margin-top: 100px;
      margin-left: 0px;
    }
    body {
      background-image: url('../img/bg3-2.jpg');
      background-size: cover;
      font-family: 'Kanit', sans-serif;
    }
  </style>
  
</head>
<body>
  <div class="wrapper-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-5" style="margin-left: -80px;">
          <div class="login-box mx-auto mt-3">
            <h1 style="color: #fff; font-size: 50px;">Volunteer Hub</h1>
            <form action="check-login.php" method="POST">
              <div class="form-group">
                <label>USERNAME</label>
                <input type="text" class="form-control" placeholder="กรอกชื่อผู้ใช้งาน" name="username" autofocus="autofocus">
              </div>
              <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" class="form-control" name="password" placeholder="กรอกรหัสผ่าน">
              </div>
              <button type="submit" class="btn btn-primary w-100">LOGIN</button>
            </form>
            <div class="text-center mt-3">
              <a href="register.php" class="text-center" style="color: #fff;">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>