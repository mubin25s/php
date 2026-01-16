<?php
// Check if the form is submitted
if (isset($_POST['numbers'])) {

    // 1. Get the comma-separated string from the user
    $input = $_POST['numbers']; // e.g. "1,2,3,4"

    // 2. Convert the string into an array using explode()
    // explode() splits the string wherever it finds a comma
    $numbersArray = explode(",", $input);

    // 3. Initialize sum variable
    $sum = 0;

    // 4. Loop through the array and add each number to sum
    foreach ($numbersArray as $num) {
        // Trim spaces and convert to integer
        $num = (int)trim($num);
        $sum += $num;
    }

    // 5. Display the result
    echo "Sum of all numbers: " . $sum;
}
?>

<!-- Simple HTML form to take input from user -->
<form method="post">
    <label>Enter numbers (comma-separated):</label><br>
    <input type="text" name="numbers" placeholder="e.g. 1,2,3,4"><br><br>
    <input type="submit" value="Calculate Sum">
</form>
