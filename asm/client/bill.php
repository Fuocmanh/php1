<?php
session_start();
if (empty($_COOKIE['cart'])) {
    header('location: products.php');
}

if (empty($_SESSION['user'])) {
    header('location: login.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../assets/client/css/Cart.css">
<link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'include/header.php';

    ?>
       <div style="height: 107px; width:100%;"></div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-6">
                <h5 class="text-center">INVOICE DETAILS</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        require 'include/connect.php';


                        $cookie_data = $_COOKIE['cart'];
                        $cart_data = json_decode($cookie_data, true);

                        $tongtatca = 0;
                        // var_dump($cart_data);
                        foreach ($cart_data as $sp) :
                            $tongtien = $sp['price'] * $sp['soluong'];
                            $tongtatca += $tongtien;
                            $name = $sp['name'];
                        ?>
                            <tr>
                                <td scope="row"><?= $sp['pro_id'] ?></td>
                                <td><?= $sp['name'] ?></td>
                                <td>$ <?= number_format($sp['price']) ?></td>
                                <td width="200px">
                                    <?= $sp['soluong'] ?>

                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>

                        <tr>
                            <td colspan="3">Payment</td>
                            <td>
                                <b>$ <?= number_format($tongtatca) ?></b>
                            </td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-sm-6">
                <?php
                $username = $_SESSION['user'];
                $query = "SELECT * FROM users WHERE name='$username'";
                $query1 = "SELECT * FROM products WHERE name='$name'";
                $pro= $conn->query($query1)->fetch_assoc();
                // if ($conn->query($query)->num_rows = 0) {

                //     header('location: sanpham-ds.php');
                // }
                $khachhang = $conn->query($query)->fetch_assoc();
                ?>
                <h5 class="text-center">PAYMENT INFORMATION</h5>

                <form action="bill-action.php" method="post">
                    <input type="hidden" name="use_id" id="" value="<?= $khachhang['use_id'] ?>">
                    <input type="hidden" name="style_id" id="" value="<?= $pro['style_id'] ?>">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" name="username" id="" value="<?= $_SESSION['user'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sdt">Phone</label>
                        <input type="text" name="sdt" id="" value="<?= $khachhang['phone'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="diachi">Address</label>
                        <textarea name="address" id="" rows="5" class="form-control" required><?= $khachhang['address'] ?></textarea>
                    </div>
                    <input type="hidden" name="tongtien" id="" value="<?= $tongtatca ?>">

                    <button class="btn btn-outline-dark" name="thanhtoan">ORDER</button>
                </form>
            </div>
        </div>

    </div>
    <?php
    include 'include/footer.php';

    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>