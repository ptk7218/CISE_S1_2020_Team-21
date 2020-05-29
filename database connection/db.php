<?php 

require('sqlinfo.php');

$sql = "SELECT * FROM seerusers";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

echo "<pre>", print_r($seerusers), "</pre>";



