<?php
require_once 'php_action/db_connect.php';
require_once 'php_action/core.php';

$valid['success'] = array('success' => false, 'messages' => array());
//echo 'Post hua kuch';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
if($_POST){
$projectID=$_POST['productId'];
$projectName=$_POST['projectName'];
$projectTeam=$_POST['projectTeam'];
$projectDuration=$_POST['projectDuration'];
$projectSD=$_POST['projectSD'];
$projectED=$_POST['projectED'];
$productStatus=$_POST['productStatus'];
//
//echo 'Data You Entered are...<br>';
//echo 'Project ID :'. $projectID.' <br>';
//echo 'Project Name :'. $projectName .'<br>';
//echo 'Project Team :'. $projectTeam.' <br>';
//echo 'Project Start Date :'. $projectSD .'<br>';
//echo 'Project End Date :'. $projectED .'<br>';

$sql = "INSERT INTO project (project_id, project_name, project_team, project_duration, project_start_date, project_end_date,status) 
				VALUES ('$projectID', '$projectName', '$projectTeam', '$projectDuration', '$projectSD', '$projectED',1)";

if($connect->query($sql) === TRUE) 
    {
	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";	
    } else {
	$valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
        
    }
$connect->close();
echo json_encode($valid);
}