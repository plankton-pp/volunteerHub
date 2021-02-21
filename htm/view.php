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
    <link rel="stylesheet" href="lib/sidebar.less">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <!-------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css">
    <!-------------------------------------------------------------------------------------------------------------------------------------->


    <title>Admin</title>
  </head>
  <body>

  	<div id="toolbar">
  		<button id="remove" class="btn btn-danger" disabled>
    		<i class="fa fa-trash"></i> Delete
  		</button>
		</div>

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
	      <th data-width="100" data-field="expenses">ค่าใช้จ่าย</th>
	      <th data-width="100" data-field="advantage">ประโยชน์ที่ได้รับ</th>
	      <th data-width="100" data-field="type">ประเภทกิจกรรม</th>
	      <th data-width="100" data-field="img_banner">ภาพปก</th>
	      <th data-width="100" data-field="img">ภาพอื่น ๆ</th>
        <th data-width="100" data-align="center" data-field="operate" data-search-formatter="false" data-formatter="operateFormatter" data-events="operateEvents">Action</th>
	    </tr>
	  </thead>
	</table>

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

            ].join('')
       }

       window.operateEvents = {
       		'click .edit': function (e, value, row, index) {
        	},

            'click .remove': function (e, value, row, index) {
        	}
    	}
    </script>
  </body>
</html>