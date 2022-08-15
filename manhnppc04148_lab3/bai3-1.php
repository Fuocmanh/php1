<?php
// echo"<h1>Bài 1</h1>";
//     $say= function($name){
//        echo "Hello ". $name;
//     };
//     $say("World");
//     echo"<br>";
//     function myCaller($myCallback){
//         echo $myCallback();
//     }
//     myCaller(function(){echo "Hello";});
//     echo"<br>";
//     $a=[1,2,3,4,5];
//     $b= array_map(function($n){
//         return ($n*$n*$n);
//     },$a);
//     print_r($b);
    echo"<h1>Bài 2</h1>";
    function countToFive(){
        yield 1;
        yield from [2,3,4];
        yield 5;
    }
    foreach(countToFive()as $v)
    echo $v;
    echo"<h1>Bài 3</h1>";
    $str='082307';

    echo substr(chunk_split($str,2,":"),0,8);
?>