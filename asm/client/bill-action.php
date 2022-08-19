<?php

session_start();

if (isset($_POST['thanhtoan'])) {
    require 'include/connect.php';
    if (isset($_SESSION['user'])) {

        $id_kh = $_POST['use_id'];
        $tongtien = $_POST['tongtien'];
        $username = $_SESSION['user'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['address'];
        $style_id = $_POST['style_id'];
        if (isset($_COOKIE['cart'])) {
            $cookie_data = $_COOKIE['cart'];

            $cart_data = json_decode($cookie_data, true);

            $insert_hoadon = "INSERT INTO bill (phone, address, sum, use_id)
                VALUES ('$sdt', '$diachi', '$tongtien', '$id_kh')";

            if ($conn->query($insert_hoadon)) {
                $id_hd = $conn->insert_id;
                foreach ($cart_data as $key => $value) {
                    $id_sp = $value['pro_id'];
                    $soluong = $value['soluong'];
                    $gia = $value['price'];
                    $insert_chitiethoadon = "INSERT INTO det_bill (bill_id, pro_id, amount, price,style_id)
                                                        VALUES ('$id_hd', '$id_sp', '$soluong', '$gia','$style_id' )";
                    if ($conn->query($insert_chitiethoadon)) {
                        setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
                        if (isset($_COOKIE['cart'])) {
                            setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
                        }
                        // header('location: sanpham-ds.php');

                    }
                }
            }
        }
    }
}
header('location: list-bill.php');
