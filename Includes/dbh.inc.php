<?php 

$serverName = 'localhost';
$dbUsername = 'root';
$dbPwd = '';
$dbName = 'coding competition';

$conn = mysqli_connect(
    $serverName, 
    $dbUsername,
    $dbPwd,
    $dbName );

if (!$conn) {
    die("Conneciton failed: " . mysqli_connect_error());
}