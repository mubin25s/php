<!DOCTYPE html>
<!--
    PROBLEM:
    Write a PHP script to check a number's value against 10.
    1. Define a variable $number (e.g., 10).
    2. If $number is greater than 10, print "Greater than 10".
    3. If $number is equal to 10, print "Equal to 10".
    4. If $number is less than 10, print "Less than 10".
-->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Else If Example</title>
</head>
<body>

<?php
$number = 10;

if ($number > 10) {
    echo "<h2>Greater than 10</h2>";
} elseif ($number == 10) {
    echo "<h2>Equal to 10</h2>";
} else {
    echo "<h2>Less than 10</h2>";
}
?>

</body>
</html>
