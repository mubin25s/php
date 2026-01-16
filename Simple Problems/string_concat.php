<!DOCTYPE html>
<html>
<head>
    <title>String Concatenation</title>
</head>
<body>

<!-- 
    PROBLEM:
    1. Define a variable '$greeting' with the value "Good Morning".
    2. Define a variable '$target' with the value "Teacher".
    3. Use the concatenation operator (.) to join them with a space in between.
    4. Store the result in a new variable called '$full_message'.
    5. Echo the '$full_message'.
-->

<?php
    $greeting = "Good Morning";
    $target = "Teacher";
    
    // Concatenation
    $full_message = $greeting . " " . $target;

    echo "<h3>" . $full_message . "</h3>";
?>

</body>
</html>
