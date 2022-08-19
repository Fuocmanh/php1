<?php
session_start();
// check submit 
if (isset($_POST['login'])) {
    // ket noi co so du lieu 
    require('connect.php');
    // lay bien cua nguoi dung nhap 
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pas = md5($pass);
    // lấy db
    $get = "SELECT * FROM users where email='$email' and pass='$pas'";
    if ($gett = $conn->query($get)->fetch_assoc()) :
        $_SESSION['user'] = $gett['name'];
        $_SESSION['user_id'] = $gett['use_id'];
        header('location: index.php');
    else:
        echo"sai thông tin tài khoản";
    endif;
} else {
    header('location: login.php');
}
