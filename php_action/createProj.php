<?php
require_once 'db_connect.php';

echo 'Post hua kuch';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$projectID=$_POST['projectID'];
$projectName=$_POST['projectName'];
$projectTeam=$_POST['projectTeam'];
$projectDuration=$_POST['projectDuration'];
$projectSD=$_POST['projectSD'];
$projectED=$_POST['projectED'];

echo 'Data You Entered are...<br>';
echo 'Project ID :'. $projectID.' <br>';
echo 'Project Name :'. $projectName .'<br>';
echo 'Project Team :'. $projectTeam.' <br>';
echo 'Project Start Date :'. $projectSD .'<br>';
echo 'Project End Date :'. $projectED .'<br>';

$sql = "INSERT INTO project (project_id, project_name, project_team, project_duration, project_start_date, project_end_date) 
				VALUES ('$projectID', '$projectName', '$projectTeam', '$projectDuration', '$projectSD', '$projectED')";

if($connect->query($sql) === TRUE){
    echo 'Database dekho Project add ho gaya';
}
 else {
    echo 'Kuch Galti kar diye';
}
