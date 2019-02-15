<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
    
$systemId=$_POST['systemId'];
$serialNumber=$_POST['serialNumber'];
$productKey=$_POST['productKey'];
$oem=$_POST['oem'];
$doa=$_POST['doa'];
$systemUser=$_POST['systemUser'];
$project=$_POST['project'];

				
	$sql = "UPDATE system SET system_id = '$systemId', serial_number = '$serialNumber', product_key = '$productKey', oem = '$oem', date_of_allocation = '$doa', system_user = '$systemUser', project= '$project' WHERE system_id = $systemId ";

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
 
