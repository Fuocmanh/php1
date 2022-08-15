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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>List products</title>
    <style>
    h1 {
        margin-top: 25px;
        text-align: center;
    }
    .add{
      float: right;
      margin-right: 110px;
      margin-bottom: 10px;
      width: 55px !important;
    }
    td,th{
        text-align: center;
        padding: 0 !important;
        padding-top:0.75rem !important;
        padding-left:0.75rem !important;
        padding-right:0.75rem !important;
        width:max-content !important;
    }
    .pagination{
        margin:0 auto!important;
        padding-left: 650px !important;
    }
    ul a{
        margin:0 auto!important;
    }
    .form-inline{
       display: flex;
       
    }
    .form-inline button{
        padding-top:5px !important;
        margin-top: 5px !important;
        margin-left:10px !important;
    }
    .form-group{
        margin:10px auto !important;
    }
    </style>
</head>

<body>
    <?php
    // $sql = "SELECT * FROM `list` ";
    // $query = mysqli_query($conn, $sql);


    $limit = 3;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * $limit;


    // $query = "SELECT * FROM users";
    $sql = "SELECT * FROM `list` INNER JOIN `style` ON list.style_id = style.style_id ORDER BY `id` ASC LIMIT $start_from, $limit";

    $users = $conn->query($sql);
    $query_count = "SELECT COUNT(id) AS member FROM `list`";

    $count_user = $conn->query($query_count);
    $count_user = $count_user->fetch_assoc();
    $num_user = $count_user['member'];
    ?>
    <form class="form-inline" method="GET" action="sreach.php">
        <div class="form-group mx-sm-3 mb-2"><label for="inputPassword2" class="sr-only">Sreach</label><input type="text" class="form-control" id="inputPassword2" placeholder="Sreach" name="key" value="<?php if (isset($_GET['key'])){echo $_GE['key'];} ?>">
        
        <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-search"></i></button></div>
    </form>
    <h1> Table Product</h1>
    <table class="table table-bordered ">
        <div class="add">
             <a href="add.php" class="btn btn-primary"><i class="bi bi-plus-circle-dotted"></i></a>       
        </div>

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
            while ($row = mysqli_fetch_assoc($users)) :
            ?>
            <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td>
                    <img src="uploads/<?= $row['image'] ?>" style="width: 100px;">
                </td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= $row['style_name'] ?></td>
                <td><a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                <td><a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
    <ul class="pagination">
        <?php
        for ($i = 1; $i <= ceil((int)$num_user / $limit); $i++) :
        ?>
        <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
        <?php
        endfor;
        ?>
    </ul>
</body>

</html>