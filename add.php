<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/Ahmadtest/header.php";
   include_once($path);
   include_once("navbar.php");

   if (@$_GET['show']) {
   $message = '<div class="alert alert-success">'.$_GET['show']."</div>";
   }
   
?>
<body>
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>Employee Management System</h3><h4></h4>
	  </div>
	</nav>
	<?php echo @$message;?>
	
	<div id="content">
		<div id="form">
		<form class="form-horizontal" method="post" action="libs/register.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Add Employee Here</legend>
			
			

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="EMP ID">EMP ID</label>  
			  <div class="col-md-4">
			  <input id="username" name="Emp_id" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="Name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="Age">Age</label>
			  <div class="col-md-4">
				<input id="Age" name="Age" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="Salary">Salary</label>  
			  <div class="col-md-4">
			  <input id="Salary" name="Salary" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="register"></label>
			  <div class="col-md-4">
				<input type="submit" id="register" name="register" class="btn btn-success" value="Add Employee Data	">
			  </div>
			</div>

			</fieldset>
		</form>
		</div>
	</div>
			
			


</body>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/Ahmadtest/footer.php";
   include_once($path);
?>