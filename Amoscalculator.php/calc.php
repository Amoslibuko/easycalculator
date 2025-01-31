<?php

// This function calculates a result based on user input from a form.
function calculate() {

    // Check if the form was submitted using the POST method.  This is important for security and to ensure we have form data.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the numbers and the selected operation from the form.
        // If a number is missing or not valid, use 0 as the default value.
        $num1 = isset($_POST["num1"]) ? floatval($_POST["num1"]) : 0; // Get the first number.
        $num2 = isset($_POST["num2"]) ? floatval($_POST["num2"]) : 0; // Get the second number.
        $operation = isset($_POST["dropdown"]) ? $_POST["dropdown"] : ""; // Get the selected operation.

        // Choose the correct calculation based on the selected operation.
        switch ($operation) {
            case "addition":
                $sum = $num1 + $num2;
                return $sum; // Return the sum.
                break; // Go to the next part of the code after calculating.

            case "subtraction":
                $diff = $num1 - $num2;
                return $diff; // Return the difference.
                break;

            case "division":
                // Check if the second number is zero to avoid division by zero errors.
                if ($num2 == 0) {
                    return "Division by zero error!"; // Return an error message.
                } else {
                    $div = $num1 / $num2;
                    return $div; // Return the result of the division.
                }
                break;

            case "multiplication":
                $prod = $num1 * $num2;
                return $prod; // Return the product.
                break;

            default:
                return "Invalid operation"; // Return an error message if the selected operation is not recognized.
        }

    } else {
        return "No operation selected"; // Return a message if the script is accessed directly
    }
}

// Display the result of the calculation.
echo "The result is " . calculate(); // Call the calculate function and print the result.

?>

<a href="calchtml.php">Back</a>  ```
