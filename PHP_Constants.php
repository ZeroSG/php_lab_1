<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constants</title>
</head>
<body>
<h3>Create a PHP Constant</h3>
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
<br>
-------------------------------------------
<br>
<?php
define("GREETING1", "Welcome to W3Schools.com!", true);
echo GREETING1;
?>
<br>
-------------------------------------------
<h3>PHP Constant Arrays</h3>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
<br>
-------------------------------------------
<h3>Constants are Global</h3>
<?php
define("GREETING3", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING3;
}
 
myTest();
?> 
<br>
-------------------------------------------
</body>
</html>