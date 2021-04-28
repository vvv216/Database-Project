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
<h2>Universities in Our System</h2>
<?php
include 'getuni.php';
?>

<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>


</body>
</html>
