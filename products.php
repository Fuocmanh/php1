<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Official - Products</title>
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="asm/assets/client/css/products.css">>
</head>

<body>
    <?php
    include "asm/client/include/header.php";
    require 'connect.php';
    $q = "SELECT * FROM `products`";
    $products = $conn->query($q);
    $qq = "SELECT * FROM `products`INNER JOIN `img_products`
    ON `products`.name = `img_products`.name;";
$c = 0;
$qq1=[];
    ?>
    <section id="box"></section>
    <section class="sanpham" id="sanpham">
        <h1 class="heading"> Sản Phẩm Mới </h1>
        <!--form lọc sản phẩm -->
        <form action="" method="get" style="column-count:5;">
            <?php
            $d = 'checked';
            
            $q = "SELECT * FROM `check`";
            $check = $conn->query($q);
            if ($check->num_rows > 0) :
                while ($checkk = $check->fetch_assoc()) :
            ?>
                    <div style="width:max-content;margin:0 auto; display:flex; line-height:25px; ">
                        <?php
                        if ($checkk['check_id'] <= 4) :
                            echo '<label class="toggler-wrapper style-20">';
                            echo '<input type="checkbox" name="id[]" value="' . $checkk['style'] . '"';
                            if ($checkk['check_id'] == 1) :
                                echo "$d>";
                            // echo ">";
                            else :
                                echo ">";
                            endif;
                        else :
                            echo '';
                            echo ' <input class="sub" type="submit" value="Submit" name="submit">';
                        endif;
                        ?>

                        <div class="toggler-slider">
                            <div class="toggler-knob"></div>
                        </div>
                        </label>
                        <div class="badge" style="width:max-content;padding-left:5px; font-size:20px; "><?= $checkk['style'] ?></div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>
        </form>
        <!-- action lọc -->
        <?php
        if (isset($_GET['submit']) == true) :
            foreach ($_GET['id'] as $value) {
                //   xoá all products nếu có chọn lọc khác
                if ($value == 'All products' && count($_GET['id']) >= 2) :
                    array_shift($_GET['id']);
                endif;
            }
            if ($value != 'All products') :
                echo '<div class="chose" <p>Selected: ';
                foreach ($_GET['id'] as $value) {
                    $c++;
                    if (!empty($_GET['id'])) :
                        echo $value . ' ';
                    endif;
                    $qq = "SELECT * FROM `products`INNER JOIN `img_products`
                    ON `products`.name = `img_products`.name WHERE `style`='$value';"; 
                }                    
                echo '</p></div>';
                goto a;
                elseif($value == 'All products'):
                    goto a;
                elseif ($check->num_rows > 0) :
                        while ($checkk = $check->fetch_assoc()) :
                            if($value != $checkk['style']):
                                $c++;
                            endif;
                        endwhile;
                        if($c==count($productss['id'])){
                            echo"ko có";
                        }
            endif;
        else:
            a:
            $productss = $conn->query($qq);
        ?>
            <div class="box-container">
                <div class="column">
                    <?php                   
                    if ($productss->num_rows > 0) :
                        while ($productt = $productss->fetch_assoc()) :
                    ?>
                            <!-- đầu -->
                            <div class="container page-wrapper">
                                <div class="page-inner">
                                    <div class="row">
                                        <div class="el-wrapper">
                                            <div class="box-up">
                                                <img class="img" src="<?= $productt['img'] ?>" alt="">
                                                <div class="img-info">
                                                    <div class="info-inner">
                                                        <span class="p-name"><?= $productt['name'] ?></span>
                                                    </div>
                                                    <div class="a-size">Sizes : <span class="size">S , M , L , XL</span></div>
                                                </div>
                                            </div>
                                            <div class="box-down">
                                                <div class="h-bg">
                                                    <div class="h-bg-inner"></div>
                                                </div>
                                                <form action="details.php" method="get">
                                                    <a class="cart" href="#"><span class="price"><?= $productt['price'] ?><sup>đ</sup></span>
                                                        <span class="add-to-cart">
                                                            <button class="txt">Product Detail</button>
                                                        </span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>
                <?php
            endif;
                ?>
                </div>

            </div>

    </section>
    <?php
    // include 'asm/client/include/footer.php';
    ?>
    </section>
</body>

</html>