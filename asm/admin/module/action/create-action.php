<?php
if (isset($_POST['create'])) {
  // ket noi co so du lieu 
  require('../../include/connect.php');
  // lay bien cua nguoi dung nhap 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);
  // cau lenh them 
  $query = "INSERT INTO `admin` (name, email, pass)
  VALUES ('$name', '$email', '$pass')";
  // thuc hien them   
  if ($conn->query($query) === true) {
    header('location: ../../pages/login.php');
  }else{
    header('location: ../../pages/login.php');
  }
}else{
    header('location: ../../pages/create-account.php');
}
  ?>