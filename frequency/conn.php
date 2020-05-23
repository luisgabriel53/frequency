<?php
$host = 'root';
$password = '';
$connection = mysql_connect($db, $host, $password);
$db = mysql_select_db('frequency');


if ($connection == connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>
