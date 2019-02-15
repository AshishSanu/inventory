<?php 	

require_once 'core.php';

$sql = "SELECT system_id, serial_number FROM system ";
$result = $connect->query($sql);

$data = $result->fetch_all();

$connect->close();

echo json_encode($data);