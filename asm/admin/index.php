<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("location: pages/login.php");
}
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="icon" href="https://pngimg.com/uploads/adidas/adidas_PNG17.png" type="image/x-icon">
  <link rel="stylesheet" href="../assets/admin/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../assets/admin/js/init-alpine.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
  <script src="../assets/admin/js/charts-lines.js" defer></script>
  <style>
    .whitespace-no-wrap {
      white-space: normal;
    }
  </style>
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- sidebar -->
    <?php
    include 'include/sidebar.php';
    ?>
    <div class="flex flex-col flex-1 w-full">
      <?php
      include 'include/header.php';
      ?>

      <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
          </h2>
          <!-- CTA -->
          <!-- Cards -->

          <?php
          include 'include/cards.php';
          ?>
          <?php
          include('include/table-bill.php');
          ?>
          <!-- Charts -->
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Charts
          </h2>
          <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Revenue
              </h4>
              <canvas id="pie"></canvas>
              <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                <!-- Chart legend -->
                <div class="flex items-center">
                  <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                  <span>Clothing</span>
                </div>
                <div class="flex items-center">
                  <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                  <span>Shoes</span>
                </div>
                <div class="flex items-center">
                  <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                  <span>Bags</span>
                </div>
              </div>
            </div>
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Traffic
              </h4>
              <canvas id="line"></canvas>
              <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                <!-- Chart legend -->
                <div class="flex items-center">
                  <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                  <span>Organic</span>
                </div>
                <div class="flex items-center">
                  <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                  <span>Paid</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        include('include/footer.php');
        ?>
      </main>
    </div>
  </div>
  <?php
  include 'include/connect.php';
  // clothing
  $c = 0;
  $count1 = "SELECT * FROM det_bill WHERE style_id=3";
  $q = $conn->query($count1);
  if ($q->num_rows > 0) :
    while ($qq = $q->fetch_assoc()) :
      $qq['style_id'];
      $c += 1;
    endwhile;
  endif;
  // bag
  $b = 0;
  $count2 = "SELECT * FROM det_bill WHERE style_id=2";
  $q1 = $conn->query($count2);
  if ($q1->num_rows > 0) :
    while ($qq = $q1->fetch_assoc()) :
      $qq['style_id'];
      $b += 1;
    endwhile;
  endif;
  // shoe
  $s = 0;
  $count3 = "SELECT * FROM det_bill WHERE style_id=1";
  $q2 = $conn->query($count3);
  if ($q2->num_rows > 0) :
    while ($qq = $q2->fetch_assoc()) :
      $qq['style_id'];
      $s += 1;
    endwhile;
  endif;
  ?>
  <script>
    var clothing = <?= $c ?>;
    var bag = <?= $b ?>;
    var shoe = <?= $s ?>;
    console.log(clothing);
    console.log(bag);
    console.log(shoe);
  </script>
  <script src="../assets/admin/js/charts-pie.js" defer></script>
</body>

</html>