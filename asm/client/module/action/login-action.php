<?php
// check submit 
if (isset($_POST['login'])) {
    // ket noi co so du lieu 
    require('../../include/connect.php');
    // lay bien cua nguoi dung nhap 
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pas = md5($pass);
    // lấy db
    $get = "SELECT * FROM users where email='$email' and pass='$pas'";
    // biến đếm
    $count = 0;
    if ($conn->query($get)->num_rows > 0) :
        header("Location: ../../../index.php");
    else :
        echo 'sai mk';
    endif;
}