<?php

// check submit 
if (isset($_POST['register'])) {

    // ket noi co so du lieu 
    require('connect.php');


    // lay bien cua nguoi dung nhap 
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    // cau lenh them 
    $query = "INSERT INTO users (name, salary) VALUES ('$name', '$salary')";

    // thuc hien them 
    if ($conn->query($query) === true) {
        header('location: list.php');
    } else {
        echo ("loi ko them dc " . $conn->connect_error);
    }
} else {
    echo 'ko submit form register';
}
