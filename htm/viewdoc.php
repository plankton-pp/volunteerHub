<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>View Register Database</title>
<script src="showName.js"></script>
</head>
<body> 
	

<p><a href="docForm.php">Add a permission Doc use this in page have user id</a></p>
<form action="view.php" method="get">
<input list="namesugg" name="search" placeholder="search id" ">

<input type="submit" value="search">
</form>

<?php
// connect to the database
$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");
// get results from database
if (isset($_GET["search"])) {
 $id = $_GET["search"];
 $sql="SELECT * FROM permission WHERE title LIKE '$id'";
} else {
 $sql2="SELECT * FROM permission";
}

$rs2=$conn->query($sql2);
// Print Header of Table
echo "<table border='1' cellpadding='10' width=20% >";
echo "<tr>
<th>ID</th>
<th>UserID</th>
<th>UserPhone</th>
<th>PermissionPhone</th>
<th>Document</th>


 </tr>";
 // loop through results of database query, displaying them in the table
while($row = $rs2->fetch_assoc()) {
$id = $row['id'];
$data = "return alertID($id)";

// echo out the contents of each row into a table
echo "<tr>";
echo '<td>' . $id . '</td>';
echo '<td>' . $row['user_id'] . '</td>';
echo '<td>' . $row['user_phone'] . '</td>';
echo '<td>' . $row['permission_phone'] . '</td>';
echo '<td>' . $row['permission_doc']. '</td>';
echo '<td><a href="download.php?nama='.$row['permission_doc'].'" >Dowload</a></td>';
echo "</tr>";
}
echo "</table>"; // close table>
$conn->close();
?>
</body>
</html>