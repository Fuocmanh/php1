<!-- Nguyễn Phước Mạnh - PC04148 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo'<h1>Bai 1</h1>';
    $a= (2==3);
    var_dump($a); 
    echo"<br>";
    $b= (2!=3);
    var_dump($b); 
    echo"<br>";
    $c= (2<>3);
    var_dump($c); 
    echo"<br>";
    $d= (2===3);
    var_dump($d);
    echo"<br>"; 
    $e= (2!==3);
    var_dump($e);
    echo"<br>"; 
    $f= (2>3);
    var_dump($f);
    echo"<br>"; 
    $g= (2<3);
    var_dump($g); 
    echo"<br>";
    $h= (2>=3);
    var_dump($h);
    echo"<br>"; 
    $i= (2<=3);
    var_dump($i); 
    ?>
    <br>
    <?php
     echo'<h1>Bai 2</h1>';
     $s = "Hello\nWorld";
     echo $s;
     $ss = "It's\n";
     echo '<br>';
     echo $ss;
     echo"\nHello <br>World";
     echo"\u{00C2A9}";
     echo"\u{C2A9}";
     ?>
     <br>
     <?php
        $a='hello';
        $$a='world';
        echo"$a ${$a}<br>";
     ?>
    <br>
  
    <?php
     echo'<h1>Bai 3</h1>';
        $a=4;
        $b=2;
        $c=$a+$b;
        echo"số a là: $a<br> số b là: $b<br>";
        echo "Tổng a và b là: $c";
        echo '<br>';
        echo ("Hiệu a và b là: ".$a-$b );
        echo '<br>';
        echo ("Tích a và b là: ".$a*$b);
        echo '<br>';
        echo ("Thương a và b là:". $a/$b);
    ?>
</body>
</html>