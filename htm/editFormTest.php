<!DOCTYPE html>
<?php session_start(); 
  include 'navbar2.php';
?>
<html>
<head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<body>
  <?php 

  $conn=mysqli_connect("localhost", "root", "","volunteerhub");
  $conn->query("SET NAMES UTF8"); 

  $sql = "SELECT * FROM volunteer WHERE id = '".$_SESSION['id']."' ";
  $query= mysqli_query($conn,$sql);
  
  $result = mysqli_fetch_array($query);

  if(!$result){
    echo "Not found ID=".$_SESSION['id'];
  }else
  {
    //echo "error check id=".$result['ID'];
  
  }
  $conn_user=mysqli_connect("localhost", "root", "","volunteerhub");
  $conn_user->query("SET NAMES UTF8"); 

  $sql_user = "SELECT * FROM register WHERE id = '".$_SESSION['id']."' ";
  $query_user= mysqli_query($conn_user,$sql_user);
  
  $result_user = mysqli_fetch_array($query_user);

  if(!$result_user){
    echo "Not found ID=".$_SESSION['id'];
  }else
  {
    //echo "error check id=".$result['ID'];
  
  }
  ?>
 <br/>  
           <div class="container">  
                <h3 align="center">Upload Multiple Image by Using PHP Ajax Jquery with Bootstrap Modal</h3><br />  
                <br />  
                <br />  
                <div align="center">
                     <button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-info btn-lg">Edit</button>  
                </div>
                <br /><br />  
                
                <br />  
                <br />  
           </div>  
           <br />   
 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        &nbsp;
          <h4 class="modal-title" id="myModalLabel">Load Secure Document</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>
              <div class="modal-body">
              <form method='post' action='' enctype="multipart/form-data" id="my-form">
                  <!--User Information-->
                  <h4><b>User Information</b></h4>
                  <!--Username-->
                    <label for="userid">User Name</label>
                    <input type="text" name="userid" size="20" value="<?php echo $result_user['username'];?>" class='form-control'readonly/><br>
                  <hr/>

                  <!--Detail Information-->
                  <h4><b>Detail Information</b></h4>
                  <!--Title-->
                    <label for="userid">Title</label><br/>
                    <input type="text" name="title" size="20" value="<?php echo $result['title'];?>" class='form-control'required/><br>
                  <!--Description-->
                    <label for="description">Description</label><br/>
                    <textarea name="description" class="form-control" cols="40" rows="10"  size="20" placeholder="Description" required><?php echo $result['description'];?></textarea>
                    
                    <hr/>

                  <!--Image-->
                  <label for="file">Image</label>
                  <input type='file' name='img' id='img' value="" class='form-control' ><br>
                  <!--banner-->
                  <label for="file">Project Banner</label>
                  <input type='file' name='img_banner' id='img_banner' class='form-control' ><br>

                  <input type='button' class='btn btn-info' value='Upload' id='upload'>
              </form>

                <!-- Preview-->
              <div id='preview'></div>
              </div>

              <div class="modal-body3">
              </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
      </div>
   </div>
</div> 
 <script>  
$(document).ready(function(){
  $('#upload').click(function(){

    event.preventDefault();
     var form = $("#my-form")[0];
     var data = new FormData(form);
    // AJAX request
    $.ajax({
      url: 'upload2.php',
      type: 'post',
      data: data,
      contentType: false,
      processData: false,
      success: function(response){
        console.log(response);
        if(response != 0){
          // Show image preview
          $('#preview').html(" Process Started");
        }else{
          alert('file not uploaded');
        }
      },
      error: function(error){
        console.log(error);
      }
    });
  });
});
 </script>  
</body>
</html>