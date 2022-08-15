<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php
    require 'connect.php';

    $limit = 3;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * $limit;


    // $query = "SELECT * FROM users";
    $query = "SELECT * FROM users ORDER BY user_id DESC LIMIT $start_from, $limit";

    $users = $conn->query($query);

    $query_count = "SELECT COUNT(user_id) AS num_user FROM users";

    $count_user = $conn->query($query_count);
    $count_user = $count_user->fetch_assoc();
    $num_user = $count_user['num_user'];
    // var_dump($count_user['num_user']);
    ?>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($users->num_rows > 0) :
                    while ($user = $users->fetch_assoc()) :
                ?>
                        <tr>
                            <th scope="row"><?= $user['user_id'] ?></th>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['salary'] ?></td>
                            <td>
                                <a href="edit.php?user_id=<?= $user['user_id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                <i class="bi bi-trash3"></i>
                            </td>
                        </tr>
                <?php
                    endwhile;
                endif;
                // $conn->close();
                ?>
            </tbody>
        </table>



        <ul class="pagination">

            <?php
            // var_dump($count_user);
            // var_dump((int)$num_user / $limit);
            for ($i = 1; $i <= ceil((int)$num_user / $limit); $i++) :
            ?>
                <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
            <?php
            endfor;
            ?>

        </ul>




    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>