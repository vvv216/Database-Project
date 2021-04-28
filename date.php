Date.php

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
<h1>Equivalent Course Date</h1>
<?php
$date = $_POST["date"];
$query1 = "SELECT * FROM equivalentto WHERE evaluateddate < '".$date."'";
$result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed.");
   }
 echo "<ul>";
echo "<h2>Course:</h2>";
echo "<hr>";
while($row = mysqli_fetch_assoc($result)){
echo "Western Course: ".$row["westernnum"]." ".$row["westernname"]."  ".$row["weight"]."<br>";
echo "".$row["uniname"]." Course: ".$row["outsidenum"]." ".$row["outsidename"]."".$row["weight"]."<br>";
echo "Evaluated date: ".$row["evaluateddate"]."<br>";
echo "<hr>";
}
echo "</ul>";

mysqli_close($connection);
?>
<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>
</ol>
</body>
</html>


