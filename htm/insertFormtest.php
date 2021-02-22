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
                                <h4 class="modal-title" id="myModalLabel">เพิ่มกิจกรรม</h4>
                            </div>
                        <div class="modal-body">
                            <form method='post' action='' enctype="multipart/form-data" id="my-form">
                              <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="title">ชื่อกิจกรรม</label>
                              <input type="hidden" id="id">
                              <input type="text" name="title" id="title" cols="40" rows="5"  required >
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="description">คำอธิบาย</label>
                              <textarea name="description" id="description" cols="40" rows="10"  size="20"  required "></textarea>
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="attendants_target">จำนวนคนที่ต้องการ</label>
                              <input type="number" name="target" id="attendants_target" maxlength"10"  required >
                            </div>
                        </td>
                </tr>

                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="attendants">จำนวนคนที่เข้าร่วม</label>
                              <input type="number" name="attendants" id="attendants" maxlength"10"   required >
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="due_date">วันที่จัดกิจกรรม</label>
                              <input type="date" name="due_date" id="due_date" placeholder="Due date">
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="detail">รายละเอียด</label>
                              <textarea name="detail" id="detail" cols="40" rows="10"  size="20"  required ></textarea>
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="expenses">ค่าใช้จ่าย</label>
                              <textarea name="expenses" id="expenses" cols="40" rows="10" required ></textarea> 
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="advantage">ประโยชน์ที่ได้รับ</label>
                              <textarea name="advantage" id="advantage" cols="40" rows="10" placeholder="Advantage" required ></textarea>
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="type">ประเภทกิจกรรม</label>
                              <select name="type" id="type" placeholder="Type" required>
                                  <option value="สิ่งแวดล้อม">สิ่งแวดล้อม</option>
                                  <option value="เด็กและเยาวชน">เด็กและเยาวชน</option>
                                  <option value="สัตว์">สัตว์</option>
                                  <option value="ผู้สูงอายุ">ผู้สูงอายุ</option>
                                  <option value="ผู้พิการและผู้ป่วย">ผู้พิการและผู้ป่วย</option>
                              </select>
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="img_banner">ภาพปกกิจกรรม</label>
                              <input type="file" accept="image/*" id="img_banner" placeholder="Other image">
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="img">ภาพอื่น ๆ</label>
                              <input type="file" accept="image/*" id="img" placeholder="Other image">
                            </div>
                        </td>
                </tr>

                              <input type='button' class='btn btn-info' value='savebtn' id='savebtn'>
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