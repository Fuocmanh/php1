<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <h1 style="text-align:center; padding-top:20px;"> All products</h1>
  <div class="column">

  
  <?php
  $name=['Sản phẩm 1','Sản phẩm 2','Sản phẩm 3'];
  $price=[120,150,200];
  for ($i = 0; $i <= 2; $i++) :
  ?>
   <div class="container page-wrapper">
  <div class="page-inner">
    <div class="row">
      <div class="el-wrapper">
        <div class="box-up">
          <img class="img" src="http://code.slicecrowd.com/labs/4/images/t-shirt.png" alt="">
          <div class="img-info">
            <div class="info-inner">
              <span class="p-name"><?= $name[$i]?></span>
              <span class="p-company">Yeezy</span>
            </div>
            <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span></div>
          </div>
        </div>

        <div class="box-down">
          <div class="h-bg">
            <div class="h-bg-inner"></div>
          </div>

          <a class="cart" href="#">
            <span class="price">$<?= $price[$i]?></span>
            <span class="add-to-cart">
              <span class="txt">Add in cart</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php endfor;
  ?>
</div>

</body>

</html>