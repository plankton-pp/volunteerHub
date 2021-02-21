<?php
	session_start();
	session_destroy();
	echo "<script>window.location.href = \"../htm/index.php\";</script>";
?>