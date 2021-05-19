<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "go_train";

try {
    $conn = new PDO("mysql:host=$servername;dbname=go_train", $username, $password);
    // set the PDO error mode to exception
    $conn>setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"Connected succesfully";
} catch(PDOException $e) {
    echo"Connection failed:".
    $e->getMesaage();
}
?>