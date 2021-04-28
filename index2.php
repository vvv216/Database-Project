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
<h1>Welcome to the Western</h1>
<h2>Western Course List</h2>
<h3> Sort by Western Course Number </h3>
<form action="numorder.php" method="post" >
<input type="radio" name="order" value=ASC >Ascending<br>
<input type="radio" name="order" value=DESC >Deceding<br>
<input type="submit" value= Sort>
</form>
<h3> Sort by Western Course Name</h3>
<form action="nameorder.php" method="post" >
<input type="radio" name="order" value=ASC >Ascending<br>
<input type="radio" name="order" value=DESC >Deceding<br>
<input type="submit" value= Sort>
</form>
<br>
<hr>

<h3> ADD NEW COURSE: </h3>
<form action = "addnewcourse.php" method = "post" enctype = "multipart/form-data">
New Course Num: <input type="number" name= '"CS" +"num"'><br>
New Course Name: <input type="text" name=“westernname”><br>
New Course weight: <br>
<input type="radio" name=“weight” value=“0.5”>0.5<br>
<input type="radio" name=“weight” value=“1”>1<br>
New Course Suffix: <input type="text" name=“suffix”><br>
<input type="submit" value= Add>
</form>
<hr>

<h4> DELETE A COURSE: </h4>
<form action = "deletecourse.php" method = "post" enctype = "multipart/form-data">
Select a course to delete:
<select name = "course">
<option value = '1'>--SELECT HERE—</option>
<?php
include "getcoursenum.php";
?>
</select>
<br>
<input type = "submit"  value = Delete>

</form>
<hr>

<h5> UPDATE A COURSE: </h5>
<form action = "update.php" method = "post">
Select a course to edit:
<select name = "course">
<option value = '1'>--SELECT HERE—</option>
<?php
include "getcoursenum.php";
?>
</select><br>
New Course Name: <input type = "text" name = "coursename"><br>
New Suffix: <input type = "text" name = "coursesuffix"><br>
New Weight: <input type = "text" name = "courseweight"><br>
<input type = "submit" value = "confirm">
</form>
<hr>

<h6> Find Equivalent Course before Exactly Date: </h6>
<form action = "date.php" method = "post">
Select a course before date (YYY-MM-DD):
<input type="date" name="date"><br>
<input type="submit" value="Search">
</form>
<br>

<h7> More Information about the Western Course: </h7>
<form action = "getcourse.php" method = "post">
Select a course :
<select name = "course">
<option value = '1'>--SELECT HERE—</option>
<?php
include "getcoursenum.php";
?>
</select>
<br>
<input type = "submit" name = “search” value = Search>

</form>

<hr>
<h8> Search from Province: </h8>
<form action = "getprov.php" method = "post">
Select a Province :
<select name = “prov”>
<option value = '1'>--SELECT HERE—</option>
<?php
include "getprovname.php";
?>
</select>
<br>
<input type = "submit" value = Search>
</form>
<br>
<hr>


<h9> Sort by Province </h0>
<form action="provorder.php" method="post" >
<input type="radio" name="order" value=ASC >Ascending<br>
<input type="radio" name="order" value=DESC >Deceding<br>
<input type="submit" value= Sort>
</form>
<hr>

<h10>University List</h10>
<?php
include 'getuni.php';
?>
</form>
<hr>

<h11> ADD NEW EQUIVALENT COURSE: </h11>
<form action = "addequicourse.php" method = "post" enctype = "multipart/form-data">
Western Course Num: <input type="number" name= '"CS" +"num"'><br>
Outside Course Num: <input type="number" name= '"CompSci" +"onum"'><br>

Outside Course University ID: <input type="number" name=“uniid”><br>
Evaluated DATE: <input type="date" name= '"day"'><br>
<input type="submit" value= Add>
</form>
<hr>


<?php
mysqli_close($connection);
?>
</body>
</html>
