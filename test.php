<?php
$connection = mysqli_connect('localhost', 'root', '', 'test');
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully to MySQL!';
?>
