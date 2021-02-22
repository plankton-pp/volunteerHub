<?php
session_start();
$num=$_GET['id'];
	$conn=mysqli_connect("localhost", "root", "","volunteerhub");
	$conn->query("SET NAMES UTF8"); 
	 $sql_result = "SELECT * FROM register WHERE id = '".$num."' ";
	$query_result= mysqli_query($conn,$sql_result);
	              
	$result_selected = mysqli_fetch_array($query_result);

	if(!$result_selected){
		echo "Not found ID=".$num;
	}else{
	  //echo "error check id=".$result['ID'];              
	}
	$_SESSION['result_id']=$result_selected['id'];
	$_SESSION['result_title']=$result_selected['title'];
	$_SESSION['result_description']=$result_selected['description'];
	$_SESSION['result_attendants_target']=$result_selected['attendants_target'];
	$_SESSION['result_attendants']=$result_selected['attendants'];
	$_SESSION['result_duedate']=$result_selected['duedate'];
	$_SESSION['result_detail']=$result_selected['detail'];
	$_SESSION['result_expenses']=$result_selected['expenses'];
	$_SESSION['result_advantage']=$result_selected['advantage'];
	$_SESSION['result_type']=$result_selected['type'];
	$_SESSION['result_img_banner']=$result_selected['img_banner'];
	$_SESSION['result_img']=$result_selected['img'];
	$_SESSION['result_status']=$result_selected['status'];
?>