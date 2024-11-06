<?php
$host = 'localhost';
$user = 'root';  // default for local server
$password = '';
$dbname = 'input';

$conn = new mysqli($localhost, $user, $password, $hdtproject);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
