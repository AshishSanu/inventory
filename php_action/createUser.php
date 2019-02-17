<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
        $userid                 = $_POST['userId'];
	$userName 		= $_POST['userName'];
        $upassword 		= md5($_POST['upassword']);
        $project                =$_POST['project'];
        $status                 =$_POST['status'];
        $uemail 		= $_POST['uemail'];
        $userLabel              =$_POST['userLabel'];
	
				$sql = "INSERT INTO users (user_id,username, password, project, status,email, user_label) 
				VALUES ('$userid','$userName', '$upassword' ,'$project', '$status' ,'$uemail','$userLabel')";
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members".$sql;
				}

				// /else	
		
	} // if in_array 		

	$connect->close();

	echo json_encode($valid);
 
