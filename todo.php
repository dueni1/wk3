<?php

/*checking if it is connecting*/

$con= mysqli_connect("localhost","root","","todolist");
mysqli_select_db($con,"todolist");

	if($con){
		echo "";
	}else{
		echo "not connected";
	}

?>
