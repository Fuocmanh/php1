<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Official - Cart</title>
    <link rel="stylesheet" href="../assets/client/css/header.css">
    <link rel="stylesheet" href="../assets/client/css/Cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <script type='text/javascript' src='../javascript/index.js'></script>
</head>

<body>
    <div style="height: 107px"></div>
    <?php include "include/header.php" ?>
    <section class="boxall">
        <div class="row">
            <div class="cart">
                <h2>YOUR BAG IS EMPTY</h2>
                <div class="a" id="empty">
                    <p>Once you add something to your bag - it will appear here. Ready to get started?</p>
                    <p class="buttom" id="nutt">
                        <a href="../../index.php">
                            GET STARTED
                        </a>
                    <p class="b">ACCEPTED PAYMENT METHODS</p>
                    <img src="../assets/client/images/pay.png">
                    </p>
                </div>
                <div id="not-empty">
                    <p class="togntien" id="tongtien" style="display: none;">TỔNG SỐ TIỀN: <span></span><sup>đ</sup></p>
                    <div class="thanhtoan" id="thanhtoan">
                        <button onclick="thanhtoan(this)" style="display:none">Thanh toán ngay</button>
                    </div>
                    <div id="cart" class="items-pay">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php';
    ?>
</body>

</html>