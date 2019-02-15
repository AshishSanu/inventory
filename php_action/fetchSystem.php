<?php 	



require_once 'core.php';

$sql = "SELECT system.system_id, system.serial_number, system.product_key, system.oem,
 		system.date_of_allocation, system.system_user, system.project FROM system 
		";

$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $active = ""; 

 while($row = $result->fetch_array()) {
 	$systemId = $row[0];
 	// active 
 	if($row[6]) {
 		// activate member
 		$active = "<label class='label label-success'>Available</label>";
 	} else {
 		// deactivate member
 		$active = "<label class='label label-danger'>Not Available</label>";
 	} // /else

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" id="editProductModalBtn" data-target="#editProductModal" onclick="editProduct('.$systemId.')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeProductModal" id="removeProductModalBtn" onclick="removeProduct('.$systemId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  </ul>
	</div>';

	// $brandId = $row[3];
	// $brandSql = "SELECT * FROM brands WHERE brand_id = $brandId";
	// $brandData = $connect->query($sql);
	// $brand = "";
	// while($row = $brandData->fetch_assoc()) {
	// 	$brand = $row['brand_name'];
	// }

	//$brand = $row[9];
	//$category = $row[10];

//	$imageUrl = substr($row[2], 3);
//	$productImage = "<img class='img-round' src='".$imageUrl."' style='height:30px; width:50px;'  />";

 	$output['data'][] = array( 		
 		// image
 		$row[0],
 		// product name
 		$row[1], 
 		// rate
 		$row[2],
 		// quantity 
 		$row[3], 		 	
 		// brand
 		$row[4],
 		// product name
 		$row[5], 
 		// rate
 		$row[6],
                $button
 		); 	
 } // /while 

}// if num_rows

$connect->close();

echo json_encode($output);