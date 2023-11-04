<!DOCTYPE html>
<html>
<head>
    <title>Subtract Two Numbers</title>
</head>
<body>

<h2>Subtract Two Numbers</h2>

<form method="post" action="">
    First Number: <input type="text" name="number1"><br>
    Second Number: <input type="text" name="number2"><br>
    <input type="submit" value="Subtract">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // Check if the inputs are valid numbers
    if (is_numeric($number1) && is_numeric($number2)) {
        // Perform subtraction and display the result
        $result = $number1 - $number2;
        echo "The result of $number1 - $number2 is: $result";
    } else {
        // Display a message if the inputs are not valid numbers
        echo "Please enter valid numbers to perform subtraction.";
    }
}
?>

</body>
</html>
