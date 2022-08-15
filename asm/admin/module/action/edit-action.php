<?php
require('../../include/connect.php');
if (isset($_POST['edit'])) {
    // khai bao bien
    $id=$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $active= $_POST['active'];
    $style_id = $_POST['style_id']; 
    $nouploads= $_POST['nouploads'];
    // xu ly img
    if ($_FILES['image']['name'] == '') {
        $sql = "UPDATE `products` SET name='$name' , price='$price',style_id='$style_id',active='$active' WHERE `pro_id`=$id";
        $conn->query($sql);
    } else {
        // $images = $_POST['image'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_name = date('YmdHis') . '.' . $image_ext;
        move_uploaded_file($image_tmp, '../../uploads/'. $image_name);
        $sql = "UPDATE `products` SET image='$image_name', name='$name' , price='$price',style_id='$style_id',active='$active' WHERE `pro_id`=$id";
        $conn->query($sql);
    } 
    header('location: ../../products.php');
}
?>