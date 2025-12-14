<!DOCTYPE html>
<html>
<head>
    <title>Array Sum Calculator</title>
</head>
<body>

<!-- 
    PROBLEM:
    Take a comma-separated string of numbers from the user.
    Convert this string into an array.
    Calculate and display the sum of all numbers in that array using a loop.
-->

<?php
$sum = "";
$input_numbers = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input_numbers = $_POST["numbers"];
    
    // Split the comma-separated string into an array
    // array_map('trim', ...) removes whitespace around numbers
    $number_array = array_map('trim', explode(',', $input_numbers));
    
    $current_sum = 0;
    foreach ($number_array as $num) {
        // Ensure it is numeric before adding
        if (is_numeric($num)) {
            $current_sum += $num;
        }
    }
    $sum = $current_sum;
}
?>

<form method="post">
    <h2>Sum of Array Elements</h2>
    <p>Enter numbers separated by commas (e.g., 10, 20, 5, 30)</p>
    <input type="text" name="numbers" value="<?php echo htmlspecialchars($input_numbers); ?>" placeholder="10, 20, 30" required>
    <br><br>
    <button type="submit">Calculate Sum</button>
</form>

<?php if ($sum !== ""): ?>
    <h3>Total Sum: <?php echo $sum; ?></h3>
<?php endif; ?>

</body>
</html>
