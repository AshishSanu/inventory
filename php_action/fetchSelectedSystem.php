<?php 	

require_once 'core.php';

$projectId = $_POST['systemId'];
//$projectId=1;
$sql = "SELECT system_id, serial_number, product_key, oem, date_of_allocation, system_user, project FROM system WHERE system_id = $projectId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);