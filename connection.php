<?php

// Include file with sql details
	$sql_host="cmslamp14";
	$sql_user="ptk7218"; //e.g. ptk7218
	$sql_pass="62217wsxl"; // ur password
	$sql_db="ptk7218"; //e.g. ptk7218
//	$sql_tble=" "; select which table u want to link


$conn - new MySQLi($sql_host, $sql_user, $sql_pass, $sql_db);


if($conn->connect_error){
	die('Database connection error:' . $conn->connect_error);
}
?>
