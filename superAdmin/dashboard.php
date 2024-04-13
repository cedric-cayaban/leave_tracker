
 <?php
    require('../config.php');
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css?ver=0002">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9c6f27a8d7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 
    <title>Doc</title>
</head>
<style>
    

</style>
<body>
<div class="card card-outline card-primary mt-4" id="load-content">
	<div class="card-header d-flex justify-content-between">
		<h1 class="card-title">Welcome to Leave Credit Tracking System</h1>
		
	</div>
	<div class="card-body">
		
        <div class="container-fluid">
        <div class="row">
           
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box  mb-3" onclick="loadContent('departments/abel.php')">
              <span class="info-box-icon bg-primary elevation-1"> <i class="fas fa-user-tag"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">ABEL: </span>
                <span class="info-box-number text-right">
                    <?php 
                       
                        $abel = $con->query("SELECT COUNT(*) AS count
                        FROM employee_leave
                        INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                        WHERE employee.department = 1
                        ")->fetch_assoc()['count'];

                        echo number_format($abel);
                    ?>
                  <?php ?>
                </span>
              </div>

            </div>
           
          </div>
          
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" onclick="loadContent('departments/architecture.php')">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-building"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Architecture: </span>
                <span class="info-box-number text-right">
                  <?php 
                   $abel = $con->query("SELECT COUNT(*) AS count
                   FROM employee_leave
                   INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                   WHERE employee.department = 2
                   ")->fetch_assoc()['count'];

                   echo number_format($abel);
                  ?>
                </span>
              </div>
              
            </div>
            
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" onclick="loadContent('departments/civEngineering.php')">
              <span class="info-box-icon bg-white elevation-1"><i class="fas fa-city"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Civil Engineering: </span>
                <span class="info-box-number text-right">
                  <?php 
                   $abel = $con->query("SELECT COUNT(*) AS count
                   FROM employee_leave
                   INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                   WHERE employee.department = 1
                   ")->fetch_assoc()['count'];

                   echo number_format($abel);
                  ?>
                </span>
              </div>
              
            </div>
            
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" onclick="loadContent('departments/compEngineering.php')">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-laptop"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Computer Engineering: </span>
                <span class="info-box-number text-right">
                  <?php 
                   $abel = $con->query("SELECT COUNT(*) AS count
                   FROM employee_leave
                   INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                   WHERE employee.department = 1
                   ")->fetch_assoc()['count'];

                   echo number_format($abel);
                  ?>
                </span>
              </div>
              
            </div>
            
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" onclick="loadContent('departments/elecEngineering.php')">
              <span class="info-box-icon bg-warning elevation-1"> <i class="fas fa-bolt"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Electrical Engineering: </span>
                <span class="info-box-number text-right">
                  <?php 
                   $abel = $con->query("SELECT COUNT(*) AS count
                   FROM employee_leave
                   INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                   WHERE employee.department = 1
                   ")->fetch_assoc()['count'];

                   echo number_format($abel);
                  ?>
                </span>
              </div>
              
            </div>
            
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" onclick="loadContent('departments/infoTech.php')">
              <span class="info-box-icon bg-white elevation-1"><i class="fas fa-desktop"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Information Technology: </span>
                <span class="info-box-number text-right">
                  <?php 
                   $abel = $con->query("SELECT COUNT(*) AS count
                   FROM employee_leave
                   INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                   WHERE employee.department = 1
                   ")->fetch_assoc()['count'];

                   echo number_format($abel);
                  ?>
                </span>
              </div>
              
            </div>
            
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" onclick="loadContent('departments/mathematics.php')">
              <span class="info-box-icon bg-primary elevation-1"> <i class="fas fa-calculator"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Mathematics: </span>
                <span class="info-box-number text-right">
                  <?php 
                   $abel = $con->query("SELECT COUNT(*) AS count
                   FROM employee_leave
                   INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                   WHERE employee.department = 1
                   ")->fetch_assoc()['count'];

                   echo number_format($abel);
                  ?>
                </span>
              </div>
              
            </div>
            
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3" onclick="loadContent('departments/mechEngineering.php')">
              <span class="info-box-icon bg-warning elevation-1"> <i class="fas fa-cogs"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Mechanical Engineering: </span>
                <span class="info-box-number text-right">
                  <?php 
                    $abel = $con->query("SELECT COUNT(*) AS count
                    FROM employee_leave
                    INNER JOIN employee ON employee_leave.employee_id = employee.employee_id
                    WHERE employee.department = 1
                    ")->fetch_assoc()['count'];

                    echo number_format($abel);
                  ?>
                </span>
              </div>
              
            </div>
            
          </div>
        </div>
		</div>
		
	</div>
</div>
    
        
 
 

 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>