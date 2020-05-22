 <?php

 require_once('sqlinfo.php');

  $conn = @mysqli_connect($sql_host,
		$sql_user,
		$sql_pass,
		$sql_db);
	
	// Checks if connection is successful
	if (!$conn) {
		// Displays an error message
		echo "<p>Database connection failure</p>";
	}
	else {
		echo "<p>success</p>";
	}	

?>
