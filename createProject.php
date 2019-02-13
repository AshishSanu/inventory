<?php require_once 'php_action/db_connect.php';
 require_once 'includes/header.php'; 
 
 
 ?>

<!-- Create Project -->
<form method="post" action="createProj.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Project ID</label>
      <input type="text" class="form-control" id="inputEmail4" name="projectID" placeholder="Project ID should be Unique">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Project Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="projectName" placeholder="Project Name">
    </div>
  </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Project Team</label>
      <input type="text" class="form-control" id="inputEmail4" name="projectTeam" placeholder="Name of the Team">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Project Duration</label>
      <input type="text" class="form-control" id="inputPassword4" name="projectDuration" placeholder="Project Duration">
    </div>
  </div>
    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Project Start Date</label>
      <input type="date" class="form-control" id="inputEmail4" name="projectSD" placeholder="Name of the Team">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Project End Date(Can be left blank)</label>
      <input type="date" class="form-control" id="inputPassword4" name="projectED" placeholder="Project Duration">
    </div>
  </div>
 
  
  
  <button type="submit" class="btn btn-primary">Create Project</button>
</form>



<?php require_once 'includes/footer.php'; ?>