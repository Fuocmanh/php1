<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // check submit 
    if (isset($_POST['register'])) {
    
        // ket noi co so du lieu 
        require('include/connect.php');
    
    
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
            header('location: LogIn.php');
        }
        else{
            header('location: LogIn.php');
        }
    } 
    ?>
</body>
</html>