<?php include("header.php");
include("arrays.php");



?>



<!DOCTYPE html>
<html>
<head>
    <title>students</title>
    
</head>
<body>
<div class="container">
<div  class="p-2 mt-3 text-align-center text-justify">
		<span style="font-size: 150%;" class="text-monospace" >Students</span>
		<button class=" float-right" id="0">Add Student</button>
	</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($students as $id => $name) :?>
  <tr>
    	<td><?php echo $id ?></td>
    	<td><?php echo $name ?></td>
    	<td>
		<button class="button edit_student" id="1">Edit</button>&nbsp;
		<button class="button delete_student" id="1">Delete</button>
	    </td>
    </tr>
<?php endforeach; ?>
  
   
  </tbody>
</table>
</div>
<footer class="footer">
<?php include("footer.php"); ?>
</footer>
    
</body>
</html>