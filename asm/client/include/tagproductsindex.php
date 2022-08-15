
<div class="container page-wrapper">
    <div class="page-inner">
        <div class="row">
            <div class="el-wrapper">
                <div class="box-up">
                    <img class="img" src="<?= $products[$i]['img'] ?>" alt="">
                    <div class="img-info">
                        <div class="info-inner">
                            <span class="p-name"><?= $products[$i]['name'] ?></span>

                        </div>
                        <div class="a-size">Sizes : <span class="size">S , M , L , XL</span></div>
                    </div>
                </div>

                <div class="box-down">
                    <div class="h-bg">
                        <div class="h-bg-inner"></div>
                    </div>
                    <form action="../client/details.php" method="post">
                        <a class="cart" href="#">
                            <input class="name" name="name" value="<?= $products[$i]['name'] ?>" style="display:none;"></input>
                            <input class="name" name="color" value="<?= $products[$i]['color'] ?>" style="display:none;"></input>
                            <input class="price" name="price" value="<?= $products[$i]['price'] ?>" style="display:none;"></input>
                            <input class="name" name="h2" value="<?= $products[$i]['h2'] ?>" style="display:none;"></input>
                            <input class="price" name="p" value="<?= $products[$i]['p'] ?>" style="display:none;"></input>
                            <input class="price" name="img" value="<?= $products[$i]['img'] ?>" style="display:none;"></input>
                            <input class="price" name="img1" value="<?= $products[$i]['img1'] ?>" style="display:none;"></input>
                            <input class="name" name="img2" value="<?= $products[$i]['img2'] ?>" style="display:none;"></input>
                            <input class="price" name="img3" value="<?= $products[$i]['img3'] ?>" style="display:none;"></input>
                            <input class="price" name="img4" value="<?= $products[$i]['img4'] ?>" style="display:none;"></input>
                            <?php $i = $i; ?>
                            <span class="price"><?= $products[$i]['price'] ?><sup>đ</sup></span>
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