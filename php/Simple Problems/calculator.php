<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<!-- 
    PROBLEM:
    Create a simple calculator that takes two numbers and an operator (+, -, *, /) from the user
    and performs the corresponding calculation. Display the result.
    Handle division by zero validation.
-->

<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"]; // Assuming valid number input for simplicity
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $result = "Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid Operator";
    }
}
?>

<form method="post">
    <h2>PHP Calculator</h2>
    <input type="number" name="num1" placeholder="First Number" step="any" required>
    <br><br>
    
    <select name="operator">
        <option value="add">Add (+)</option>
        <option value="subtract">Subtract (-)</option>
        <option value="multiply">Multiply (*)</option>
        <option value="divide">Divide (/)</option>
    </select>
    <br><br>

    <input type="number" name="num2" placeholder="Second Number" step="any" required>
    <br><br>

    <button type="submit">Calculate</button>
</form>

<?php if ($result !== ""): ?>
    <h3>Result: <?php echo $result; ?></h3>
<?php endif; ?>

</body>
</html>
