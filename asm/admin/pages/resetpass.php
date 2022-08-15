<?php
if (isset($_POST['edit'])) {
    require '../include/connect.php';
    // lay thong tin tu form edit 
    $ad_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass=md5($_POST['password']);

    // cau lenh edit 
    $query = "UPDATE admin SET ad_id='$ad_id',name='$name', email='$email', pass='$pass' WHERE name = '$name';";
    // thuc hien sua 
    if ($conn->query($query) === true) {
        // chuyen huong qua trang list 
        header('location: LogIn.php');
    }
}

