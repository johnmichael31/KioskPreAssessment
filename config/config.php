<?php 

$serverName = 'localhost';
$userName = 'root';
$password = '';
$db_name = 'kiosk';


$conn = new mysqli($serverName, $userName, $password, $db_name);

if(!$conn){
    die("Connection Failed " . $conn->connect_error);
} 

?>