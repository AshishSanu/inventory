<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$productId = $_POST['systemId'];

if($productId) { 
   // DELETE FROM `store`.`system` WHERE `system`.`system_id` = '3'

 $sql = "DELETE FROM system WHERE system_id = $productId";
 
 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while removing the project".$sql;
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST