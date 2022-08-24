<?php session_start();
if (empty($_SESSION['user'])) {
    header('location: LogIn.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Official - Cart</title>
    <link rel="stylesheet" href="../assets/client/css/Cart.css">
    <link rel="stylesheet" href="../assets/client/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <script type='text/javascript' src='../javascript/index.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div style="height: 107px"></div>
    <?php include "include/header.php" ?>
    <section class="boxall">
        <?php
        if (empty($_COOKIE['cart'])) :
        ?>
            <div class="row" style="margin-bottom:40px;">
                <div class="cart">
                    <h2>YOUR BAG IS EMPTY</h2>

                    <p>Once you add something to your bag - it will appear here. Ready to get started?</p>
                    <p class="buttom" id="nutt">
                        <a href="products.php">
                            GET STARTED
                        </a>
                    <p class="b">ACCEPTED PAYMENT METHODS</p>
                    <img src="../assets/client/images/pay.png">
                    </p>
                </div>
            </div>
        <?php
        else: ?>

            <div class="container">
                <br>
                <h2 style="text-align: center;">YOUR BAG</h2>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name produtc</th>
                            <th>Price</th>
                            <th style="width:max-content;">Amount</th>
                            <th>Total amount</th>
                            <th width="15%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'include/connect.php';

         
                        $cookie_data = $_COOKIE['cart'];
                        $cart_data = json_decode($cookie_data, true);
                        $tongtatca = 0;         
                        foreach ($cart_data as $sp) :
                            $tongtien = $sp['price'] * $sp['soluong'];
                            $tongtatca += $tongtien;
                        ?>
                            <tr>
                                <td scope="row"><?= $sp['pro_id'] ?></td>
                                <td><?= $sp['name'] ?></td>
                                <td>$<?= number_format($sp['price']) ?></td>
                                <td style="width:100px;">
                                    <!-- cập nhật số lượng sản phẩm  -->

                                    <form action="cart-action.php" method="post">
                                        <input type="number" name="soluong" value="<?= $sp['soluong'] ?>" onchange="this.form.submit()" class="form-control" control="none" min=1>
                                        <input type="hidden" name="pro_id" value="<?= $sp['pro_id'] ?>">
                                        <input type="hidden" name="ten" value="<?= $sp['name'] ?>">
                                        <input type="hidden" name="gia" value="<?= $sp['price'] ?>">
                                        <input type="hidden" name="hinhanh" value="<?= $sp['image'] ?>">
                                        <input type="hidden" name="sua">

                                    </form>

                                </td>
                                <td>$<?= number_format($tongtien) ?></td>
                                <td class="text-right">
                                    <!-- xóa sản phẩm trong giỏ hàng  -->
                                    <form action="cart-action.php" method="post">

                                        <input type="hidden" name="pro_id" id="" value="<?= $sp['pro_id'] ?>">
                                        <button class="btn btn-outline-danger" name="xoa">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        <?php
                        endforeach;
                        print_r(count($_COOKIE));
                        ?>

                        <tr>
                            <td colspan="4">Total money all</td>
                            <td>
                                <b>$<?= number_format($tongtatca) ?></b>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <a href="bill.php" class="btn btn-outline-dark">Payment</a>
                            </td>
                            <td class="text-right">
                                <!-- xóa giỏ hàng  -->
                                <form action="cart-action.php" method="post">
                                    <button class="btn btn-outline-danger" name="xoatatca">Delete all</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        <?php

        endif;
        ?>
    </section>
    <?php include 'include/footer.php';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
</body>

</html>