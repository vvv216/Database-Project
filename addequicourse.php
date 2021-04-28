<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Western Course Data</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Course:</h1>
<ol>
<?php
   $westernnum = "CS"+$_POST["num"];
   $outsidenum = "CompSci" + $_POST["onum"];
   $uid =$_POST["uniid"];
   $date= $_POST["day"];
   $query1= 'SELECT * FROM equivalentto WHERE equivalentto.outsidenum ="'.$outsidennum. '" AND equivalentto.westernnum = "' .$westernnum.'"';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed.");
   }
  if(mysqli_num_rows($result) == 1){
        die("It’s already exit in our course list");
	$query = 'UPDATE equivalentto SET evaluateddate = date(Y-m-d)'; 
}else{
   $query = 'INSERT INTO westerncourse (westernnum, westernname,suffix,weight) VALUES("' . $westernnum . '","' . $westernname . '","' . $suffix . '","' . $weight . '")';

   echo "Your Course was added!";
   }mysqli_close($connection);
?>
<form action = "index2.php" method = "post" enctype = "multipart/form-data">
<input type="submit" value= Back>
</ol>
</body>
</html>
