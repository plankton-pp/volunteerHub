<!DOCTYPE html>
<?php
	// connect to the database
session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <?php include'navbar.php';?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
    <script type="text/javascript">
    	window.onload = function(){
			window.scrollTo(30, 1000);
		}
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    

    <style type="text/css">

		* {
		    margin: 0;
		    padding: 0;
		    box-sizing: border-box
		}

		body {
		    font-family: 'Kanit', sans-serif;
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
		html {
		  scroll-behavior: smooth;
			}
    </style>

	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<!--<link rel="stylesheet" type="text/css" href="../css/style-detail.css">-->

</head>
<body bgcolor ="FFCC66">
	<?php
	$index = $_GET['index'];
	$id_index = $_GET['id_index']; 
	$_SESSION['index'] = $index;
		
			// connect to the database
			$conn=mysqli_connect("localhost", "root", "","volunteerhub");
			$conn->query("SET NAMES UTF8");
			$sql="SELECT * FROM volunteer WHERE title LIKE '%$index%' AND id = '$id_index'";
			$rs=$conn->query($sql);
			$row = $rs->fetch_assoc();

			echo '<div class="wrapper bg-white mt-sm-5">';
		    	echo '<h4 class="pb-4 border-bottom" align="center">'.$row['title'].'</h4>';
		        echo '<div class="py-3 border-bottom" align="center"> <img alt="img include" align="center" src="../htm/upload/img/'.$row['img'].'" width="400px"> </div>';
		    echo '<div class="py-2">';
		        echo '<div class="row py-2">';
		            echo '<div class="col-md-10"> <label for="description">คำอธิบาย</label>';
		            echo '<div id="decription">'.$row['description'].'</div> <br> </div>';
		            echo '<div class="col-md-10"> <label for="detail">รายละเอียด</label>';
		            echo '<div id="detail">'.$row['detail'].'</div> <br> </div>';
		            echo '<div class="col-md-10"> <label for="expenses">ค่าใช้จ่าย</label>';
		            echo '<div id="expenses" >'.$row['expenses'].'</div> <br> </div>';
		            echo '<div class="col-md-10"> <label for="advantage">ประโยชน์ที่ได้รับ</label>';
		            echo '<div id="advantage" >'.$row['advantage'].'</div> <br> </div>';
		        echo '</div>';
		    echo '</div>';
		    echo '</div>';

		        $_SESSION['acid'] = $row['id'];

				$conn->close();
		        

	?>
				
	<div class="py-3 pb-4 border-bottom " align="center" id="buttonjoin">
		<button class="btn btn-primary mr-3" id="join" data-toggle="modal" data-target="#myModal1" >Join</button>
	</div>
	<?php
    echo "<script type=\"text/javascript\">
                  if(sessionStorage.getItem('loggedin')==null){
                    document.getElementById(\"buttonjoin\").innerHTML = \"<p></p>\";

                  }else if(sessionStorage.getItem('loggedin')=='true'){
                  }
      

                </script>
            ";
  ?> 

    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header" align="center">
                        <h4 class="modal-title" id="myModalLabel">Join Activity</h4>
                       
                        
                    </div>
                    <div class="modal-body">
                        <form method='post' id="my-form" action='' enctype="multipart/form-data" id="my-form">
                        <input type="hidden" name="id" id="id" size="20"  class='form-control' value="<?php echo $_SESSION['id']; ?>" />
                        <input type="hidden" name="acid" id="acid" size="20"  class='form-control' value="<?php echo $_SESSION['acid']; ?>" />
                        <input type="hidden" name="username" id="username" size="20"  class='form-control' value="<?php echo $_SESSION["username"]; ?>" />
                        <input type="hidden" name="name" id="name" size="20"  class='form-control' value="<?php echo $_SESSION["name"]; ?>" />
                        <input type="hidden" name="email" id="email" size="20"  class='form-control' value="<?php echo $_SESSION["email"]; ?>" />
                        <input type="hidden" name="phone" id="phone" size="20"  class='form-control' value="<?php echo $_SESSION["phone"]; ?>" />


                        <div align="center">
                            <input type='button' aling = 'right' class='btn btn-info' value='join' id='joinac'>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                        </div>
                        </form>                           
                    </div>                    
            </div>
        </div>
    </div> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script>  
$(document).ready(function(){
    $('#joinac').click(function(){
            if($('#id').val().length == 0 
                || $('#acid').val().length == 0 
                || $('#username').val().length == 0 
                || $('#name').val().length == 0
                || $('#email').val().length == 0 
                || $('#phone').val().length == 0){
            	Swal.fire({
                              icon: 'error',
                              title: 'Something went wrong!',
                              text: 'Please fill all the field !'
                            })
                }else{
                         event.preventDefault();
                         var form = $("#my-form")[0];
                         var data = new FormData(form);
                          console.log(data);
                        // AJAX request
                        $.ajax({
                          url: 'join.php',
                          type: 'post',
                          data: data,
                          contentType: false,
                          processData: false,
                          success: function(response){
                            console.log(response);
                            if(response != 0){
                              // Show image preview
                              Swal.fire({
                                     icon: 'success',
                                     title: 'Your event has been saved!',
                                     text: 'success',
                                     

                              })  
                              $('#myModal1').modal('hide'); 
                            }
                          },
                          error: function(error){
                            console.log(error);
                          }
                        });
                }    
          });  
});
 </script>  
</body>

</html>