<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/client/img/the-sandbox-sand-logo.png" type="images/x-icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add product</title>
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

        .btn {
            margin: 10px 0px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.2);
        }

        label {
            font-weight: bold;
        }

        .form-control,
        .form-select,
        .background {
            background-color: rgba(0, 0, 0, 0.3) !important;
            color: white !important;
            ;
        }
    </style>
</head>

<body>
    <?php
    require('cn.php');
    $sql = "SELECT * FROM `style`";
    $query_style = mysqli_query($conn, $sql);
    ?>
    <h1>Create</h1>
    <form method="POST" enctype="multipart/form-data" action="#">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Product</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Price</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description </label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="status">
        </div>
        <label for="exampleInputPassword1" class="form-label">Style</label>
        <select class="form-select" aria-label="Default select example" name="style_id">
            <?php
            while ($row = mysqli_fetch_assoc($query_style)) :
            ?>
                <option class="background" value=" <?= $row['style_id'] ?>"> <?= $row['style_name'] ?></option>
            <?php
            endwhile;
            ?>
        </select>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload images</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Upload</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        // xu ly img
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $style_id = $_POST['style_id'];
        //them
        $sql = "INSERT INTO `list` (image,name,price,status,style_id) VALUES('$image','$name','$price','$status','$style_id')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp, 'uploads/'   . $image);
        header('location: list.php');
    }
    ?>
</body>

</html>