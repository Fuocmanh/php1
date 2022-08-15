<?php
require('../../include/connect.php');
if (isset($_POST['editstyle'])) {
    // khai bao bien
    $name = $_POST['name'];
    $action= $_POST['action'];
    $style_id = $_POST['id']; 
    
    $sql = "UPDATE `check` SET Style='$name',style_id='$style_id',action='$action' WHERE `style_id`=$style_id";
        $conn->query($sql);
    header('location: ../../tables.php');
}
?>