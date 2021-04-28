<?php
$query = "SELECT * FROM outsidecourse";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row[outsidennum"] . " ";
        echo $row["outsidenname"] . "</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>

