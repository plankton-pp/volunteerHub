<?php
?>
<html>
<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Register</title>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Kanit');


    .login-box {
      max-width: 35rem;
      padding: 20px;
      border-radius: 0px;
      color: #fff;
      background-color: rgba(86, 86, 86, 0.3)
    }
    .wrapper-content {
	  color: #CCFFFF;
      margin-top: 100px;
    }
    body {
      background-image: url('img/bg.jpg');
      background-size: cover;
      font-family: 'Kanit', sans-serif;
    }
  </style>

</head>
<body>
    <div class="container">
        <div class="card card-register mx-auto" style="max-width: 30rem; background-color: rgba(86, 86, 86, 0.3);color: #fff; margin-top: 100px;">
            <div class="card-body">
                <form action="addregis.php" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <span><i class="fas fa-user"></i><font size ="12px"> REGISTER </font> </span>
                            <hr />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label><font size ="5px"> USERNAME</font></label>
                            <input type="text" name="username" class="form-control">
                                
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label><font size ="5px"> PASSWORD </font></label>
                                    <input type="password" name="password" class="form-control">
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label><font size ="5px"> NAME </font></label>
                                    <input type="text" name="name" class="form-control">
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label><font size ="5px"> E-MAIL</font></label>
                                    <input type="text" name="email" class="form-control">
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label><font size ="5px">ADDRESS</font></label>
                                    <input type="text" name="address" class="form-control">
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label><font size ="5px">PHONE</font></label>
                                    <input type="text" name="telephone" class="form-control">
                                        
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <button class="btn btn-primary btn-md w-50">REGISTER</button>
                    <!-- <a class="btn btn-primary btn-block" href="login.php">Register</a> -->
                </form>
                
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>