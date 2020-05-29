<?php 

require('sqlinfo.php');

function selectAll($table)
{
global $conn;
$sql = "SELECT * FROM $table";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
return $records;
}

$seerusers = selectAll('seerusers');
echo "<pre>", print_r($seerusers), "</pre>";

?>