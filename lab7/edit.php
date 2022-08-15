<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/client/img/the-sandbox-sand-logo.png" type="images/x-icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit product</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/61/af/12/61af12d5fb3c469039dbdf63d783c95d.gif');
            background-repeat: no-repeat;
            background-size: cover;

        }

        h1 {
            margin: 20px auto;
            width: max-content;
            color: wheat;
        }

        h1:after {
            content: '';
            display: block;
            height: 5px;
            border-radius: 2%;
            background-image: linear-gradient(90deg, #ff0000, #ff7300, #fffb00);
        }

        form {
            color: gray;
            max-width: 400px;
            margin: auto;
            height: auto;
            padding: 10px;
            border-radius: 15px;
            position: relative;
            background-image: url('https://th.bing.com/th/id/OIP.6zxhvQhVxbEFVGlnR8oQNAHaNb?pid=ImgDet&w=736&h=1335&rs=1');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .form-control,
        .form-select,
        .background {
            background-color: rgba(0, 0, 0, 0.3) !important;
            color: white !important;
            ;
        }

        .btn {
            margin: 10px 0px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.2);
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    require_once('cn.php');
    $sql = "SELECT * FROM `style`";
    $query_style = mysqli_query($conn, $sql);
    // lay du lieu
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM `list` WHERE id= $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if (isset($_POST['submit'])) {
        // ket noi db
        require_once('cn.php');
        $name = $_POST['name'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $style_id = $_POST['style_id'];
        // xu ly anh
        if ($_FILES['image']['name'] == '') {
            $image = $row_up['image'];
        } else {
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'uploads/'   . $image);
        }
        $sql = "UPDATE `list` SET image='$image', name='$name' , price='$price',status='$status',style_id='$style_id' WHERE `id` = $id";
        $query = mysqli_query($conn, $sql);
        $_SESSION['status'] = "Updeat product complete";
        $_SESSION['status_code'] = "success";
        header('location: list.php');
    }
    ?>
    <h1>Edit Product</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Product</label>
            <input type="text" class="form-control" name="name" value="<?= $row_up['name'] ?>">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Price</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="price" value="<?= $row_up['price'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description </label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="status" value="<?= $row_up['status'] ?>">
        </div>
        <label for="exampleInputPassword1" class="form-label">Style</label>
        <select class="form-select" aria-label="Default select example" name="style_id">
            <?php
            while ($row = mysqli_fetch_assoc($query_style)) :
            ?>
                <option value=" <?= $row['style_id'] ?>"> <?= $row['style_name'] ?></option>
            <?php
            endwhile;
            ?>
        </select>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload images</label>
            <input class="form-control" type="file" id="formFile" name="image" value="<?= $row_up['image']; ?> ">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Upload</button>
    </form>
    <?php
if (isset($_POST['submit'])) {
    // khai bao bien
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $style_id = $_POST['style_id'];
    // xu ly img
    if ($_FILES['image']['name'] == '') {
        $image = $_FILES['image']['name'];
    } else {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, 'uploads/'   . $image);
    }

    $sql = "UPDATE `list` SET image='$image', name='$name' , price='$price',status='$status',style_id='$style_id' WHERE `id`=$id";
    $query = mysqli_query($conn, $sql);
    header('location: list.php');
}
?>
</body>

</html>