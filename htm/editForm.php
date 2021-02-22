<?php session_start();  ?>
<HTML>
<head>
	<link rel="stylesheet" href="../css/style-insertform.css">
</head>
<BODY>
	<?php 

	$conn=mysqli_connect("localhost", "root", "","volunteerhub");
	$conn->query("SET NAMES UTF8");	

	$sql = "SELECT * FROM volunteer WHERE id = '".$_SESSION['id']."' ";
	$query= mysqli_query($conn,$sql);
	
	$result = mysqli_fetch_array($query);

	if(!$result){
		echo "Not found ID=".$_SESSION['id'];
	}else
	{
		//echo "error check id=".$result['ID'];
	
	}
	?>

	<center>
		<table>
			<form action="edit.php" method="POST">
			<TR>
				<TD>Title:</TD>
				<TD>
					<textarea name="title" cols="40" rows="5"  size="20" placeholder="Title" required><?php echo $result['title'];?></textarea>
				</TD>
			</TR>
			<TR>
				<TD>Description:</TD>
				<TD>
					<textarea name="description" cols="40" rows="10"  size="20" placeholder="Description" required><?php echo $result['description'];?></textarea>
				</TD>
			</TR>
			<TR>
				<TD>Attendants_target	:</TD>
				<TD>
					<input type="number" name="target" maxlength"10" size="20" placeholder="Target" value="<?php echo $result['attendants_target'];?>" required>
				</TD>
			</TR>
			<TR>
				<TD>Attendants	:</TD>
				<TD>
					<input type="number" name="attendant" maxlength"10" size="20" placeholder="Attendant"  value="<?php echo $result['attendants'];?>" required>
				</TD>
			</TR>
			<TR>
				<TD>due_date	:</TD>
				<TD>
					<input type="text" name="due_date" maxlength"10" size="20" value="<?php echo $result['due_date'];?>" required>
				</TD>
			</TR>
			<TR>
				<TD>detail	:</TD>
				<TD>
					<textarea name="detail" cols="40" rows="15"  size="20" placeholder="Detail" required><?php echo $result['detail'];?></textarea>
				</TD>
			</TR>
			<TR>

				<TD>expenses	:</TD>
				<TD>
					<textarea name="expenses" cols="40" rows="20"  size="20" placeholder="Expenses" required><?php echo $result['expenses'];?></textarea>
				</TD>
			</TR>
			<TR>
				<TD>advantage	:</TD>
				<TD>
					<textarea name="advantage" cols="40" rows="15"  size="20" placeholder="Advantage" required><?php echo $result['advantage'];?></textarea>
					
				</TD>
			</TR>
			<TR>
				<TD>type	:</TD>
				<TD>
					<input type="text" name="type" maxlength"10"  size="20" placeholder="Type" value="<?php echo $result['type'];?>" required>
				</TD>
			</TR>
			<TR>
				<TD>img_banner	:</TD>
				<TD>
					<input type="text" name="img_banner" maxlength"10" size="20" placeholder="Image Banner" value="<?php echo $result['img_banner'];?>" required>
				</TD>
			</TR>
			<TR>
				<TD>img	:</TD>
				<TD>
					<input type="text" name="img" maxlength"10"  size="20" placeholder="Image" value="<?php echo $result['img'];?>" required>
				</TD>
			</TR>


						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value="Save">
								<input type="reset" name="submit" value="Cancle">
							</td>
						</tr>
						</form>
					</table>

		</center>
</BODY>
</HTML>