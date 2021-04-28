<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Western Course Data</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Edit Course</h1>
<?php
$news = $_POST["coursesuffix"];
$newn = $_POST["coursename"];
$neww = $_POST["courseweight"];
$update = $_POST["course"];

$query1 = "UPDATE westerncourse SET westernname = '".$newn."' AND weight = '".$neww."' AND suffix = '".$news."' WHERE westernnum = '".$update."'";
$result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed.");
	}
	else{
		echo "Successfully!";
}

mysqli_close($connection);
?>
<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>
</ol>
</body>
</html>


