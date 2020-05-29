<?php

// Include file with sql details
	$sql_host="us-cdbr-east-06.cleardb.net";
	$sql_user="b532b2d7a7e646"; //e.g. ptk7218
	$sql_pass="3cff3c83"; // ur password
	$sql_db="heroku_4f8788ce9161d67"; //e.g. ptk7218
//	$sql_tble=" "; select which table u want to link


$conn - new MySQLi($sql_host, $sql_user, $sql_pass, $sql_db);


if($conn->connect_error){
	die('Database connection error:' . $conn->connect_error);
}
?>
