<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>

</head>

<body>
    <?php
    require 'connect.php';

    $query = "SELECT * FROM products";
    $products = $conn->query($query);
    if ($products->num_rows > 0) :
        
    ?>
    <section style="background-color: #eee;">
    <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
        <?php
        while ($product = $products->fetch_assoc()) :
        ?>
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card text-black">
          <img
            src="<?= $product['images']?>"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?= $product['name']?></h5>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
              <span>Total</span><span><?= $product['price']?></span>
            </div>
          </div>
        </div>
      </div>
    <?php
        endwhile;
    endif;
    ?>
    </div>
  </div>
</section>
</section>
</body>

</html>