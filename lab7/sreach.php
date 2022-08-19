<?php
require('cn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Sreach products</title>
    <style>
        h1 {
            margin-top: 25px;
            text-align: center;
        }
        td,th{
        text-align: center;
        padding: 0 !important;
        padding-top:0.75rem !important;
        padding-left:0.75rem !important;
        padding-right:0.75rem !important;
        width:max-content !important;
    }
        .form-sreach {
            width: 20%;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <h1>Sreach Product</h1>
    <table class="table table-bordered  ">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name Prodcut</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Style</th>
                <th colspan="2" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['key'])) {
                $key = $_GET['key'];
                $sql = "SELECT * FROM `list` INNER JOIN `style` ON list.style_id = style.style_id WHERE CONCAT(id,image,name,price,status,style_name) LIKE '%$key%'";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $item) {
            ?>
                        <tr>
                            <th scope="row"><?= $item['id'] ?></th>
                            <td>
                                <img src="uploads/<?= $item['image'] ?>" style="width: 100px;">
                            </td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['price'] ?></td>
                            <td><?= $item['status'] ?></td>
                            <td><?= $item['style_name'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?= $item['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
            <?php
                    }
                } else {
                    echo 'Not found product';
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>