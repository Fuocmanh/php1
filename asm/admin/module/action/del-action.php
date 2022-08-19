<?php
require('../../include/connect.php');
$id = $_GET['id'];
$sql  = "DELETE FROM `products`  WHERE `pro_id`= $id";
$conn->query($sql);
header('location: ../../tables.php');
?>