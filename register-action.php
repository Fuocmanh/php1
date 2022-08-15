<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        img{ width: 150px; height: 150px;}
        tbody th,td{
            line-height: 150px;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "products_lab6"; // dat ten gi thi lam on de vao gium

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$q= "SELECT * FROM `products`";
$users=$conn->query($q);
?>
  <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">style</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">img</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($users->num_rows > 0) :
                    while ($user = $users->fetch_assoc()) :
                ?>
                        <tr>
                            <th scope="row"><?= $user['id'] ?></th>
                            <td><?= $user['id_products'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['price'] ?></td>
                            <td><img src="<?= $user['images'] ?>" alt=""></td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>