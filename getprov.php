

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
<h1>University</h1>
<?php
$province = $_POST["prov"];
$query1 = 'SELECT * FROM university WHERE prov = "'.$province.'"';
$result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed.");
   }echo "<h2>University in your selected province: </h2>";
echo "<hr>";
while($row = mysqli_fetch_assoc($result)){
echo "<li>".$row["uniname"]." with nickname ".$row["nickname"]."</li><br>";
mysqli_close($connection);
}
?>
<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>
</ol>
</body>
</html>


