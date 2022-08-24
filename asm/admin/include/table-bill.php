<?php
require('connect.php');
$limit = 3;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $limit;
$sql = "SELECT * FROM `bill` ORDER BY bill_id LIMIT $start_from, $limit";
$query_pro = "SELECT COUNT(bill_id) AS member FROM `bill`";
$count_pro = $conn->query($query_pro);
$count_pro = $count_pro->fetch_assoc();
$num_pro = $count_pro['member'];
?>
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="text-align: center;">ORDER HISTORY</h2>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">NAME PRODUCT</th>
                    <th class="px-4 py-3">AMOUNT</th>
                    <th class="px-4 py-3">PRICE</th>
                    <th class="px-4 py-3">TOTAL AMOUNT</th>
                    <th class="px-4 py-3">ORDER TIME</th>
                    <th class="px-4 py-3">CONDITITION</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <?php

                    require 'include/connect.php';                   
                        $sql="SELECT * FROM bill where `condition`=0 ORDER BY bill_id LIMIT $start_from, $limit ";
                    if ($hoadon = $conn->query($sql)) :
                        while ($hd = $hoadon->fetch_assoc()) :
                            $id_hd = $hd['bill_id'];
                            $tongtien = $hd['sum'];
                            $tgdat = $hd['time'];
                            $condition =$hd['condition'];
                            $chitiethoadons="SELECT * FROM det_bill WHERE bill_id = $id_hd";
                            $chitiethoadon = $conn->query($chitiethoadons);
                ?>
                            <tr class="text-gray-700 dark:text-gray-400" style="border-radius:0px !important;">
                                <td class="px-4 py-3"><?= $id_hd ?></td>
                                <td class="px-4 py-3">
                                    <?php
                                    foreach ($chitiethoadon as $cthd) {
                                        $id_sp = $cthd['pro_id'];
                                        $samphams="SELECT * FROM products WHERE pro_id = $id_sp";
                                        $sanpham = $conn->query($samphams);
                                        $sp = $sanpham->fetch_assoc();
                                        $ten_sanpham = $sp['name'];
                                        echo $ten_sanpham . '<br>';
                                    }

                                    ?>

                                </td>
                                <td class="px-4 py-3">
                                    <?php
                                    foreach ($chitiethoadon as $cthd) {
                                        $soluong = $cthd['amount'];
                                        echo $soluong . '<br>';
                                    }
                                    ?>
                                </td>
                                <td class="px-4 py-3"><?php
                                                        foreach ($chitiethoadon as $cthd) {
                                                            $gia = $cthd['price'];
                                                            echo '$'.$gia . '<br>';
                                                        }
                                                        ?>
                                </td>
                                <td class="px-4 py-3">$<?= $tongtien ?></td>

                                <td class="px-4 py-3"><?= $tgdat ?></td>
                                <td class="px-4 py-3 text-xs">
                                    <?php
                                            if ($hd['condition'] == 1) : echo '
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Approved</span>';
                                            else :
                                                echo '<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">Pending</span>';
                                            endif;
                                    ?>
                                </td>

                            </tr>
                <?php
                        endwhile;
                    endif;
              
                ?>
            </tbody>

        </table>
    </div>
</div>
<ul class=" pagination grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
    <span class="col-span-2"></span>
    <!-- Pagination -->
    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
                <?php
                $query_pro = "SELECT * FROM `bill` where `condition`=0";
                $coun=0;
                if ($count = $conn->query($query_pro)) :
                    while ($co = $count->fetch_assoc()) :
                $co['condition'];
                $coun++;
                    endwhile;
                endif;
                  $conn->close();
                for ($i = 1; $i <= ceil((int)$coun/ $limit); $i++) :
                ?>
                    <!-- <li><button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button></li> -->
                    <li><a class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple" href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php
                endfor;
                ?>
            </ul>
        </nav>
    </span>
</ul>