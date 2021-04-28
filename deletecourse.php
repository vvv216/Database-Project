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
<h1>Welcome to the Western Course List</h1>
<h2>Course Deletion</h2>
<?php
$delete = $_POST["course"];
$query1 = "SELECT * FROM equivalentto WHERE westernnum = '".$delete."'";
$result1 = mysqli_query($connection,$query1);


if(mysqli_num_rows($result1) != 0){
	echo "Warning! This course has an equivalent course<br>";
	echo "<form action = 'confirm.php' method = 'post'>";
        echo "Do You Want To Delete?<br>";
        echo "<input type = 'submit' name = 'choice' value = YES>";
	echo "<input type = 'submit' name = 'choice' value = NO>";
        echo "</form>";
}else{
      	echo "Deleted!";
}

mysqli_close($connection);
?>
<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>
</ol>
</body>
</html>


