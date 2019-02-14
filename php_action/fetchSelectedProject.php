<?php 	

require_once 'core.php';

$projectId = $_POST['projectId'];

$sql = "SELECT project_id, project_name, project_team, project_duration, project_start_date, project_end_date, status FROM project WHERE project_id = $projectId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);