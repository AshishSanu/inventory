<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
    
$productId=$_POST['productId'];
$projectName=$_POST['editProductName'];
$projectTeam=$_POST['editQuantity'];
$projectDuration=$_POST['editRate'];
$projectSD=$_POST['projectSD'];
$projectED=$_POST['projectED'];
$projectStatus=$_POST['editProductStatus'];

				
	$sql = "UPDATE project SET project_name = '$projectName', project_team = '$projectTeam', project_duration = '$projectDuration', project_start_date = '$projectSD', project_end_date = '$projectED', status = '$projectStatus' WHERE project_id = $productId ";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating product info";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
