<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>

<body>
  <div class="all">
    <div class="title">
      <div class="title-1">
        <h2>Add Product</h2>
      </div>
    </div>
    <div class="form-all">
      <div class="">
        <form action="#" method="post" enctype="multipart/form-data" class="tm-edit-product-form">
          <div class="form-group">
            <label for="name">Product Name
            </label>
            <input id="name" name="name" type="text" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" required="">
          </div>
          <div class="form-group">
            <label for="price">Price
            </label>
            <input id="name" name="price" type="number" class="form-control" required="">
          </div>
          <div style="margin-bottom: 20px;">
            <label for="category"> Category</label>
            <select class="form-select" aria-label="Default select example">
              <option selected="">Select category</option>
              <option value="1">New Arrival</option>
              <option value="2">Most Popular</option>
              <option value="3">Trending</option>
            </select>
          </div>

      </div>
      <div style="margin-bottom: 20px;">
        <div class="">
          <input id="fileInput" type="file" name="myFile" class="btn btn-primary">
        </div>
      </div>
      <div>
        <input type="submit" name="upload" value="Add Product Now" class="btn btn-primary btn-block">
      </div>
      </form>
      <?php
      if (isset($_POST['upload'])) {
        $file = $_FILES['myFile']['tmp_name'];
        $path = "uploads/" . $_FILES['myFile']['name'];

        if (move_uploaded_file($file, $path)) {
          echo '<p class="">Tải tập tin thành công</p>';
        } else {
          echo '<p class="">Tải tập tin thất bại</p>';
        }
      }
      ?>

    </div>
  </div>
</body>

</html>