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
<h2>Course Name in order</h2>
<?
$order = $_POST["order"];
$query1 = "SELECT * FROM westerncourse ORDER BY westernname ".$order;
$result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed.");
   }
echo "<hr>";
echo "<form action = 'getdata.php' method ='post'>";
while($row = mysqli_fetch_assoc($result)){
echo "<input type = 'radio' name = 'choose’ value = '".$row["westernname"]."'>".$row["westernname"]." ".$row["westernnum"]." ".$row["suffix"]."(".$row["weight"].")<br>";
}

mysqli_close($connection);
?>

</body>
</html>

