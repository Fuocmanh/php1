<?php
require('../../include/connect.php');
    if (isset($_POST['add-det'])) {
        $h2 = $_POST['h2'];
        $details = $_POST['details'];
        $color = $_POST['color']; 
        $pro_id= $_POST['pro_id'];
        //them
        $sql = "INSERT INTO `details` (h2,details,color,pro_id) VALUES('$h2','$details','$color','$pro_id')";
        $query = mysqli_query($conn, $sql);
        header('location: ../../tables.php');
    }
    ?>