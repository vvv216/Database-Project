<?php
$query = "SELECT * FROM university";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["uniname"]." (". $row["nickname"] . ")</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>
