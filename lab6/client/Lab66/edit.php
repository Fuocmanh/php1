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
    <!-- <pre> -->
    <?php
    require 'connect.php';
    $user_id = $_GET['user_id'];
    // print_r($user_id);
    $query = "SELECT * FROM users WHERE user_id=$user_id";
    $users = $conn->query($query);
    // lay du lieu cho mang user 
    $user = $users->fetch_assoc();

    // print_r($user);
    ?>
    <div class="all">

        <form action="edit-action.php" method="post">
            <input type="hidden" name="user_id" id="" value="<?= $user['user_id'] ?>">
            <div>
                <label for="">Name:</label>
                <input type="text" name="name" id="" value="<?= $user['name'] ?>" required>
            </div>
            <div>
                <label for="">Salary</label>
                <input type="text" name="salary" id="" value="<?= $user['salary'] ?>" required>
            </div>
            <button class="btn btn-secondary btn-outline-dark" type="submit" name="edit">ok</button>
        </form>
    </div>
</body>

</html>