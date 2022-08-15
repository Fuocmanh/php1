<?php
require('connect.php');
if (isset($_POST['edit'])) {
    // khai bao bien
    $id=$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $active= $_POST['active'];
    $style_id = $_POST['style_id'];
    $images = $_POST['image'];
    $nouploads= $_POST['nouploads'];
    // xu ly img
    if($images==$nouploads):
    if ($_FILES['image']['name'] == '') {
        $image = $_FILES['image']['name'];
    } else {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, '../uploads/'   . $image);
    }
else:
    $image=$nouploads;
endif;

    $sql = "UPDATE `products` SET image='$image', name='$name' , price='$price',style_id='$style_id',active='$active' WHERE `pro_id`=$id";
    $conn->query($sql);
    
    header('location: ../products.php');
}
?>