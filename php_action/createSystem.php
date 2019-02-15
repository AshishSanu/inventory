<?php
require_once 'db_connect.php';
require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
//echo 'Post hua kuch';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
if($_POST){
$systemId=$_POST['systemId'];
$projectName=$_POST['serialNo'];
$projectTeam=$_POST['productKey'];
$projectDuration=$_POST['oem'];
$projectSD=$_POST['doa'];
$projectED=$_POST['systemUser'];
$project=$_POST['project'];
//$productStatus=$_POST['productStatus'];
//
//echo 'Data You Entered are...<br>';
//echo 'Project ID :'. $projectID.' <br>';
//echo 'Project Name :'. $projectName .'<br>';
//echo 'Project Team :'. $projectTeam.' <br>';
//echo 'Project Start Date :'. $projectSD .'<br>';
//echo 'Project End Date :'. $projectED .'<br>';

$sql = "INSERT INTO system (system_id, serial_number, product_key, oem, date_of_allocation, system_user,project) 
				VALUES ($systemId, '$projectName', '$projectTeam', '$projectDuration', '$projectSD', '$projectED','$project')";

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