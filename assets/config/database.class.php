<?php

$servername = 'localhost';
$username = 'root';
$password = 'Diaa@2010856015';

try {
    $conn = new PDO("mysql:host=$servername;dbname=projects", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
