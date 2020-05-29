<?php 
require('sqlinfo.php');

function dd($value){

    echo "<pre>", print_r($value), "</pre>";
    die();
}

function selectAll($sql_tble)
{
    global $conn;
    $sql = "SELECT * FROM $sql_tble";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $record;
}

$user = selectAll('seerusers');
dd($seerusers);

?>