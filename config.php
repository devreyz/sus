<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "sis-cad-sus";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// define('HOST', 'localhost:3306');
// define('USER', 'root');
// define('PASS', '');
// define('DATA', 'sis-cad-sus');

// $conn = new mysqli(HOST, USER, PASS, DATA);





