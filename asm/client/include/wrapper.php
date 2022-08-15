<?php include "client/include/varproducts.php" ?>
<?php
for ($i = 0; $i < count($products); $i++) :
?>
    <div id="item" class="item">
        <div class="imgtym">
            <img class="tym" src="./assets/images/logoTym1.png">
            <img class="hang" src="<?= $products[$i]['img'] ?>">
            <p id="gia"><?= $products[$i]['price'] ?><sup>đ</sup></p>
        </div>
        <p class="name"><?= $products[$i]['name'] ?></p>
        <p class="ori">Originals</p>
        <p class="new">new</p>
        <div>
            <form action="details.php" method="get">
                <div style="width:0px!important; height:0px !important;">
                    <input name="name" value="<?= $products[$i]['name'] ?>" style="display:none;"></input>
                    <input name="color" value="<?= $products[$i]['color'] ?>" style="display:none;"></input>
                    <input class="price" name="price" value="<?= $products[$i]['price'] ?>" style="display:none;"></input>
                    <input name="h2" value="<?= $products[$i]['h2'] ?>" style="display:none;"></input>
                    <input name="p" value="<?= $products[$i]['p'] ?>" style="display:none;"></input>
                    <input name="img" value="<?= $products[$i]['img'] ?>" style="display:none;"></input>
                    <input name="img1" value="<?= $products[$i]['img1'] ?>" style="display:none;"></input>
                    <input name="img2" value="<?= $products[$i]['img2'] ?>" style="display:none;"></input>
                    <input name="img3" value="<?= $products[$i]['img3'] ?>" style="display:none;"></input>
                    <input name="img4" value="<?= $products[$i]['img4'] ?>" style="display:none;"></input>
                    <?php $i = $i; ?>
                </div>
                <input type="submit" name="submit" value="Product Detail" class="txt"></input>
            </form>
        </div>
    </div>
    </div>
    </div>
<?php endfor; ?>