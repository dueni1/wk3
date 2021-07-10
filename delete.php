<?php

 include 'todo.php';
 
     $id= $_GET['id'];
    $activity= $_GET['activity'];
    	
	$q= "delete from todo where activity = '$activity' ";
	mysqli_query($con,$q);
	header('location:display.php');
?>