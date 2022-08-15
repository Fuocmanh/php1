<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
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
    <h1>Edit Product</h1>
    <?php
    require('../../include/connect.php');
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM `check` WHERE style_id= $id";
    // lay du lieu
    $editstys= $conn->query($sql_up);
    if ($editstys->num_rows > 0) :
        while ($editsty = $editstys->fetch_assoc()) :?>
    <form method="POST" enctype="multipart/form-data" action="../action/edit-style-action.php">
        <input type="hidden" name="id" value="<?=$editsty['style_id']?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Style</label>
            <input type="text" class="form-control" name="name" value="<?= $editsty['Style'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Status </label>
            <select name="action" id="" class="form-control">
            <option value="1"  <?= ($editsty['action'] == 1 ? 'selected' : '') ?>>Denied</option>
            <option value="0" <?= ($editsty['action'] == 0 ? 'selected' : '') ?>>Approved</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="editstyle">Submit</button>
        <?php
endwhile;
endif;
    ?>
    </form>
  
</body>

</html>