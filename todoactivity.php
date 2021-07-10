<?php

include 'todo.php';

if(isset($_POST['submit'])){
	
	$id = $_POST['id'];
	$activity = $_POST['activity'];
	
	
	
	$q= "INSERT INTO todo VALUES('$id','$activity')";
	
	$query = mysqli_query($con,$q);
	
}


?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>todolistactivity</title>
</head>
<body>
<form action="" method="POST">

Activity:<input type="text" class="" name="activity" placeholder="activity" required><br>
ID:<input type="text" class="" name="id" placeholder="activity" required><br>
<input type="submit" name="submit" value="submit">

</form>
</body>
</html>