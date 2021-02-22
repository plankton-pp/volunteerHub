<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Upload Multiple Image by Using PHP Ajax Jquery with Bootstrap Modal</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container">  
                <h3 align="center">Upload Multiple Image by Using PHP Ajax Jquery with Bootstrap Modal</h3><br />  
                <br />  
                <br />  
                <div align="center">  
                     <button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-info btn-lg">open</button>  
                </div>  
                <br /><br />  
                
                <br />  
                <br />  
           </div>  
           <br />  
      </body>  
 </html>  
 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Load Secure Document</h4>
                            </div>
                            <div class="modal-body">
                            <form method='post' action='' enctype="multipart/form-data" id="my-form">
                            <label for="userid">userid</label>
                            <input type="text" name="userid" size="20"  class='form-control'/><br>


                            <label for="file">img</label>
                            <input type='file' name='img' id='img' class='form-control' ><br>

                            <label for="file">banner</label>
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