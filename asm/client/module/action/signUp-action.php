<?php 
    // check submit 
    if (isset($_POST['register'])) {
        // ket noi co so du lieu 
        require('../../include/connect.php'); 
        // lay bien cua nguoi dung nhap 
        $name = $_POST['usename'];
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        $phone= $_POST['phone'];
        $address = $_POST['address'];
        // cau lenh them 
        $query = "INSERT INTO users (name, email, pass,phone,address)
        VALUES ('$name', '$email', '$pass','$phone', '$address')";
    
        // thuc hien them 
        if ($conn->query($query) === true) {
            header('location: ../../LogIn.php');
        }
        else{
            header('location: ../../LogIn.php');
        }
    } 
    ?>