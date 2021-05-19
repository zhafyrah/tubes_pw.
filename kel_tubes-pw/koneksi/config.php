<?php
$servername ="localhost";
$usname = "root";
$password = " ";

$database = "";

//create connection
if(!$coon) {
    die ("Connection gagal: " . mysqli_connect_error());
}
    echo "Connection sukses!";
?>