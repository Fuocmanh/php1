<?php
//không sử dụng
session_start();
session_destroy();
header('location: ../../pages/login.php');
// if (isset($_POST['logad'])) {
//     require ('../../include/connect.php');

//     $email = $_POST['email'];
//     $password = md5($_POST['password']);

//     $query = "SELECT name,pass FROM `admin` WHERE email='$email' AND pass='$password'";
//     // $row = $conn->query($query)->fetch_assoc();
//     // var_dump($row);

    
//     if ($conn->query($query)->num_rows > 0) {
//         $_SESSION['admin'] = $email;
//         header('location: ../../index.php');
//     } else {
//         header('location: ../pages/login-404.php');
//     }
//}
