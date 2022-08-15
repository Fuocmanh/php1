<?php
require('cn.php');
$id = $_GET['id'];
$sql  = "DELETE FROM `list` WHERE `id`= $id";
$query = mysqli_query($conn, $sql);
header('location: list.php');