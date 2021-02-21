<?php
	session_start();
	session_destroy();
	echo "<script>sessionStorage.clear();</script>";
	//echo "<script>alert(sessionStorage.getItem('loggedin'));</script>";
	echo "<script>window.location.href = \"../htm/index.php\";</script>";
?>