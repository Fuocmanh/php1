<?php

// thêm vào giỏ hàng 
$c=0;
if (isset($_POST['addcart'])) {
    require 'include/connect.php';

    $id_sp = isset($_POST['id_sp']) ? $_POST['id_sp'] : '';
    $sanpham = $conn->query("SELECT * FROM `products` WHERE pro_id = $id_sp ");
    $sp = $sanpham->fetch_assoc();
    $ten = $sp['name'];
    $hinhanh = $sp['image'];
    $gia = $sp['price'];

    if (isset($_COOKIE['cart'])) {
        // nếu đã tồn tại cookie cart thì lấy giá trị của cookie cart 
        // nếu đã tồn tại cookie cart thì lấy giá trị của cookie cart 
        $cookie_data = $_COOKIE['cart'];

        // chuyển string thành array 
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }

    $id_sp_ds = array_column($cart_data, 'pro_id');

    // kiểm tra id_sp có tồn tại trong cookie cart chưa 
    if (in_array($id_sp, $id_sp_ds)) {
        foreach ($cart_data as $key => $value) {
            // nếu có thì tăng có lượng sản phẩm 

            if ($cart_data[$key]['pro_id'] == $id_sp) {
                $cart_data[$key]['soluong'] = $cart_data[$key]['soluong'] + 1;
            }
        }
    } else {
        // nếu chưa có thì thêm vào cookie cart 
        $product_array = array(
            // 'user'=>$_SESSION['user'],
            'pro_id' => $id_sp,
            'name' => $ten,
            'price' => $gia,
            'soluong' => 1,
            'image' => $hinhanh
        );
        $cart_data[] = $product_array;
    }

    // chuyển array thành string để lưu vào cookie cart 
    $product_data = json_encode($cart_data);

    // lưu cookie 
    setcookie('cart', $product_data, time() +  3600 * 24 * 30 * 12);
    // echo $_COOKIE['cart'];
    header('location: cart.php');
    // echo $_COOKIE['cart'];
}

// sửa số lượng sản phẩm trong giỏ hàng 
if (isset($_POST['sua'])) {
    $id_sp = $_POST['pro_id'];
    $soluong = $_POST['soluong'];
    $ten = $_POST['name'];
    $hinhanh = $_POST['image'];
    $gia = $_POST['price'];
    if (isset($_COOKIE['cart'])) {
        $cookie_data = $_COOKIE['cart'];
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }

    $id_sp_ds = array_column($cart_data, 'pro_id');

    if (in_array($id_sp, $id_sp_ds)) {
        foreach ($cart_data as $key => $value) {
            if ($cart_data[$key]['pro_id'] == $id_sp) {
                $cart_data[$key]['soluong'] =  $soluong;
            }
        }
    } else {
        $product_array = array(
            // 'user'=>$_SESSION['user'],
            'pro_id' => $id_sp,
            'name' => $ten,
            'price' => $gia,
            'soluong' => 1,
            'image' => $hinhanh
        );
        $cart_data[] = $product_array;
    }

    $product_data = json_encode($cart_data);
    setcookie('cart', $product_data, time() + 3600 * 24 * 30 * 12);

    header('location: cart.php');
}

// xóa sản phẩm trong giỏ hàng 
if (isset($_POST['xoa'])) {
    if (isset($_COOKIE['cart'])) {
        $cookie_data = $_COOKIE['cart'];
        $cart_data = json_decode($cookie_data, true);
        foreach ($cart_data as $key => $value) {
            $c++;
            if ($cart_data[$key]['pro_id'] == $_POST['pro_id']) {
                unset($cart_data[$key]);
                $product_data = json_encode($cart_data);
                setcookie("cart", $product_data, time() +  3600 * 24 * 30 * 12);
            }
        }
        if($c<=1){
            setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
        }
    }
    header('location: cart.php');
}

// xóa cookie giỏ hàng
if (isset($_POST['xoatatca'])) {
    if (isset($_COOKIE['cart'])) {
        setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
    }
    header('location: cart.php');
}
