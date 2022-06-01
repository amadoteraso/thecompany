

<?php
//using the MYSQLI PROCEDURAL connections

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "threewaysdb";


//create the connection

//In the past the mysql_connect function runs but now it should be done with "i" in the myslqi_connect function.
// in here you cannot add "new" like "new mysqli_connect" in the mysqli_connect, it can cause error to connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
//here we use mysqli_connect_errno() function
//we can also run the program like this one


//sample 1
		//if(mysqli_connect_error()){
		//	echo "error to connect";

//sample 2
		//if(mysqli_connect_errno()){
		//	echo "error to connect";
		//		exit();

//sample 3
		if(!$conn){
				die("Connection failed:".mysqli_connect_errno());
		}
echo "Connection established!";

?>