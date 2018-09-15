<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/Ahmadtest/header.php";
   include_once($path);
   include_once("navbar.php");
$path1 = "class.database.php";
   include_once($path1);
   $path2 = "class.ManageUsers.php";
   include_once($path2);
     
?>

<?php 
   $db_connection = new dbConnection();
       $link = $db_connection->connect(); 
      
      $show = new ManageUsers();

      $data = $show->GetRecords();
      // echo "<pre>";
      // print_r($data);exit;
  ?>
<div class="container">
    <div class="row">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Employee ID</th>
              <th>Name</th>
              <th>Age</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tbody id="myTable">

<?php 
$x = 1;
foreach ($data as $record) {
?>

            <tr>
              <td><?php echo $x?></td>
              <td><?php echo $record['emp_id']?></td>
              <td><?php echo $record['name']?></td>
              <td><?php echo $record['age']?></td>
              <td><?php echo $record['salary']?></td>
            </tr>
            <?php $x++;} ?>
          </tbody>
        </table>   
      </div>
      <div class="col-md-12 text-center">
      <ul class="pagination pagination-lg pager" id="myPager"></ul>
      </div>
	</div>
</div>