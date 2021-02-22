<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

                     <button type="button" data-toggle="modal"  class="btn btn-info btn-lg">Edit Detail</button>
                     <button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-info btn-lg">Edit Document & Image</button> 
                </div>
                <br /><br />  
                
                <br />  
                <br />  
           </div>  
           <br />  

 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        &nbsp;
          <h4 class="modal-title" id="myModalLabel">Load Secure Document</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>
              <div class="modal-body">
              <form method='post' action='' enctype="multipart/form-data" id="my-form">
                <!--Detail Information-->
                  <h4><b>Detail Information</b></h4>
                  <!--Title-->
                    <label for="userid">ชื่อโครงการ</label><br/>
                    <input type="text" name="title" size="20" style="width: 400px;" placeholder="Title" value="<?php echo $result['title'];?>" class='form-control'required/><br>
                  <!--Description-->
                    <label for="description">คำอธิบายโครงการ</label><br/>
                    <textarea name="description" class="form-control" style="width: 600px;" cols="40" rows="10"  size="20" placeholder="Description" required><?php echo $result['description'];?></textarea><br>
                  <!--Detail-->
                    <label for="detail">รายละเอียดกิจกรรม</label><br/>
                    <textarea name="detail" class="form-control" style="width: 600px;" cols="40" rows="10"  size="20" placeholder="Detail" required><?php echo $result['detail'];?></textarea><br>
                  <!--Description-->
                    <label for="expenses">ค่าใช้จ่าย</label><br/>
                    <textarea name="expenses" class="form-control" style="width: 600px;" cols="40" rows="10"  size="20" placeholder="Expenses" required><?php echo $result['expenses'];?></textarea>
                    <br/>
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
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        &nbsp;
          <h4 class="modal-title" id="myModalLabel">Load Secure Document</h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>
              <div class="modal-body">
              <form method='post' action='' enctype="multipart/form-data" id="my-form">
                  <!--Detail Information-->
                  <h4><b>Document Information</b></h4>
                  <!--Image-->
                  <label for="file">ภาพประกอบกิจกรรม</label>
                  <input type='file' name='img' id='img' value="" class='form-control' ><br>
                  <!--banner-->
                  <label for="file">ภาพปกกิจกรรม</label>
                  <input type='file' name='img_banner' id='img_banner' class='form-control' ><br>
                   <!--doc-->
                  <label for="file">หนังสือขอนุญาตจัดกิจกรรม</label>
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