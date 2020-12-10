<?php
$url=$_SERVER['contact.html'];
header("URL=$url"); 
 
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	#$password = $_POST['password'];
	#$pass = md5($password);
$conn = new mysqli('localhost','root','','mydb');
if ($conn->connect_error) {
	die('connection failed :'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into artGallery(first_name,last_name,email) values (?,?,?)");
	$stmt->bind_param("sss",$fname,$lname,$email);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}

header("Location: contact.html");
?>

