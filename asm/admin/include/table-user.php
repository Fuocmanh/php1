<?php
require('connect.php');
$limit = 3;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $limit;


// $query = "SELECT * FROM users";
if(isset($_POST['search'])):
    $key = $_POST['key'];
    $sql = "SELECT * FROM `users` WHERE CONCAT(use_id,name,email,phone,address) LIKE '%$key%' ORDER BY use_id LIMIT $start_from, $limit";
    $query_count = "SELECT COUNT(use_id) AS member FROM `users` WHERE CONCAT(use_id,name,email,phone,address) LIKE '%$key%'";
    else:
        $sql = "SELECT * FROM `users` ORDER BY use_id LIMIT $start_from, $limit";
        $query_count = "SELECT COUNT(use_id) AS member FROM `users`";
    endif;
$users = $conn->query($sql);
$count_user = $conn->query($query_count);
$count_user = $count_user->fetch_assoc();
$num_user = $count_user['member'];
?>
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Table user
</h4>
<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <!-- <th class="px-4 py-3">ID</th> -->
                    <th class="px-4 py-3">CLIENT</th>
                    <!-- <th class="px-4 py-3">NAME</th> -->
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Phone</th>
                    <th class="px-4 py-3">Address</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <?php
                $users = $conn->query($sql);
                if ($users->num_rows > 0) :
                    while ($user = $users->fetch_assoc()) :
                ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://th.bing.com/th/id/OIP.AMVbQ_oYWXae6LBo5gbmBgHaHa?pid=ImgDet&rs=1" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold"><?= $user['name'] ?></p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            10x Developer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    <?= $user['active'] == 0 ? "Approved" : "Denied" ?>
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?= $user['email'] ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?= $user['phone'] ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?= $user['address'] ?>
                            </td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>
            </tbody>
        </table>
    </div>
    <ul class=" pagination grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">                
                    <?php
                    for ($i = 1; $i <= ceil((int)$num_user / $limit); $i++) :
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
</div>