<?php

$host = 'db';
$user = 'akashdeep';
$password = 'akpass';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
	die('Connection failed: ' . $conn->connect_error);
}
else{
	echo 'Connected to MySQL server successfully!';
}

?>

