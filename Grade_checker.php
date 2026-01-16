<!DOCTYPE html>
<!--
    PROBLEM:
    Create a Grade Checker Form.
    1. Form with 'marks' input.
    2. Logic on Submit:
       - Marks < 33: "Failed"
       - Marks 33 to 79: "Passed"
       - Marks >= 80: "A+ (Excellent)"
       - Invalid (negative or > 100): "Invalid Input"
-->
<html>
<head><title>Grade Checker</title></head>
<body>
    <?php
    $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $m = $_POST['marks'];
        
        if ($m < 0 || $m > 100) {
            $result = "Invalid Input";
        } elseif ($m < 33) {
            $result = "Failed";
        } elseif ($m >= 80) {
            $result = "A+ (Excellent)";
        } else {
            $result = "Passed";
        }
    }
    ?>

    <form method="post">
        <h2>Check Result</h2>
        Enter Marks: <input type="number" name="marks" required>
        <button type="submit">Check</button>
    </form>
    
    <h3>Status: <?php echo $result; ?></h3>
</body>
</html>
