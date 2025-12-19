<!DOCTYPE html>
<!--
    PROBLEM:
    Electricity Bill Calculator.
    1. Form to input 'units' consumed.
    2. Calculation Logic:
       - First 100 units: 5 tk per unit.
       - Above 100 units: 100*5 + (remaining * 8).
       - PLUS: if total > 1000 tk, add 5% service charge.
    3. Display Total Bill.
-->
<html>
<head><title>Electricity Bill</title></head>
<body>
    <?php
    $msg = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $units = $_POST['units'];
        $bill = 0;

        if ($units < 0) {
            $msg = "Invalid Units";
        } else {
            // Base Calculation
            if ($units <= 100) {
                $bill = $units * 5;
            } else {
                $bill = (100 * 5) + (($units - 100) * 8);
            }

            // Surcharge Logic
            if ($bill > 1000) {
                $bill += $bill * 0.05;
            }
            
            $msg = "Total Bill: " . $bill . " Taka";
        }
    }
    ?>

    <form method="post">
        <h2>Calculate Electricity Bill</h2>
        Units: <input type="number" name="units" required>
        <button type="submit">Calculate</button>
    </form>
    <h3><?php echo $msg; ?></h3>
</body>
</html>
