<!DOCTYPE html>
<html>
<head>
    <title>Simple Number Calculator</title>
</head>
<body>

<h2>Simple Number Calculator</h2>

<form method="post">
    Enter the first number: <input type="text" name="num1"><br><br>
    Enter the second number: <input type="text" name="num2"><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values entered by the user
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Check if both values are numeric
    if (is_numeric($num1) && is_numeric($num2)) {
        // Calculate the sum
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum";
    } else {
        echo "Please enter valid numeric values.";
    }
}
?>

</body>
</html>
