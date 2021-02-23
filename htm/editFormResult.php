<!DOCTYPE html>  
<?php session_start();?>
 <html>  
      <head>  
          <link rel="shortcut icon" href="../img/volunteer.ico" />
  <title>VolunteerHub - Editing Form</title>
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <?php include 'navbar.php';?>  
           <style type="text/css">
        .user_row{
          padding-right: 30px; padding-bottom: 10px;
        }
        .user_col{
          padding-bottom: 10px;
        }
        body{
          background-image: url("../img/edit_cover.jpg");
        }
        #subBody{
          margin-left: 300px;
          width: 60%;
          padding: 20px;
          border-radius: 10px;
          color: #fff;
          background-color: rgba(86, 86, 86, 0.8)
        }
        </style>

        <script>
          var ar = '<?php echo $_SESSION["status"]; ?>';

          function myFunction() {
            if(ar != "admin"){
              
              
              document.getElementById("status").style.display = "none";
            }
          }
          </script>
      </head>  
      <body onload="myFunction()"> 
      <div id="subBody" class="col-lg-8">
  <?php 
  $index = $_GET['id'];
  $_SESSION["edit_index"] = $index;
  $conn=mysqli_connect("localhost", "root", "","volunteerhub");
  $conn->query("SET NAMES UTF8"); 

  $sql = "SELECT * FROM volunteer WHERE id = '".$index."' ";
  $query= mysqli_query($conn,$sql);
  
  $result = mysqli_fetch_array($query);


  $_SESSION['img_banner'] = $result['img_banner'];
  $_SESSION['img'] = $result['img'];
  $_SESSION['doc'] = $result['doc'];

  if(!$result){
    echo "Not found ID=".$_SESSION['id'];
  }else
  {
    //echo "error check id=".$result['ID'];
  
  }
  ?>
           <div class="container">
                 <!--User Information-->
                  <h2><b>ข้อมูลกิจกรรม</b></h2><br>
                  <hr>
                  <form  method='post' action='' enctype="multipart/form-data" id="my-form">
                  <table>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ID</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="id" size="20" value="<?php echo $result['id'];?>" class='form-control' style="width: 200px;"/ readonly>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ชื่อโครงการ</label>
                      </td>
                      <td class="user_col">
                        <input type="text" id="title" name="title" size="20" value="<?php echo $result['title'];?>" class='form-control' style="width: 200px;"/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">คำอธิบายโครงการ</label>
                      </td>
                      <td class="user_col">
                        <input type="text" id="description"name="description" size="20" value="<?php echo $result['description'];?>" class='form-control' style="width: 200px;"/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">รายละเอียดกิจกรรม</label>
                      </td>
                      <td class="user_col">
                        <input type="text" id="detail" name="detail" size="20" value="<?php echo $result['detail'];?>" class='form-control' style="width: 200px; height: 100px;"/>
                      </td>
                    </tr>
                  </table>
                  <hr>
                  <table>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">จำนวนผู้เข้าร่วมที่คาดหวัง</label>
                      </td>
                      <td class="user_col">
                        
                        <input type="number" min=0 id="target" name="attendants_target" size="20" value="<?php echo $result['attendants_target'];?>" class='form-control' style="width: 200px;"  />
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">จำนวนผู้เข้าร่วมโครงการ</label>
                      </td>
                      <td class="user_col">
                        <input type="number" min=0 id="attendants" name="attendants" size="20" value="<?php echo $result['attendants'];?>" class='form-control' style="width: 200px; " />
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">วัน/เวลาดำเนินการ</label>
                      </td>
                      <td class="user_col">
                        <input type="text" id="due_date" name="due_date" size="20" value="<?php echo $result['due_date'];?>" class='form-control' style="width: 200px;"/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ค่าใช้จ่าย</label>
                      </td>
                      <td class="user_col">
                        <input type="text" id="expenses" name="expenses" size="20" value="<?php echo $result['expenses'];?>" class='form-control' style="width: 200px;"/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ประโยชน์ที่จะได้รับ</label>
                      </td>
                      <td class="user_col">
                        <input type="text" id="advantage"name="advantage" size="20" value="<?php echo $result['advantage'];?>" class='form-control' style="width: 200px;"/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ประเภทโครงการ</label>
                      </td>
                      <td class="user_col">
                        <select name="type" id="type" placeholder="Type"class='form-control' >
                          <option value="สิ่งแวดล้อม">สิ่งแวดล้อม</option>
                            <option value="เด็กและเยาวชน">เด็กและเยาวชน</option>
                            <option value="สัตว์">สัตว์</option>
                            <option value="ผู้สูงอายุ">ผู้สูงอายุ</option>
                            <option value="ผู้พิการและผู้ป่วย">ผู้พิการและผู้ป่วย</option>
                        </select>
                      </td>
                    </tr>
                  </table>
                  <hr> 
                  <table>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ภาพปกโครงการ</label>
                      </td>
                      <td class="user_col">
                        <a href="../htm/upload/img_banner/<?php echo $result['img_banner'];?>"><img src="../htm/upload/img_banner/<?php echo $result['img_banner'];?>" width="200px"></a>
                        <input type = "file" id="img_banner" accept="image/*" name = "img_banner" id="img_banner" required><br>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ภาพกิจกรรม</label>
                      </td>
                      <td class="user_col">
                        <a href="../htm/upload/img/<?php echo $result['img'];?>"><img src="../htm/upload/img/<?php echo $result['img'];?>"width="200px"></a>
                        <input type = "file" id="img" accept="image/*" name = "img" id="img" required><br>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">หลักฐานการขออนุญาตจัดกิจกรรม</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="id" size="20" value="<?php echo $result['doc'];?>" class='form-control' style="width: 400px;"/ readonly>
                        <input type = "file" id="doc"accept="application/pdf" name = "doc" id="doc" required>
                      </td>
                    </tr>
                    <tr id="status">
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">สถานะ</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="id" size="20" value="<?php echo $result['status'];?>" class='form-control' style="width: 400px;"/ >
                        
                      </td>
                    </tr>
                  </table>
                  <hr/>    
           <br />  
           <div class="container">
                <div align="center"> 
                     <button id="butsave"type="submit" data-toggle="modal" data-target="#myModal1" class="btn btn-info btn-lg"><i style='font-size:24px' class='far'>&#xf044;</i> SAVE</button> 
                     <a href="editFormTest.php"><button type="button" class="btn btn-warning btn-lg"><i style='font-size:24px' class='fas'>&#xf2ed;</i> DISCARD</button></a> 
                </div>  
                <br /><br />  
                
                <br />  
                <br />  
           </div>
           </form>
             <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
              <script>
                $(document).ready(function() {
                  $('#butsave').on('click', function() {
                      event.preventDefault();
                            var form = $("#my-form")[0];
                            var data = new FormData(form);

                    if($("#title").val()!="" && $("#description").val()!="" && $("#target").val()!="" && $("#attendant").val()!="" && $("#due_date").val()!="" && $("#detail").val()!=""  && $("#expenses").val()!="" && $("#advantage").val()!="" && $("#type").val()!=""){
                      $.ajax({
                        url: 'editForm.php',
                        type: 'post',
                        data: data,
                        processData: false,
                          contentType: false,
                          cache: false,
                        success: function(response){
                          console.log(response)
                          //var data = JSON.parse(dataResult);
                          Swal.fire(
                            'saved',
                            'Your event has been saved!',
                            'success'
                          ) 
                        }       
                      }); 
                      }else{
                        Swal.fire({
                          icon: 'error',
                          title: 'Something went wrong !',
                          text: 'Please fill all the field !'
                        }).then(function(){ 
                            //window.location = "insertForm.htm";
                            });
                      }
                    });
                  });
              </script>
      </div>
      </body>  
 </html> 