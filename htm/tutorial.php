<!DOCTYPE html>
<html lang="th">
<head>
	<?php include'navbar.php';?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tutorial</title>
	<!-------navbar--------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!---------------->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	    .bs-example{
	        margin-top: : 400px;    
	        margin-left: 100px;
	        margin-right: 100px;    
	    }
	    h1{
	       margin-bottom: 35px;  
	        margin-left: 100px;
	        margin-right: 100px;    
	    }
	    #profile{
		width: 150px;
		height: 36px;
		border-radius: 50px;
		color: white;
		background-color:#555555 ;
		border:0px;
		opacity: 0.8;
	}
#profile:hover {
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,1);
	}
	</style>
</head>	
<body>
	<?php
    echo "<script type=\"text/javascript\">
                  if(sessionStorage.getItem('loggedin')==null){
                    document.getElementById(\"insertForm\").innerHTML = \"<p></p>\";
                    document.getElementById(\"editFormTest\").innerHTML = \"<p></p>\";
                    document.getElementById(\"view\").innerHTML = \"<p></p>\";
                    document.getElementById(\"logoutbutton\").innerHTML = \"<a href='login.php' class='btn btn-primary'>Login</a>\";
                    
                  }else if(sessionStorage.getItem('loggedin')=='true'){
                   
                  }
      

                </script>
            ";
  ?>
<br>
<h1>ขั้นตอนการส่งโครงการ</h1>

<div class="bs-example">    
    <div class="list-group">
        <a href="index.php" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h4>สมัครสมาชิก และ/หรือ เข้าสู่ระบบ</h4>
              
            </div>
         
        </a>
        <a href="doc.pdf" class="list-group-item list-group-item-action ">
            <div class="d-flex w-100 justify-content-between">
                <h4>กรอกข้อมูลโครงการลงในไฟล์ ดาวน์โหลดไฟล์กรอกข้อมูลโครงการ <h5>Click to Download</h5></h4>
                
                
                
            </div>
           
        </a>
        <a href="InsertForm.htm" class="list-group-item list-group-item-action" target="_blank">
            <div class="d-flex w-100 justify-content-between">
                <h4>ส่งข้อมูลมาให้เรา <h5>Click Here</h5></h4>
                
            </div>
          
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h4> เจ้าหน้าที่ตรวจสอบข้อมูล และอาจขอข้อมูลเพิ่มเติม (ใช้เวลาประมาณ 3-7 วัน)</h4>
                
            </div>
           
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h4>เมื่อเจ้าหน้าที่ยืนยันข้อมูลแล้ว โครงการจะพร้อมรับสมัคร Volunteer ทันที</h4>
                
            </div>
           
        </a>
    </div>
</div>
</body>
</html>