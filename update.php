<?php


include 'todo.php';
	
if(isset($_POST['submit'])){	

    $id = $_POST['id'];
	$activity = $_POST['activity'];
	
	
		
	$q= "UPDATE todo set activity= '$activity' WHERE id='$id'";
	
	$query = mysqli_query($con,$q);
	
	
	header('location:display.php');
	
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
ID:<input type="text" class="" name="id" placeholder="id" required><br>
<input type="submit" name="submit" value="submit">

</form>
</body>
</html>

	   
	




 
   
	  
	   
	  

	   
</body>
</html>