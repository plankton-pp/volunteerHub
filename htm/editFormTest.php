<!DOCTYPE html>
<?php session_start(); 
  include 'navbar2.php';
?>
<html>
<head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

           <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css">
          <!-------------------------------------------------------------------------------------------------------------------------------------->
          <!--Script-->
          <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/extensions/key-events/bootstrap-table-key-events.min.js"></script>
     <!-------------------------------------------------------------------------------------------------------------------------------------->
     <script type="text/javascript" src="../js/script-main.js"></script>
</head>
<body>
  <style type="text/css">
    .user_row{
      padding-right: 30px; padding-bottom: 10px;
    }
    .user_col{
      padding-bottom: 10px;
    }
  </style>
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

  $sql_user = "SELECT * FROM register WHERE id = '".$_SESSION['id']."' ";
  $query_user= mysqli_query($conn,$sql_user);
  
  $result_user = mysqli_fetch_array($query_user);

  if(!$result_user){
    echo "Not found ID=".$_SESSION['id'];
  }else
  {
    //echo "error check id=".$result['ID'];
  
  }
  ?>
           <div class="container">
                 <!--User Information-->
                  <h2><b>ข้อมูลส่วนตัว</b></h2><br>
                  <table>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ID</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['id'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ชื่อ</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['username'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">อีเมล</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['email'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ที่อยู่</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="userid" size="20" value="<?php echo $result_user['address'];?>" class='form-control' style="width: 200px; height: 100px;"readonly/>
                      </td>
                    </tr>
                  </table>
                  <hr/>  
                <div align="center">
                    <table
                      id="table"
                      data-toggle="table"
                      data-url="json/data1.json">
                      <thead>
                        <tr>
                          <th data-field="id">ID</th>
                          <th data-field="name">Item Name</th>
                          <th data-field="price">Item Price</th>
                        </tr>
                      </thead>
                    </table>
                     <button type="button" onclick="callResult()"data-toggle="modal"  class="btn btn-info btn-lg">Edit Detail</button>
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