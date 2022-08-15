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
    if (isset($_POST['login'])) {
    
        // ket noi co so du lieu 
        require('include/connect.php');
        // lay bien cua nguoi dung nhap 
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pas=md5($pass);
        // lấy db
        $get= "SELECT * FROM users where email='$email' and pass='$pas'";
        // biến đếm
        $count=0;
       if($conn->query($get)->num_rows > 0):
        header("Location: ../index.php");
       else:
        echo 'sai mk';
    endif;
    } 
    ?>
</body>
</html>