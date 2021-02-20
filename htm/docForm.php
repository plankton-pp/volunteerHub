<html>
<head>
<?php session_start();  ?>
<?php 
	$_SESSION['ID']=$_GET['id'];

	//echo "string".$_SESSION['ID']."<BR>";
	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
   

<BR>
<BR>
<Table align="center">
<form action="insertdoc.php" method="post" autocomplete="on" enctype="multipart/form-data">
 <TD ><input type='hidden' id='hid' name='avatar' value='./avatar/avatar1.jpg'></TD>
</TR>
<TR><TD>Your phone number:</TD><TD>
	<input type="text" name="userphone" maxlength"10" size="20" required></TD></TR>
 <TR><TD>Location phone number:</TD><TD>
 	<input type="text" name="perphone" maxlength="10" size="20" required></TD></TR>
 <TR><TD>Document: </TD><TD>
 	<input type="file" name="file" size="20" required></TD></TR>
 
 <TR><TD></TD><TD><BR><input type="submit" name="Save" value="Save">
 <input type="reset" name="Cancel" value="Cancel"></TD></TR>
</form>
</Table>

</body>
</html>