<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers</title>
</head>
<body>
<h3>PHP Integers</h3>
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
<br>
-------------------------------------------
<h3>PHP Floats</h3>
<?php
$x = 10.365;
var_dump(is_float($x));
?>
<br>
-------------------------------------------
<h3>PHP Infinity</h3>
<?php
$x = 1.9e411;
var_dump($x);
?>
<br>
-------------------------------------------
<h3>PHP NaN</h3>
<?php
$x = acos(8);
var_dump($x);
?>
<br>
-------------------------------------------
<h3>PHP Numerical Strings</h3>
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
<br>
-------------------------------------------
<h3>PHP Casting Strings and Floats to Integers</h3>
<?php
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
<br>
-------------------------------------------
</body>
</html>