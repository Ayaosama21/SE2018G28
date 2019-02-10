<?php
mysql_connect("localhost","root","password") or die("could not connect");
mysql_select_db("") or die ("could not find db!");

//collect
if(isset($_POST[''])){
 $searchq = $_POST['search'];
 $searchq = preg_replace("#[^0-9a-z]#", "", "searchq");

 $query = mysql_query("SELECT *FROM places  WHERE city LIKE '%searchq%'")
  or die("could not search!");

 $count = mysql_num_rows($query);

 if($count==0){
 	$output = 'There was no search results!'
 }else{

 	while (($row = mysql_fetch_array($query))) {
 		$cname = $row['city'];
 		$id = $row['ic'];
 		$output = '<div>' .$cname.'</div>';
 	}
 }

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
<form action="sw.php" method="post">
	<input type="text" name="search" placeholder="city"></input>
	<input type="submit" value=">>"></input>

</form>
<?php print("$output");?>
</body>
</html>