<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP if...else</title>
</head>
<body>
<h3>PHP - The if Statement</h3>
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>
<br>
-------------------------------------------
<h3>PHP - The if...else Statement</h3>
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
<br>
-------------------------------------------
<h3>PHP - The if...elseif...else Statement</h3>
<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
<br>
-------------------------------------------
</body>
</html>