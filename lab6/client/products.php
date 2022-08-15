<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../ManhNPPC04148_Assignment_GD1/assets/client/css/products.css">
</head>
<body>
    <?php
    include '../../ManhNPPC04148_Assignment_GD1/client/include/varproducts.php';
    $q= "select * from products"
    ?>
     <div class="box-container">
                <div class="column">
                    <?php
                    a: ?>
                <?php

                if (isset($products)) :
                    for ($i = 0; $i <  count($products); $i++) :
                        include '../../ManhNPPC04148_Assignment_GD1/client/include/tagproducts.php';
                    endfor;
                endif;
                ?>
                </div>

            </div>
</body>
</html>