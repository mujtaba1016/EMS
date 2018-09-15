<?php
	session_start();
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/Ahmadtest/class.ManageUsers.php";
    include_once($path);
	
	$users = new ManageUsers();
	
	if(isset($_POST['register']))
	{
		$id= $_POST['Emp_id'];
		$name= $_POST['name'];
		$age= $_POST['Age'];
		$salary= $_POST['Salary'];

		
		$check_availability = $users->GetUserInfo($id);
		if($check_availability ==0)
		{
			$register_user = $users->registerUsers($id, $name, $age, $salary);
			if($register_user == 1)
			{
					// echo $error = "Employee Added";
						header("location: ../add.php?show='Employee Added'");
					
				}
			}
		
		else
		{
			header("location: ../add.php?show='Employee ID Already taken'");
			
		}
	}	
	
?>