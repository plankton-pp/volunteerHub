<?php 
session_start();
        if(isset($_POST['username'])){
				//connection
	$con = mysqli_connect("localhost","root","");
		if(!$con) {
			die("Could not connect : " . mysqli_error());
			}
	mysqli_set_charset($con,"utf8");
	mysqli_select_db($con,"volunteer"); 
				//รับค่า user & password
                  $username = $_POST['username'];
                  $password = $_POST['password'];
				//query 
                  $sql="SELECT * FROM register Where username='".$username."' AND password='".$password."' ";
					
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["name"] = $row["name"];
                      $_SESSION["status"] = $row["status"];
					  $_SESSION['id'] = $row['id'];

                      if($_SESSION["status"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
						echo 'Are You Admin';
                        Header("Location: admin.php");
                      }
                      if ($_SESSION["status"]==null){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
						echo 'Are You User';
                        Header("Location: home.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                  }
        }else{
             Header("Location: login.php"); //user & password incorrect back to login again
        }
?>