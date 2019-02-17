<?php require_once 'includes/header.php'; ?>

<?php 

//$sql = "SELECT * FROM product WHERE status = 1";
//$query = $connect->query($sql);
//$countProduct = $query->num_rows;

$projectsql = "SELECT * FROM project";
$projectquery = $connect->query($projectsql);
$cntProject = $projectquery->num_rows;

$systemsql = "SELECT * FROM system";
$systemquery = $connect->query($systemsql);
$countSystem = $systemquery->num_rows;


$usersql = "SELECT * FROM users";
$userquery = $connect->query($usersql);
$countUser = $userquery->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$seesionsql="select * from sessions where user_status='online'";
$sessionquery=$connect->query($seesionsql);
$sessionresult = $sessionquery->fetch_assoc();

$totalRevenue = "";
while ($orderResult = $orderQuery->fetch_assoc()) {
	$totalRevenue += $orderResult['paid'];
}


//while ($sessionresult = $sessionquery->fetch_assoc()) {
//	$totalUser += intval($sessionresult['user_name']);
//}

$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$userwisesql = "SELECT users.username , SUM(orders.grand_total) as totalorder FROM orders INNER JOIN users ON orders.user_id = users.user_id WHERE orders.order_status = 1 GROUP BY orders.user_id";
$userwiseQuery = $connect->query($userwisesql);
$userwieseOrder = $userwiseQuery->num_rows;

$connect->close();

?>


<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>

<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.print.css" media="print">


<div class="row">
	<?php  if(isset($_SESSION['userId']) && $_SESSION['userLabel']==1) { ?>
	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				
				<a href="project.php" style="text-decoration:none;color:black;">
					Total Project
					<span class="badge pull pull-right"><?php echo $cntProject; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	
	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="system.php" style="text-decoration:none;color:black;">
					Systems
					<span class="badge pull pull-right"><?php echo $countSystem; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	
	
	 
		<div class="col-md-4">
			<div class="panel panel-info">
			<div class="panel-heading">
                            <a href="user.php" style="text-decoration:none;color:black;">
					Users
					<span class="badge pull pull-right"><?php echo $countUser; ?></span>
				</a>
					
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
		</div> <!--/col-md-4-->
<?php } ?> 
	

	<div class="col-md-4">
		<div class="card">
		  <div class="cardHeader">
		    <h1><?php echo date('d'); ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
		  </div>
		</div> 
		<br/>
<?php  if(isset($_SESSION['userId']) && $_SESSION['userLabel']==1) { ?>
		<div class="card">
		  <div class="cardHeader" style="background-color:#245580;">
		    <h1>
		    	Welcome to Admin Panel
                    </h1>
		  </div>

		  <div class="cardContainer">
		    <p> System Monitoring Azcom</p>
		  </div>
		</div> 

	</div> <?php } ?>
	
                <?php  if(isset($_SESSION['userId']) && $_SESSION['userLabel']!=1) { ?>
		<div class="card">
		  <div class="cardHeader" style="background-color:#245580;">
		    <h1>
		    	Welcome User
                    </h1>
		  </div>

		  <div class="cardContainer">
                      <p> Your Session Started</p>
		    <p> System Monitoring Azcom</p>
		  </div>
		</div> 

	</div> <?php } ?>
                
                
                
	<?php  if(isset($_SESSION['userId']) && $_SESSION['userLabel']==1) { ?>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> List of Online Users</div>
			<div class="panel-body">
				<table class="table" id="productTable">
			  	<thead>
			  		<tr>			  			
			  			<th style="width:20%;">Name</th>
                                                <th style="width:20%;">Status</th>
			  			<th style="width:20%;">Project</th>
			  		</tr>
			  	</thead>
			  	<tbody>
					<?php while ($sessionresult = $sessionquery->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $sessionresult['user_name']?></td>
							<td><?php echo $sessionresult['user_status']?></td>
                                                        <td><?php echo $sessionresult['project_name']?></td>
							
						</tr>
						
					<?php } ?>
				</tbody>
				</table>
				<!--<div id="calendar"></div>-->
			</div>	
		</div>
		
	</div> 
	<?php  } ?>
	
</div> <!--/row-->

<!-- fullCalendar 2.2.5 -->
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
</script>

<?php require_once 'includes/footer.php'; ?>