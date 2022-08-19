
<?php session_start();
require('include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Official - Products</title>
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/client/css/products.css">
    <link rel="stylesheet" href="../assets/client/css/header.css">
</head>

<body>

    <?php include "include/header.php" ?>
    <section id="box"></section>
    <section class="sanpham" id="sanpham">
        <h1 class="heading"> Products </h1>
      <?php 
      require('include/tagproducts.php');
?>

     
    </section>
    <?php
    
    
    include 'include/footer.php';
         
    ?>
    </section>
</body>

</html>