<!DOCTYPE html> 
<?php session_start();
include'navbar.php';
?> 
 <html>  
      <head>  
      	<title>Profile</title>

      	<!----------------------------------------------------------------------------------------------------->
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		  <link rel="shortcut icon" href="../img/volunteer.ico" />
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <!-- Latest compiled and minified CSS -->
		  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->
		  <link rel="stylesheet" type="text/css" href="../css/style-main.css">
		  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
		  <script type="text/javascript" src="../js/script-main.js"></script>
		  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		  <!------------------------------------------------------------------------------------------------------->
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
			<link rel="stylesheet" type="text/css" href="../css/profile.css">

      </head>  
      <body> 
      	<?php 

	$conn=mysqli_connect("localhost", "root", "","volunteerhub");
	$conn->query("SET NAMES UTF8");	

	$sql = "SELECT * FROM register WHERE id = '".$_SESSION['id']."' ";
	$query= mysqli_query($conn,$sql);
	
	$result = mysqli_fetch_array($query);

	if(!$result){
		echo "Not found ID=".$_SESSION['id'];
	}else
	{
		//echo "error check id=".$result['ID'];
	
	}
	?>
      	<center>
      	
	    <div class="padding">
	        <div class="row container d-flex justify-content-center">	     
	                <div class="card user-card-full">
	                    <div class="row m-l-0 m-r-0">
	                        <div class="col-sm-4 bg-c-lite-green user-profile">
	                            <div class="card-block  m-b-25">
	                            		<p class="m-b-10 f-w-600">Profile</p>
	                                   	<img src="<?php echo "upload/pic/".$result['photo']; ?>" width="100" height="100">

	                            </div>
	                        </div>
	                        <div class="col-sm-8">
	                            <div class="card-block">
	                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
	                                <div class="row">
	                                	<div class="col-sm-6" align="left">
	                                        <p class="m-b-10 f-w-600">Username</p>
	                                        <h6><?php echo $result['username'];?></h6>
	                                    </div>
	                                    <div class="col-sm-6" align="left">
	                                        <p class="m-b-10 f-w-600">Name</p>
	                                        <h6><?php echo $result['name'];?></h6>
	                                    </div>
	                                    <div class="col-sm-6" align="left">
	                                        <p class="m-b-10 f-w-600">Email</p>
	                                        <h6><?php echo $result['email'];?></h6>
	                                    </div>
	                                    <div class="col-sm-6" align="left">
	                                        <p class="m-b-10 f-w-600">Phone</p>
	                                        <h6><?php echo $result['telephone'];?></h6>
	                                    </div>
	                                    <div class="col-sm-6" align="left">
	                                        <p class="m-b-10 f-w-600">Adress</p>
	                                        <h6><?php echo $result['address'];?></h6>
	                                    </div>
	                                    <div class="col-sm-6" align="left">
	                                        <p class="m-b-10 f-w-600">Status</p>
	                                        <h6><?php echo $result['status'];?></h6>
	                                    </div>
	                                </div>
	                              
							            <div align="right">  
						                     <button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-info btn-lg">Edit</button>  
						                </div>  
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            
	        	
	   
	
      	</center>
     
       
           
            
      </body>  
       <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                            </div>
	                            <div class="modal-body">
		                            <form method='post' id="my-form" action='' enctype="multipart/form-data" id="my-form">
		                            <input type="hidden" name="id" id="id" size="20"  class='form-control' value="<?php echo $result['id'];?>" />

		                            <label for="userid">Username</label>
		                            <input type="text" name="username" id="username" size="20"  class='form-control' value="<?php echo $result['username'];?>"><br>

		                            <label for="userid">Name</label>
		                            <input type="text" name="name" id="name" size="20"  class='form-control' value="<?php echo $result['name'];?>" ><br>

		                            <label for="userid">Email</label>
		                            <input type="text" name="email" id="email" size="20"  class='form-control' value="<?php echo $result['email'];?>" ><br>

		                            <label for="userid">Phone</label>
		                            <input type="text" name="phone" id="phone" size="20"  class='form-control' value="<?php echo $result['telephone'];?>" ><br>

		                            <label for="userid">Address</label>
		                            <input type="text" name="address" id="address" size="20"  class='form-control' value="<?php echo $result['address'];?>"	><br>

		                            <label for="userid">Status</label>
		                            <input type="text" name="status" id="status" size="20"  class='form-control' value="<?php echo $result['status'];?>"	readonly><br>

		                            <label for="userid">Photo</label>
		                            <input type="text" name="photo" id="photo" size="20"  class='form-control' value="<?php echo $result['photo'];?>"	readonly><br>
		                            <label for="userid">Change Photo</label>
		                            <input type="file" name="newphoto" id="newphoto" size="20"  class='form-control' value=""><br>

		                            <div align="right">
		                            	<input type='button' aling = 'right' class='btn btn-info' value='Save' id='save'>
		                            </div>
	                            	</form>                           
	                            </div>                      
                            
                        </div>
                    </div>
  		</div> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script>  
$(document).ready(function(){
	$('#save').click(function(){
			if($('#username').val().length == 0 
				|| $('#name').val().length == 0 
				|| $('#email').val().length == 0 
				|| $('#address').val().length == 0 
				|| $('#phone').val().length == 0){
			Swal.fire({

							  icon: 'error',
							  title: 'Something went wrong !',
							  text: 'Please fill all the field !'
							})
		        }else{
					        	event.preventDefault();
					     var form = $("#my-form")[0];
					     var data = new FormData(form);
					    // AJAX request
					    $.ajax({
					      url: 'updateprofile.php',
					      type: 'post',
					      data: data,
					      contentType: false,
					      processData: false,
					      success: function(response){
					        console.log(response);
					        if(response != 0){
					          // Show image preview
					          Swal.fire({
			          				 icon: 'saved',
									 title: 'Your event has been saved!',
									 text: 'success',
									 

					          })	
					           window.location = "profile.php";
					         

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
 </html>  
