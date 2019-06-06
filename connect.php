<?php
$host="199.79.62.23:3306";
$user="aavishka";
$pass="events_aavishkar@17";
$db="aavishka_events";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
	
	
}
?>