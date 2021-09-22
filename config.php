<?php 
$servername = 'localhost';
$dbname = 'gym';
$username = 'root';
$pass = '';

$conn = mysqli_connect($servername,$username,$pass,$dbname);
	if(!$conn)
	{
		die("connection failed");

	}
	else{
		echo "connected";
	}

 ?>