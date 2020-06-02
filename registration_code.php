<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$username = $fname = $lname = $radio = $email = $password1 = $pwd = '';

$username = $_POST['username'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$radio = $_POST['radio'];
$email = $_POST['email'];
$pwd = $_POST['password1'];
$password1 = MD5($pwd);

$sql = "INSERT INTO tbluser (Firstname,Lastname,Affiliation,Email,Password) VALUES ('$fname','$lname','$radio','$email','$password1')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: Login.php");
}
else
{
	echo "Error :".$sql;
}
?>