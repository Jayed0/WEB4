<?php
 
 	// mysqli_connect("hostname", "username", "password", "dbname");

	$db = mysqli_connect("localhost", "root", "", "ulab_cse");
	
	if($db){
		// echo "Database Connected!!!";
	}
	else {
		die("MySQl Database Connection Failed" . mysqli_error($db));
	}
?>