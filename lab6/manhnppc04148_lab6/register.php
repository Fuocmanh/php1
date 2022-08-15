<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="all">
        <form action="#" method="post">
            <div>
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="" required>
            </div>
            <div>
                <label for="salary">Salary</label>
                <input class="form-control" type="text" name="salary" id="" required>
            </div>
            <button class="btn btn-secondary btn-outline-dark" type="submit" name="register">Submit</button>
        </form>
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
                echo '<p>Added successfully</p>';
            } else {
                echo ("<p>Added failed</p>");
            }
        }
        ?>
    </div>
</body>

</html>