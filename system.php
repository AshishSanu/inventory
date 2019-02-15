<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header.php'; ?>

<!-- Fetch System -->
<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">System</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage System</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" id="addSystemModalBtn" data-target="#addSystemModal"> <i class="glyphicon glyphicon-plus-sign"></i> Add System </button>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageSystemTable">
					<thead>
						<tr>
                                                    <!--
							<th style="width:10%;">Photo</th>							
							-->
                                                        <th>System ID</th>
							<th>Serial Number</th>							
							<th>Product Key</th>
							<th>OEM</th>
							<th>Date of Allocation</th>
							<th>System User</th>
                                                        <th>Project</th>
							<th style="width:15%;">Options</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->
<!-- / Fetch System -->

<!-- add System -->
<div class="modal fade" id="addSystemModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

        <form class="form-horizontal" id="submitSystemForm" action="./php_action/createSystem.php" method="POST" enctype="multipart/form-data">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add System</h4>
	      </div>

	      <div class="modal-body" style="max-height:450px; overflow:auto;">

	      	<div id="add-product-messages"></div>

	      	  <!--form-group	 -->    	           	       

	        <div class="form-group">
	        	<label for="productName" class="col-sm-3 control-label">System ID: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="systemId" placeholder="System ID" name="systemId" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	    

	        <div class="form-group">
	        	<label for="quantity" class="col-sm-3 control-label">Serial Number: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="serialNo" placeholder="Serial Number" name="serialNo" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->
                <!-- /form-group-->	    

	        <div class="form-group">
	        	<label for="quantity" class="col-sm-3 control-label">Product Key: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="productKey" placeholder="Product Key" name="productKey" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->

	        <div class="form-group">
	        	<label for="rate" class="col-sm-3 control-label">OEM: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="oem" placeholder="O E M" name="oem" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	     	        

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Date of Allocation: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
                                        <input type="date"  name="doa" class="form-control" id="datepicker">
				    </div>
	        </div> <!-- /form-group-->	

	        <div class="form-group">
	        	<label for="categoryName" class="col-sm-3 control-label">System User: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" name="systemUser" class="form-control" id="datepicker">
				    </div>
	        </div> <!-- /form-group-->					        	         	       

	        <div class="form-group">
	        	<label for="productStatus" class="col-sm-3 control-label">Project: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="project" placeholder="Project" name="project" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div> <!-- /modal-footer -->	      
     	</form> <!-- /.form -->	     
    </div> <!-- /modal-content -->    
  </div> <!-- /modal-dailog -->
</div> 
<!-- /add System -->


<!-- edit System Info -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	    	
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit System</h4>
	      </div>
	      <div class="modal-body" style="max-height:450px; overflow:auto;">

	      	<div class="div-loading">
	      		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
	      	</div>

	      	<div class="div-result">

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				  
				    <li role="presentation"><a href="#productInfo" aria-controls="profile" role="tab" data-toggle="tab">System Info</a></li>    
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">

				  	
				  
				    <!-- product image -->
				    <div role="tabpanel" class="tab-pane" id="productInfo">
                                        <form class="form-horizontal" id="editProductForm" action="php_action/editSystem.php" method="POST">				    
				    	<br />

				    	<div id="edit-product-messages"></div>

				    	<div class="form-group">
			        	<label for="editProductName" class="col-sm-3 control-label">System ID: </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="editSystemID" placeholder="Product Name" name="systemId" autocomplete="off">
						    </div>
			        </div> <!-- /form-group-->	    

			        <div class="form-group">
			        	<label for="editQuantity" class="col-sm-3 control-label">Serial Number: </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="editSerialNumber" placeholder="Quantity" name="serialNumber" autocomplete="off">
						    </div>
			        </div> <!-- /form-group-->	        	 

			        <div class="form-group">
			        	<label for="editRate" class="col-sm-3 control-label">Product Key: </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="editProductKey" placeholder="Rate" name="productKey" autocomplete="off">
						    </div>
			        </div> <!-- /form-group-->	     	        

			        <div class="form-group">
			        	<label for="editBrandName" class="col-sm-3 control-label">O E M: </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="editOem" placeholder="Rate" name="oem" autocomplete="off">
						    </div>
			        </div> <!-- /form-group-->	

			        <div class="form-group">
			        	<label for="editCategoryName" class="col-sm-3 control-label">Date Of Allocation: </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						        <input type="date" class="form-control" id="editDoa" placeholder="Rate" name="doa" autocomplete="off">
						    </div>
			        </div> <!-- /form-group-->					        	         	       

			        <div class="form-group">
			        	<label for="editProductStatus" class="col-sm-3 control-label">System User: </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <input type="text" name="systemUser" class="form-control" id="editSystemUser">
						    </div>
			        </div> <!-- /form-group-->	
                                 <div class="form-group">
                                    <label for="productStatus" class="col-sm-3 control-label">Project: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                        <div class="col-sm-8">
				      <input type="text" class="form-control" id="editProject" placeholder="Project" name="project" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->

			        <div class="modal-footer editProductFooter">
				        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
				        
				        <button type="submit" class="btn btn-success" id="editProductBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
				      </div> <!-- /modal-footer -->				     
			        </form> <!-- /.form -->				     	
				    </div>    
				    <!-- /product info -->
				  </div>

				</div>
	      	
	      </div> <!-- /modal-body -->
	      	      
     	
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- /edit Project Info  -->

<!-- Remove Project-->
<div class="modal fade" tabindex="-1" role="dialog" id="removeProductModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Product</h4>
      </div>
      <div class="modal-body">

      	<div class="removeProductMessages"></div>

        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeProductFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeProductBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /Remove Project -->


<script src="custom/js/system.js"></script>

<?php require_once 'includes/footer.php'; ?>