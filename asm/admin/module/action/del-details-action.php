<?php
require('../../include/connect.php');
$id = $_GET['id'];
$sql  = "DELETE FROM `details` WHERE `det_id`= $id";
$conn->query($sql);
header('location: ../../tables.php');
?>