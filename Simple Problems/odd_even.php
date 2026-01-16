<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>

<!-- 
    PROBLEM:
    Ask the user to input a number.
    Determine if the number is Odd or Even using the modulus operator (%).
    Display "Odd" or "Even".
-->

<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST["number"];

    if (!is_numeric($number)) {
        $message = "Please enter a valid number.";
    } else {
        if ($number % 2 == 0) {
            $message = "$number is an <strong>Even</strong> number.";
        } else {
            $message = "$number is an <strong>Odd</strong> number.";
        }
    }
}
?>

<form method="post">
    <h2>Odd or Even Checker</h2>
    <input type="number" name="number" placeholder="Enter a number" required>
    <br><br>
    <button type="submit">Check</button>
</form>

<?php if ($message !== ""): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>

</body>
</html>
