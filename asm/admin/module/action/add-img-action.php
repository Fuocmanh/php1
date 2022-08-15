<?php
require('../../include/connect.php');
    if (isset($_POST['addimg'])) {
        // xu ly img
        $image1 = $_FILES['image1']['name'];
        $image_tmp1 = $_FILES['image1']['tmp_name'];
        $image2 = $_FILES['image2']['name'];
        $image_tmp2 = $_FILES['image2']['tmp_name'];
        $image3 = $_FILES['image3']['name'];
        $image_tmp3 = $_FILES['image3']['tmp_name'];
        $image4 = $_FILES['image4']['name'];
        $image_tmp4 = $_FILES['image4']['tmp_name'];
        $pro_id = $_POST['pro_id'];
        //them
        $sql = "INSERT INTO `img_pro` (pro_id,img1,img2,img3,img4) VALUES('$pro_id','$image1','$image2','$image3','$image4')";
        $conn->query($sql);
        move_uploaded_file($image_tmp1, '../../uploads/'   . $image1);
        move_uploaded_file($image_tmp2, '../../uploads/'   . $image2);
        move_uploaded_file($image_tmp3, '../../uploads/'   . $image3);
        move_uploaded_file($image_tmp4, '../../uploads/'   . $image4);
        header('location: ../../tables.php');
    }
    ?>