<?php 

function OpenConnect(){

$servername = "sql208.iceiy.com"; 
$username = "icei_31610069";
$password = "Admincomlab123";
$db = "icei_31610069_testconnect";

$con = mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
	echo "Error in connecting. Please fix it".mysqli_connect_error();
}
	echo "Successfully connected!";

return $con;
}
?>



