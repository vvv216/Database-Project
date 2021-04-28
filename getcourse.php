Get course.php

FORM
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
<h2>Course Information</h2>
<?
$course = $_POST["westernnum"];
$query2 = 'SELECT * FROM equivalentto WHERE equivalentto.outsidenum IN (SELECT outsidenum FROM outsidecourse) AND equivalentto.westernnum IN (SELECT westernnum FROM westerncourse) AND  westernnum = "'.$course.'"';
$query = "SELECT * FROM university WHERE uniid.university IN (SELECT uniid FROM equivalentto)";
$result=mysqli_query($connection,$query2);
   if (!$result) {
          die("database query failed.");
        }
 echo "<ol>";
echo "<h2>Course:</h2>";
echo "<hr>";

while($row = mysqli_fetch_assoc($result)){
echo "Western Course ".$row["westernnum"]."".$row["westernname"]."".$row["weight"]." is equivalent to :".$row["outsidenum"]." ".$row1["weight"]."".$row["outsidename"]."from ".$row["uniname"]."decided by ".$row["evaluateddate"]."</li><br>";
}
echo "</ol>";

mysqli_close($connection);
?>
<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>
</ol>
</body>
</html>

