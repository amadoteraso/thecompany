<?php
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db("threewaysdb");
if (!$conn) {
die('ERROR: Unable to connect: ' . mysql_error());
}
echo 'Connected to the database.<br>';
mysql_close($conn);
?>