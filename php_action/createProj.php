<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

//	$productName 		= $_POST['productName'];
//  // $productImage 	= $_POST['productImage'];
//  $quantity 			= $_POST['quantity'];
//  $rate 					= $_POST['rate'];
//  $brandName 			= $_POST['brandName'];
//  $categoryName 	= $_POST['categoryName'];
//  $productStatus 	= $_POST['productStatus'];
  
$projectID=$_POST['projectID'];
$projectName=$_POST['projectName'];
$projectTeam=$_POST['projectTeam'];
$projectDuration=$_POST['projectDuration'];
$projectSD=$_POST['projectSD'];
$projectED=$_POST['projectED'];

	
	 
					
	
/**
				
    $sql = "INSERT INTO project (project_id, project_name, project_team, project_duration, project_start_date, project_end_date, status) 
	VALUES ('$projectID', '$projectName', '$projectTeam', '$projectDuration', '$projectSD', '$projectED', 1)";
	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while adding the members";
	}

					// /else	
		 // if
	 // if in_array 		
**/

$sql = "INSERT INTO project (project_id, project_name, project_team, project_duration, project_start_date, project_end_date) 
				VALUES ('$projectID', '$projectName', '$projectTeam', '$projectDuration', '$projectSD', '$projectED')";

if($connect->query($sql) === TRUE) 
    {
	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";	
    } else {
	$valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
    }
	$connect->close();

	var_dump( json_encode($valid));
 
} // /if $_POST