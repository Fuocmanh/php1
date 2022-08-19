<?php
session_start();

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
    <meta ten="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <div class="container-fluid" id="history">
        <div class="history">
            <h1 class="text-center">ORDER HISTORY</h1>
            <table class="table table-striped">
                <tr>

                    <th>
                        ID
                    </th>
                    <th>
                        NAME PRODUCT
                    </th>
                    <th>
                        AMOUNT
                    </th>
                    <th>
                        PRICE
                    </th>
                    <th>
                    TOTAL AMOUNT
                    </th>
                    <th>
                    ORDER TIME
                    </th>
                    <th>ORDER STATUS</th>
                </tr>

                <?php
                if (isset($_SESSION['user'])) :
                    require 'include/connect.php';
                    $id_kh = $_SESSION['user_id'];
                    if ($hoadon = $conn->query("SELECT * FROM bill WHERE use_id=$id_kh ")) :
                        while ($hd = $hoadon->fetch_assoc()) :
                            $id_hd = $hd['bill_id'];
                            $tongtien = $hd['sum'];
                            $tgdat = $hd['time'];

                            $chitiethoadon = $conn->query("SELECT * FROM det_bill WHERE bill_id = $id_hd ");

                ?>


                            <tr>
                                <td><?= $id_hd ?></td>
                                <td>
                                    <?php
                                    foreach ($chitiethoadon as $cthd) {
                                        $id_sp = $cthd['pro_id'];
                                        $sanpham = $conn->query("SELECT * FROM products WHERE pro_id = $id_sp ");
                                        $sp = $sanpham->fetch_assoc();
                                        $ten_sanpham = $sp['name'];
                                        echo $ten_sanpham . '<br>';
                                    }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    foreach ($chitiethoadon as $cthd) {
                                        $soluong = $cthd['amount'];
                                        echo $soluong . '<br>';
                                    }
                                    ?>
                                </td>
                                <td>$ 
                                    <?php
                                    foreach ($chitiethoadon as $cthd) {
                                        $gia = $cthd['price'];
                                        echo $gia . '<br>';
                                    }
                                    ?>
                                </td>
                                <td>$ <?= $tongtien ?></td>

                                <td><?= $tgdat ?></td>
                               
                                <td>
                                  <form action="list-action.php" method="POST">

                                    <input class="btn btn-outline-dark" type="hidden" name="id" value="<?=$hd['bill_id']?>">
                                    <?php 
                                    $id=$hd['bill_id'];
                                    $sql = "SELECT * FROM bill WHERE `bill_id`=$id";
                                   if($conn->query($sql)->fetch_assoc()['condition']==0):
                                    $received='confirm received'
                                     ?> 
                                     <input class="btn btn-outline-danger" type="submit" name="condition" value="<?=$received?>" >
                                     <?php
                                    
                                   else:  $received='received'?>
                                   <input class="btn btn-success" type="submit" name="condition" value="<?=$received?>" disabled>
                                   <?php
                                    endif;
                                    ?>
                                   
                                  </form>  
                                </td>

                            </tr>
                <?php
                        endwhile;
                    endif;
                endif;
                $conn->close();
                ?>

            </table>
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