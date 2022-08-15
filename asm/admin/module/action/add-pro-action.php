<?php
require('../../include/connect.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $active = $_POST['active'];
        // xu ly img
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $style_id = $_POST['style_id'];
        //them
        $sql = "INSERT INTO `products` (name,price,image,active,style_id) VALUES('$name','$price','$image','$active','$style_id')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp, 'uploads/'   . $image);
        header('location: ../../products.php');
    }
    ?>