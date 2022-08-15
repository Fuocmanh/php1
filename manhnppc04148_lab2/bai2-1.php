<!-- Nguyen Phuoc Manh - pc04148 -->
<?php
echo'<h1>bài 1</h1>';
    $color = ['red','green','white'];
    // var_dump($color);
    print_r($color);
    $age=[];
    $age[0]=10;
    $age[1]=20;
    $age[3]=30;
    print_r($age);

    echo'<h1>bài 2</h1>';
    $salaries=['mohammad'=>2000,'quadir'=>1000,'zara'=>500];
    echo"Salary of mohammad is ". $salaries['mohammad'].'<br>';
    echo"Salary of mohammad is ". $salaries['quadir'].'<br>';
    echo"Salary of mohammad is ". $salaries['zara'].'<br>';
    echo'<h1>bài 3</h1>';
    define('LOCATOR', "/locator");
    define('CLASSES',LOCATOR."/code/classes");
    define('FUNCTIONS',LOCATOR."/code/functions");
    define('USERDIR',LOCATOR."/user");
    echo LOCATOR.'<br>';
    echo CLASSES.'<br>';
    echo FUNCTIONS.'<br>';
    echo USERDIR.'<br>';
?>