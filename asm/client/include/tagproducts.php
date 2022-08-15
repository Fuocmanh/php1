<?php
$limit = 6;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $limit;


// $query = "SELECT * FROM users";
$sql = "SELECT * FROM `products` INNER JOIN `check` ON products.style_id = check.style_id ORDER BY `pro_id` ASC LIMIT $start_from, $limit";


$query_pro = "SELECT COUNT(pro_id) AS member FROM `products`";

$count_pro = $conn->query($query_pro);
$count_pro = $count_pro->fetch_assoc();
$num_pro = $count_pro['member'];
?>
<div class="container page-wrapper">
    <div class="page-inner ">
        <div class="column">
            <?php
            $pros = $conn->query($sql);
            if ($pros->num_rows > 0) :
                while ($pro = $pros->fetch_assoc()) :
            ?>
                    <div class="row">
                        <div class="el-wrapper">
                            <div class="box-up">
                                <img class="img" src="<?= "../admin/uploads/" . $pro['image'] ?>" alt="">
                                <div class="img-info">
                                    <div class="info-inner">
                                        <span class="p-name"><?= $pro['name'] ?></span>
                                    </div>
                                    <div class="a-size">Sizes : <span class="size">S , M , L , XL</span></div>
                                </div>
                            </div>

                            <div class="box-down">
                                <div class="h-bg">
                                    <div class="h-bg-inner"></div>
                                </div>    
                                    <input type="hidden" name="id" value="<?=$pro['pro_id']?>">
                                    <a class="cart" href="details.php?id=<?=$pro['pro_id']?>">
                                        <?php $i = $i; ?>
                                        <span class="price">$<?= $pro['price'] ?></span>
                                        <span class="add-to-cart">
                                            <button class="txt">Product Detail</button>
                                        </span>
                                    </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>

    </div>
</div>

                <ul style="width:100%; display:flex;height:35px;   align-items: center;justify-content: center;">
                    <?php
                    for ($i = 1; $i <= ceil((int)$num_pro / $limit); $i++) :
                    ?>
                        <li style="width:max-content; height:max-content;" ><a style="padding:5px 10px;margin:5px 10px; background-color:blanchedalmond"  href="?page=<?= $i ?>"><?= $i ?></a></li>
                    <?php
                    endfor;
                    ?>
                </ul>