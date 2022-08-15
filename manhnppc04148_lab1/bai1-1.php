<!-- Nguyễn Phước Mạnh - PC04148 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .php {
            width: max-content;
            padding: 50px;
            background-image: linear-gradient(130deg, red, blue);
            border-radius: 10px;
            margin: 0 auto;
        }

        .php h1 {
            width: max-content;
            background-image: linear-gradient(90deg, violet, orange);
            background-size: 100% 2px;
            background-repeat: no-repeat;
            background-position: left bottom;
            font-weight: 900;
            margin: 0 auto 20px auto;
        }

        .php p {
            width: max-content;
            background-color: rgba(0,0,0,0.6);
            margin: 10px;
            color:rgba(255,255,255,0.8);
            padding:1.5px 5px;
        }
    </style>
</head>

<body>
    <div class="php">

        <?php
        // lab1 bai 1
        echo "<h1>Xuất chuỗi</h1>";
        echo "hello <br>";
        echo ("hello <br>");
        echo "Hello", "World";

        // bai2
        echo "<h1>Xuất biến</h1>";
        $str = "hello string";
        $x = 200;
        $y = 44.6;
        echo "<p>string is: $str</p>";
        echo "<p>integer is: $x</p>";
        echo "<p>float is: $y</p>";

        // bai3
        echo "<h1>Xuất chuỗi và biến</h1>";
        $color = " red";
        echo "My car is" . $color . "<br>";
        echo "My house is" . $color . "<br>";
        echo "My boat is" . $color . "<br>"
        ?>
    </div>
</body>

</html>