<?php
include '../ctrl/config.php';

$id = $_POST['id'];

$connect->query("DELETE FROM tb_kereta WHERE id='$id'");

header("Location: kereta.php");
