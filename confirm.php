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
<h1>Western Course Data</h1>
<h2>Deletion Warning</h2>
<?
$delete = $_POST["course"];
if ($choice == "YES"){

	$query1 = 'DELETE FROM westerncourse WHERE westernnum = "'.$delete.'"';
	$query2 = 'DELETE FROM equivalentto WHERE westernnum = "'.$delete.'"';

	echo "Deleted";
}else{
	echo "request cancelled";
}

mysqli_close($connection);
?>
<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>
</ol>
</body>
</html>
