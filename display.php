<?php

include 'todo.php';

    $id = (isset($_POST['id']) ? $_POST['id'] : '');
    $activity = (isset($_POST['activity']) ? $_POST['activity'] : '');
	
	
	$q= "SELECT * FROM todo";
	
	$query = mysqli_query($con,$q);
	
?>

	



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>displayrecords</title>
		
</head>
<body>
 

<h2 style="text-align:center; font-size:30px;color:blue">TODO LIST</h2>

<table style="text-align:center; width:80%; border-collapse:collapse">
  <tr style="font-size:20px;color:blue";>
    <th>activity</th>
    
  </tr>
  
<?php

     include 'todo.php';
	
	$q= "SELECT * FROM todo";
	
	$query = mysqli_query($con,$q);
	
	while($res= mysqli_fetch_array($query)){
		
	
	
?>
  
  
  <tr style="color:black;padding:8px;text-align:center">
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['activity'];?></td>
	<td><button><a href="delete.php?activity=<?php echo $res['activity'];?>">DELETE</a></button></td>
	<td><button><a href="update.php?activity=<?php echo $res['activity'];?>">UPDATE</a></button></td>
	
	
  </tr>
  
  <?php
  
    }
  ?>
  
</table>











	
</body>
</html>

















