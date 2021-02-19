<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>View Register Database</title>
<script src="showName.js"></script>
</head>
<body>
	
<p><a href="insertForm.htm">Add a new record</a></p>
<form action="view.php" method="get">
<input list="name" name="search" onkeyup="searchName(this.value)">
<datalist id="name">
 <option value="%">
</datalist>
<input type="submit" value="search">
</form>
<?php
// connect to the database
$conn=mysqli_connect("localhost", "root", "","volunteerhub");
$conn->query("SET NAMES UTF8");
// get results from database
if (isset($_GET["search"])) {
 $title = $_GET["search"];
 $sql="SELECT * FROM volunteer WHERE title LIKE '$title'";
} else {
 $sql="SELECT * FROM volunteer";
}
$rs=$conn->query($sql);
// Print Header of Table
echo "<table border='1' cellpadding='10' width=80% >";
echo "<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Attendants Target</th>
<th>Attendants</th>
<th>Due Date</th>
<th>Detail</th>
<th>Expense</th>
<th>Advantage</th>
<th>Type</th>
<th>Image Banner</th>
<th>Image</th>
 </tr>";
 // loop through results of database query, displaying them in the table
while($row = $rs->fetch_assoc()) {
$id = $row['id'];
$data = "return alertID($id)";

// echo out the contents of each row into a table
echo "<tr>";
echo '<td>' . $id . '</td>';
echo '<td>' . $row['title'] . '</td>';
echo '<td>' . $row['description'] . '</td>';
echo '<td>' . $row['attendants_target'] . '</td>';
echo '<td>' . $row['attendants'] . '</td>';
echo '<td>' . $row['due_date'] . '</td>';
echo '<td>' . $row['detail'] . '</td>';
echo '<td>' . $row['expenses'] . '</td>';
echo '<td>' . $row['advantage'] . '</td>';
echo '<td>' . $row['type'] . '</td>';
echo '<td>' . '<img src="'.$row['img_banner'].'" width = "25">'. '</td>';
echo '<td>' . '<img src="'.$row['img'].'" width = "25">'. '</td>';
echo '<td><a href="editForm.php?id='.$id.'">Edit</a> ';
echo '<a href="delete.php?id='.$id.'">Delete</a></td>';
echo "</tr>";
}
echo "</table>"; // close table>
$conn->close();
?>
</body>
</html>