<?php
if(isset($_POST['search'])):
$key = $_POST['search'];
$sql = "SELECT * FROM `bill` WHERE * LIKE '%$key%'";
// CONCAT(id,image,name,price,status,style_name)
$hoadons="SELECT * FROM bill where `condition`=0 ORDER BY bill_id LIMIT $start_from, $limit ";
header('location: index.php');
else:
    $hoadons="SELECT * FROM bill where `condition`=0 ORDER BY bill_id LIMIT $start_from, $limit ";
endif;
?>