

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
<h2>Order by province</h2>
<?
$order = $_POST["order"];
$query1 = "SELECT * FROM university  INNER JOIN outsidecourse ON uniid.university = uniid.outsidecourse ORDER BY university.prov ASC ;";
$result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed.");
   }
while($row = mysqli_fetch_assoc($result)){
echo "<input type = 'radio' value = '".$row["outsidenum"]."'>".$row["outsidename"]." $row["uniid"] . "$row["uniname"] . "$row["nickname"] . "$row["city"] . "$row["prov"] . "<br>";
}
echo "</ol>";
mysqli_close($connection);
?>

</body>
</html>
