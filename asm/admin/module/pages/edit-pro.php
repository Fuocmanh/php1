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
    <h1>Edit Product</h1>
    <?php
    require('include/connect.php');
    $sql = "SELECT * FROM `check`";
    $edit= $conn->query($sql);
    // lay du lieu
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM `products` WHERE pro_id= $id";
    $editpros= $conn->query($sql_up);
    if ($editpros->num_rows > 0) :
        while ($editpro = $editpros->fetch_assoc()) :?>
    <form method="POST" enctype="multipart/form-data" action="../action/edit-action.php">
        <input type="hidden" name="id" value="<?=$editpro['pro_id']?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Product</label>
            <input type="text" class="form-control" name="name" value="<?= $editpro['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Price</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="price" value="<?= $editpro['price'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Status </label>
            <select name="active" id="" class="form-control">
            <option value="1" <?= ($editpro['active'] == 1 ? 'selected' : '') ?>>Denied</option>
            <option value="0" <?= ($editpro['active'] == 0 ? 'selected' : '') ?>>Approved</option>
            </select>
        </div>
        <label for="exampleInputPassword1" class="form-label">Style</label>
        <select class="form-select" aria-label="Default select example" name="style_id">
            <?php
             if ($edit->num_rows > 0) :
                while ($style = $edit->fetch_assoc()) :
            ?>
                <option class="background" 
                <?php
                if($editpro['style_id']==$style['style_id']):
                    echo'selected';
                endif;
                ?> value="<?= $style['style_id'] ?>"> <?=$style['Style'] ?></option>
            <?php
            endwhile;
        endif;
            ?>
        </select>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload images</label>
            <input class="form-control" type="file" id="formFile" name="image" >
            <input type="hidden" name="nouploads" value="<?=$editpro['image'] ?>" multiple >
            <img style="width: 30%; height: 30%; margin:0 auto;"src="<?= "uploads/".$editpro['image'] ?>" alt="">
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Submit</button>
        <?php
endwhile;
endif;
    ?>
    </form>
  
</body>

</html>