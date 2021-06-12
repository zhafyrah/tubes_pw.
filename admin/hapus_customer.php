<?php
include '../ctrl/config.php';

$id = $_POST['id'];

$connect->query("DELETE FROM tb_user WHERE id='$id'");

header("Location: customer.php");
