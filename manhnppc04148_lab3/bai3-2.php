<?php
echo"<h1>Bài 4</h1>";
   $str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the 
   world so high,\nLike a diamond in the sky.";
 
   print_r(explode("\n",$str));
   print "<br>";
   echo"<h2>settype</h2>";
$a = "89"; // string 
settype($a, "integer"); 
var_dump($a);
echo"<br>";
$b = 23; 
settype($b, "string");
var_dump($b);
echo"<br>";
$c = true;
settype($c, "integer");
var_dump($c);
echo"<h2>gettype</h2>";
$a = 3;
echo "$a là kiểu " . gettype($a) . "<br>";
echo"<h2>str_strarts-with</h2>";
$string = 'The lazy fox jumped over the fence';
echo $string. "<br>";
if (str_starts_with($string, 'The')) {
    echo "The string starts with 'The'<br>";
}

if (str_starts_with($string, 'the')) {
    echo 'The string starts with "the"';
} else {
    echo '"the" was not found because the case does not match';
}
echo"<br>";
$s = "Toidicode.Com";
echo $s."<br>";
if (str_ends_with($string, 'com')) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}

//Output: No
echo"<h2>strcontains</h2>";
$st = "nguyen phuoc manh";
$search="nguyen phuoc manh";
echo $st."<br>";
if (str_contains($st,$search )) {
    echo "$search có trong $st";
} else {
    echo "'$search' was not found in '$st'" . PHP_EOL;
}

//Output: 'com' was not found in 'Toidicode.Com'
?>