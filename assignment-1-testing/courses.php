<?php include("header.php"); ?>



<!DOCTYPE html>
<html>
<head>
    <title>courses</title>
    <script>
    function showSuggestion(str){
        if(str.length==0){
        }else{
            
        }
    }
    </script>
    
</head>
<body>
<div class="container">
<div  class="p-2 mt-3 text-align-center text-justify">
		<span style="font-size: 150%;" class="text-monospace" >Courses</span>
		
        <form class="form-inline my-2 my-lg-0 d-inline">
      <input onKeyUp="showSuggestion(this.value)" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class=" float-right" id="0">Add Course</button>
	</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Max Degree</th>
      <th scope="col">Study years</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
    	<td>1</td>
    	<td>subject 1</td>
        <td>100</td>
        <td>5</td>
    	<td>
		<button class="button edit_student" id="1">Edit</button>&nbsp;
		<button class="button delete_student" id="1">Delete</button>
	    </td>
    </tr>
    <tr>
    	<td>1</td>
    	<td>subject 1</td>
        <td>100</td>
        <td>5</td>
    	<td>
		<button class="button edit_student" id="1">Edit</button>&nbsp;
		<button class="button delete_student" id="1">Delete</button>
	    </td>
    </tr>
    <tr>
    	<td>1</td>
    	<td>subject 1</td>
        <td>100</td>
        <td>5</td>
    	<td>
		<button class="button edit_student" id="1">Edit</button>&nbsp;
		<button class="button delete_student" id="1">Delete</button>
	    </td>
    </tr>

  </tbody>
</table>
</div>
<footer class="footer">
<?php include("footer.php"); ?>
</footer>
    
</body>
</html>