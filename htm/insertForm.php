<html>
<head>
	<link rel="shortcut icon" href="../img/volunteer.ico" />
	<title>VolunteerHub</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../css/style-insertform.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
	<style type="text/css">
		body { 
		  font-family: 'Kanit', sans-serif;
		  background-image: url('../img/bgins.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
   }
	</style>
	<?php include'navbar.php';?>
</head>
<body>
	
	<h1 style="background-color:lightgrey;" align="center">เพิ่มกิจกรรม</h1> 

	<BR>
	<Table align="center">
	
	<form method='post' action='' enctype="multipart/form-data" id="my-form">
	<TR>
		<TD>ชื่อกิจกรรม:</TD>
		<TD><input type="text" name="title" id="title" maxlength"10"  size="20" placeholder="Title"></TD>
	</TR>
	<TR>
		<TD>คำอธิบาย:</TD>
		<TD>
			<textarea name="description" id="description"cols="40" rows="4"  size="20" placeholder="Description"></textarea>
		</TD>
	</TR>
	<TR>
		<TD>จำนวนคนเป้าหมาย:</TD>
		<TD>
			<input type="number" name="target" id="target" maxlength"10" size="20" placeholder="Target" min=0>
		</TD>
	</TR>
	<TR>
		<TD>จำนวนคนที่เข้าร่วม:</TD>
		<TD>
			<input type="number" name="attendant" id="attendant" maxlength"10" size="20" placeholder="Attendant" min=0>
		</TD>
	</TR>
	<TR>
		<TD>วันที่จัดกิจกรรม:</TD>
		<TD>
			<input type="datetime-local" name="due_date" id="due_date" placeholder="Due date">
		</TD>
	</TR>
	<TR>
		<TD>รายละเอียด:</TD>
		<TD>
			<textarea name="detail" id="detail"cols="40" rows="4"  size="20" placeholder="detail"></textarea>
		</TD>
	</TR>
	<TR>
		<TD>ค่าใช้จ่าย:</TD>
		<TD>
			<textarea name="expenses" id="expenses"cols="40" rows="4"  size="20" placeholder="detail" ></textarea>
		</TD>
	</TR>
	<TR>
		<TD>ประโยชน์ที่ได้รับ:</TD>
		<TD>
			<textarea name="advantage" id="advantage"cols="40" rows="4"  size="20" placeholder="advantage"></textarea>
		</TD>
	</TR>
	<TR>
		<TD>ประเภทของกิจกรรม:</TD>
		<TD>
			<select name="type" id="type" placeholder="Type" >
			 	<option value="สิ่งแวดล้อม">สิ่งแวดล้อม</option>
			  	<option value="เด็กและเยาวชน">เด็กและเยาวชน</option>
			  	<option value="สัตว์">สัตว์</option>
			  	<option value="ผู้สูงอายุ">ผู้สูงอายุ</option>
			  	<option value="ผู้พิการและผู้ป่วย">ผู้พิการและผู้ป่วย</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD>ภาพปก:</TD>
		<TD>
			<!--<input type="text" name="img_banner" id="img_banner" maxlength"10" size="20" placeholder="Image Banner">-->
			<input type = "file" accept="image/*" name = "img_banner" id="img_banner" required>
		</TD>
	</TR>
	<TR>
		<TD>ภาพอื่นๆ:</TD>
		<TD>
			<!--<input type="text" name="img" id="img" maxlength"10"  size="20" placeholder="Image">-->
			<input type = "file" accept="image/*" name = "img" id="img" required>
		</TD>
	</TR>
	<TR>
		<TD>อัพโหลดเอกสารขออนุญาติจัดกิจกรรม:</TD>
		<TD>
			<!--<input type="text" name="img" id="img" maxlength"10"  size="20" placeholder="Image">-->
			<input type = "file" accept="application/pdf" name = "doc" id="doc" required>
		</TD>
	</TR>
	<TR>
	 	<TD></TD><TD><BR>
	 	<input type="submit" name="Save" value="Save" id="butsave">
	 	<input type="reset" name="Cancel" value="Cancel">
	 </TD>
	</TR>

	</form>


	 
	 	
	 
	</Table>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
	$(document).ready(function() {
		$('#butsave').on('click', function() {
				event.preventDefault();
           		var form = $("#my-form")[0];
           		var data = new FormData(form);

			if($("#title").val()!="" && $("#description").val()!="" && $("#target").val()!="" && $("#attendant").val()!="" && $("#due_date").val()!="" && $("#detail").val()!=""  && $("#expenses").val()!="" && $("#advantage").val()!="" && $("#type").val()!="" && $("#img_banner").val()!="" && $("#img").val()!="" && $("#doc").val()!=""){
				$.ajax({
					url: 'insert.php',
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
</body>
</html>