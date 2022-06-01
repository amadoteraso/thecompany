<?php 
$servername = "localhost"; 
$username = "root";
$password = "";
$db = "threewaysdb";

$con = mysqli_connect($servername,$username,$password,$db);
if($con==false)
{
	echo "Error in connecting. Please fix it".mysqli_connect_error();
}else
{echo "Successfully Connected";}
//echo "Successfully Connected";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<table>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<tr><td><label>ID:</label></td><td><input type="text" name="cid"></td></tr>
<tr><td><label>Name:</label></td><td><input type="text" name="name"></td></tr>
<tr><td><label>Email:</label></td><td><input type="text" name="email"></td></tr>
<tr><td><label>Comment:</label></td><td><input type="text" name="comment"></td></tr>
<tr><td></td><td><input type="submit" name="post"></td></tr>
</form>
</table>
<?php 
if(isset($_REQUEST['post'])){
	$cid = $_POST['cid'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

$sql = "INSERT INTO threewaystable (id,name,email,comment) VALUES('$cid','$name','$email','$comment')";

}
if(mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: ".mysqli_error($con);
	 }
 mysqli_close($con);
?>
</body>
</html>