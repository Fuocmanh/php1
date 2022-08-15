<!-- Nguyen Phuoc Manh - pc04148 -->
<?php
echo '<h1>bai 1</h1>';
$age = 50;
if ($age < 30) :
    echo "Your age is less than 30!";
elseif ($age > 30 && $age < 40) :
    echo "Your age is between 30 and 40!";
elseif ($age > 40 && $age < 50) :
    echo "Your age is between 40 and 50!";
else :
    echo "Your age is greater than 50!";
endif;

echo '<h1>bai 2</h1>';

$max = 0;
echo $i = 0;
echo ",";
echo $j = 1;
echo ",";

$result = 0;
while ($max < 10) {
    $result = $i + $j;
    $i = $j;
    $j = $result;

    $max++;
    echo $result;
    if ($max < 10 && $max >= 0) :
        echo ",";
    endif;
    if ($max >= 10) :
        echo ".";
    endif;
}
echo '<h1>bai 3</h1>';
    $fruits=['apple','banana','organge','grapes'];
    foreach ($fruits as $fruit){
        echo $fruit;
        echo"<br>";
    }
    echo'<br>';
    $employee = ['name'=> 'John Smith' , 'age'=>30,'profession'];
    foreach ($employee as $key => $value){
        echo sprintf("%s: %s", $key,$value);
        echo"<br>";
    }
    echo '<h1>bai 4</h1>';
    echo'Sismple Break';
    for($i =1; $i <=2;$i++){
        echo"<br>".'$i =' .$i." ";
        for($j =1; $j <=5;$j++){
            if($j == 2){
                break;
            }
            echo '$j = '.$j.' ';
        }
    }
    echo"<br>";
    echo'Muti-level Break';
    echo"<br>";
    for($i=1;$i<=2;$i++){
        echo"\n".'$i = ' .$i.' ';
        for($j=1;$j<=5;$j++){
            if($j==2){
                break 2;
            }
            echo '$j = ' .$j. ' ';
        }
    }
?>