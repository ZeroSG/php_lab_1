<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operators</title>
</head>
<body>
<h3>PHP Arithmetic Operators</h3>
<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  

<br>
-------------------------------------------
<br>
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
$y = 6;

echo $x / $y;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
$y = 6;

echo $x % $y;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?>  
<br>
-------------------------------------------
<h3>PHP Assignment Operators</h3>
<?php
$x = 10;  
echo $x;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 20;  
$x += 100;

echo $x;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 50;
$x -= 30;

echo $x;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  

<br>
-------------------------------------------
<br>
<?php
$x = 10;
$x /= 5;

echo $x;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 15;
$x %= 4;

echo $x;
?> 
<br>
-------------------------------------------
<h3>PHP Comparison Operators</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y);
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = "100";

var_dump($x === $y);
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = "100";

var_dump($x != $y);
?> 
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y);
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y);
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 100;
$y = 50;

var_dump($x > $y);
?> 
<br>
-------------------------------------------
<br>
<?php
$x = 10;
$y = 50;

var_dump($x < $y);
?> 
<br>
-------------------------------------------
<br>
<?php
$x = 50;
$y = 50;

var_dump($x >= $y);
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 50;
$y = 50;

var_dump($x <= $y);
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 5;  
$y = 10;

echo ($x <=> $y);
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y);
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y);
?>
<br>
-------------------------------------------
<h3>PHP Increment / Decrement Operators</h3>
<?php
$x = 10;  
echo ++$x;
?> 
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
echo $x++;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
echo --$x;
?>  
<br>
-------------------------------------------
<br>
<?php
$x = 10;  
echo $x--;
?> 
<br>
-------------------------------------------
<h3>PHP Logical Operators</h3>
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?> 
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?> 
<br>
-------------------------------------------
<br>
<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>
<br>
-------------------------------------------
<br>
<?php
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}
?>
<br>
-------------------------------------------
<h3>PHP String Operators</h3>
<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>
<br>
-------------------------------------------
<br>
<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?>
<br>
-------------------------------------------
<h3>PHP Array Operators</h3>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y);
?>
<br>
-------------------------------------------
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>
<br>
-------------------------------------------
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?> 
<br>
-------------------------------------------
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
?>
<br>
-------------------------------------------
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?>
<br>
-------------------------------------------
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>
<br>
-------------------------------------------
<h3>PHP Conditional Assignment Operators</h3>
<?php
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  
<br>
-------------------------------------------
<br>
<?php
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
   echo $color = $color ?? "red";
?>  
<br>
-------------------------------------------
</body>
</html>