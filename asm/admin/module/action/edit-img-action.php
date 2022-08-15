<?php
if (isset($_POST['eedit'])) {
    require('../../include/connect.php');
    // khai bao bien

    $pro_id = $_POST['pro_id'];
    $id = (int)$_POST['img_id'];
    // xu ly img
    $image1 = $_FILES['image1']['name'];
    $image_tmp1 = $_FILES['image1']['tmp_name'];

    $image2 = $_FILES['image2']['name'];
    $image_tmp2 = $_FILES['image2']['tmp_name'];

    $image3 = $_FILES['image3']['name'];
    $image_tmp3 = $_FILES['image3']['tmp_name'];

    $image4 = $_FILES['image4']['name'];
    $image_tmp4 = $_FILES['image4']['tmp_name'];

    move_uploaded_file($image_tmp1, '../../uploads/'   . $image1);
    move_uploaded_file($image_tmp2, '../../uploads/'   . $image2);
    move_uploaded_file($image_tmp3, '../../uploads/'   . $image3);
    move_uploaded_file($image_tmp4, '../../uploads/'   . $image4);

    $sql = "UPDATE `img_pro` SET pro_id='$pro_id', img1='$image1', img2='$image2' , img3='$image3' ,img4='$image4' WHERE `img_pro`.`img_id`=$id;";
    if ($conn->query($sql) === true) :
        header('location: ../../tables.php');
    endif;
}
