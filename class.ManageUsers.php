<?php
	include_once('class.database.php');
	
	class ManageUsers{
		public $link;
		
		function __construct(){
			$db_connection = new dbConnection();
			$this->link = $db_connection->connect();
			return $this->link;
		}
		
		function registerUsers($id, $name, $age, $salary){
			$query = $this->link->prepare("INSERT INTO records (emp_id,name,age,salary) VALUES(?,?,?,?)");
			$values = array ($id, $name, $age, $salary);
			$query->execute($values);
			$count = $query->rowCount();
			return $count;
		}
		
		function LoginUsers($username, $password){
			$query = $this->link->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
			$rowCount = $query->rowCount();
			return $rowCount;
		}
		
		function GetUserInfo($id){
			$query = $this->link->query("SELECT * FROM records WHERE emp_id = '$id'");
			$rowCount = $query->rowCount();
			if($rowCount ==1)
			{
				$result = $query->fetchAll();
				return $result;
			}
			else
			{
				return $rowCount;
			}
		}

		function GetRecords(){
			$query = $this->link->query("SELECT * FROM records");
			$rowCount = $query->rowCount();
			if($rowCount >0)
			{
				$result = $query->fetchAll();
				return $result;
			}
			else
			{
				return $rowCount;
			}
		}

		function GetRecordsGreater(){
			$query = $this->link->query("SELECT * FROM records WHERE salary > '10000'");
			$rowCount = $query->rowCount();
			if($rowCount >0)
			{
				$result = $query->fetchAll();
				return $result;
			}
			else
			{
				return $rowCount;
			}
		}
	}
	
?>