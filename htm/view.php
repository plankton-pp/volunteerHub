<!DOCTYPE html>
<html lang="en">
  <head>
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


    <title>Admin</title>
    <?php include'navbar.php';?>
  </head>
  <body>

  	 <table class="table-border" width="1300" align="center" border="0"
		  id="table"
		  data-toggle="table"
		  data-search="true"
		  data-pagination="true"
		  data-page-list="[10, 25, 50, 100, all]"
		  data-click-to-select="true"
		  data-url="viewjson.php">
	  <thead class="thead-dark">
	    <tr>
	      <th data-width="100" data-field="id">ID</th>
	      <th data-width="100" data-field="title">ชื่อกิจกรรม</th>
	      <th data-width="100" data-field="description">คำอธิบาย</th>
	      <th data-width="100" data-field="attendants_target">จำนวนคนที่ต้องการ</th>
	      <th data-width="100" data-field="attendants">จำนวนคนที่เข้าร่วม</th>
	      <th data-width="100" data-field="due_date">วันที่จัดกิจกรรม</th>
        <th data-width="100" data-field="due_date">วันที่จัดกิจกรรม</th>
	      <th data-width="100" data-field="expenses">ค่าใช้จ่าย</th>
	      <th data-width="100" data-field="advantage">ประโยชน์ที่ได้รับ</th>
	      <th data-width="100" data-field="type">ประเภทกิจกรรม</th>
	      <th data-width="100" data-field="img_banner" data-formatter="formatPic">ภาพปก</th>
	      <th data-width="100" data-field="img">ภาพอื่น ๆ</th>
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
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="description">คำอธิบาย</label>
                              <textarea name="description" id="description" cols="40" rows="10"  size="20"  required onkeyup="checkForm()"></textarea>
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="attendants_target">จำนวนคนที่ต้องการ</label>
                              <input type="number" name="target" id="attendants_target" maxlength"10"   required onkeyup="checkForm()">
                            </div>
                        </td>
                </tr>

                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="attendants">จำนวนคนที่เข้าร่วม</label>
                              <input type="number" name="attendants" id="attendants" maxlength"10"   required onkeyup="checkForm()">
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
                              <textarea name="detail" id="detail" cols="40" rows="10"  size="20"  required onkeyup="checkForm()"></textarea>
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="expenses">ค่าใช้จ่าย</label>
                              <textarea name="expenses" id="expenses" cols="40" rows="10" required onkeyup="checkForm()">></textarea> 
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="advantage">ประโยชน์ที่ได้รับ</label>
                              <textarea name="advantage" id="advantage" cols="40" rows="10" placeholder="Advantage" required onkeyup="checkForm()"></textarea>
                            </div>
                        </td>
                </tr>
                <tr style="height: 90px;">
                          <td>
                            <div>
                              <label for="type">ประเภทกิจกรรม</label>
                              <input type="text" name="type" id="type" maxlength"10"  size="20" placeholder="Type"  required onkeyup="checkForm()">
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
                '<a class="edit" href="javascript:void(0)" title="Edit"><i style="font-size: 22px; color: #ffc107;" class="fas fa-edit"></i></a>' + '\xa0\xa0\xa0\xa0\xa0',
               '<a class="remove" href="javascript:void(0)" title="Remove"><i style="font-size: 25px; color: #dc3545;" class="fas fa-trash"></i></a>'

            ].join('')
       }

       function formatPic(value, row, index) {
         return "<img src=upload/img_banner/"+ row.img_banner +">"
       }

  

       window.operateEvents = {
       		'click .edit': function (e, value, row, index) {
            window.location = "editForm.php?id=" + row.id
            /*$("#modalMemberEdit").modal('show');
            $("#id").val(row.id);
            $("#title").val(row.title);
            $("#description").val(row.description);
            $("#attendants_target").val(row.attendants_target);
            $("#attendants").val(row.attendants);
            $("#due_date").val(row.due_date);
            $("#detail").val(row.detail);
            $("#expenses").val(row.expenses);
            $("#advantage").val(row.advantage);
            $("#type").val(row.type);
            $("#img_banner").val(row.img_banner);
            $("#img").val(row.img);*/
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
      $(document).ready(function () {
            $("#btn-save").click(function () {
              if($("#title").val()=="" || $("#description").val()=="" || $("#attendants_target").val()=="" || $("#attendants").val()=="" || $("#due_date").val()=="" || $("#detail").val()==""  || $("#expenses").val()=="" || $("#advantage").val()=="" || $("#type").val()=="" || $("#img_banner").val()=="" || $("#img").val()==""){

                Swal.fire({
                    icon: 'error',
                    text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                    timer: 5000
                })
            }else {
                var id          = $("#id").val();
                var title       = $("#title").val();
                var description = $("#description").val();
                var attendants_target = $("#attendants_target").val();
                var attendants  = $("#attendants").val();
                var due_date    = $("#due_date").val();
                var detail      = $("#detail").val();
                var expenses    = $("#expenses").val();
                var advantage   = $("#advantage").val();
                var type        = $("#type").val();
                var img_banner  = $("#img_banner").val();
                var img         = $("#img").val();

                Swal.fire({
                   title: 'Are you sure ?',
                   text: 'คุณต้องการแก้ไขข้อมูลกิจกรรม ใช่หรือไม่ ?',
                   icon: 'warning',
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: '#d33',
                   confirmButtonText: 'Comfirm',
                }).then((result) => {
                  if (result.isConfirmed) {
                        $.ajax({
                              url: "edit.php",
                              type: 'POST',
                              data: {
                                id : id,
                                title : title,
                                description : description,
                                attendants_target : attendants_target,
                                attendants : attendants,
                                due_date : due_date,
                                detail : detail,
                                expenses : expenses,
                                advantage : advantage,
                                type : type,
                                img_banner : img_banner,
                                img : img
                },
                cache: false,
                success: function (data) {
                  $("#modalMemberEdit").modal('hide');
                              $("#id").val("");
                              $("#description").val("");
                              $("#attendants_target").val("");
                              $("#attendants").val("");
                              $("#due_date").val("");
                              $("#detail").val("");
                              $("#expenses").val("");
                              $("#advantage").val("");
                              $("#type").val("");
                              $("#img_banner").val("");
                              $("#img").val("");
                              $("#btn-save").attr("disabled", false);

                  Swal.fire({
                    icon: 'success',
                    title: 'Success !',
                    text: 'แก้ไขข้อมูลสำเร็จแล้ว',
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
          })
      })
    </script>
  </body>
</html>