<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD','');
	define('DB_NAME', 'bookphone');

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>