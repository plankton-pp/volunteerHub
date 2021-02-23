<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
  <head>
    <?php include'navbar.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <style type="text/css">
      body {
        font-family: 'Kanit', sans-serif;
        background-color: aliceblue
    }

    </style>


    <title>Admin</title>
    
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
                        <input type="text" name="username" size="20" value="<?php echo $result_user['username'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">อีเมล</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="email" size="20" value="<?php echo $result_user['email'];?>" class='form-control' style="width: 200px;"readonly/>
                      </td>
                    </tr>
                    <tr>
                      <td class="user_row">
                         <!--Username-->
                          <label for="userid">ที่อยู่</label>
                      </td>
                      <td class="user_col">
                        <input type="text" name="address" size="20" value="<?php echo $result_user['address'];?>" class='form-control' style="width: 200px; height: 100px;"readonly/>
                      </td>
                    </tr>
                  </table>
                  <hr/> 
  	 <table class="table-border" width="1300" align="center" border="0"
		  id="table"
		  data-toggle="table"
		  data-search="true"
		  data-pagination="true"
		  data-page-list="[10, 25, 50, 100, all]"
		  data-click-to-select="true"
		  data-url="myActivityJson.php">
	  <thead class="thead-dark">
	    <tr>
	      <th data-width="100" data-field="title">Title</th>
        <th data-width="100" data-align="center" data-field="operate" data-search-formatter="false" data-formatter="operateFormatter" data-events="operateEvents">Action</th>
	    </tr>
	  </thead>
	</table>

  <!----Modal Edit---->
    <div class="modal fade" id="modalMemberEdit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Member</h5>
                <button type="button" class="close" id="modalMemberEditClose" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <table align="center">
                      <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="title">ชื่อกิจกรรม</label>
                              <input type="hidden" id="id">
                              <input type="text" name="title" id="title" cols="40" rows="5"  required onkeyup="checkForm()">
                            </div>
                        </td>
                </tr>
                      <tr style="height: 100px;">
                          <td valign="bottom" align="center">
                              <button type="button" class="btn btn-sm btn-primary" id="btn-save">Save Changes</button><br />
                          </td>
                      </tr>
                    </table>
                </form>
              </div>
          </div>
      </div>
    </div>

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


    <script type="text/javascript">

    	var $table = $("#table");

    	function operateFormatter(value, row, index) {
          return [ 
                '<a class="edit" href="javascript:void(0)" title="Edit"><i style="font-size: 20px; color: #ffc107;" class="fas fa-edit"></i></a>' + '\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0',
               '<a class="remove" href="javascript:void(0)" title="Remove"><i style="font-size: 20px; color: #dc3545;" class="fas fa-trash"></i></a>'

            ].join('')
       }
       window.operateEvents = {
       		'click .edit': function (e, value, row, index) {
            window.location = "editFormResult.php?id=" + row.id
        	},

          'click .remove': function (e, value, row, index) {

            Swal.fire({
                 title: 'Are you sure ?',
                 text: 'คุณต้องการลบกิจกรรมนี้ ใช่หรือไม่ ?',
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                 cancelButtonColor: '#d33',
                 confirmButtonText: 'Comfirm',
             }).then((result) => {
                if (result.isConfirmed) {
                      $.ajax({
                        url: "delete.php",
                        type: 'GET',
                        data: {id : row.id},
                        cache: false,
                        success: function (data) {
                          Swal.fire({
                              icon: 'success',
                              title: 'Success !',
                              text: 'ลบข้อมูลสำเร็จแล้ว',
                              timer: 5000
                          })
                $table.bootstrapTable('refreshOptions', {url: 'viewjson.php'})
              },
              error: function (error) {
                console.log("error is " + error);
              }
            });
                  }
            })
        	}  
    	}
    </script>
  </body>
</html>