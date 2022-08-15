<?php

if (isset($_POST['edit'])) {
    require 'connect.php';

    // lay thong tin tu form edit 
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    // cau lenh edit 
    $query = "UPDATE users SET name='$name', salary=$salary WHERE user_id=$user_id";

    // thuc hien sua 
    if ($conn->query($query) === true) {
        // chuyen huong qua trang list 
        header('location: list.php');
    } else {
        echo ("loi ko sua dc " . $conn->connect_error);
    }
}
