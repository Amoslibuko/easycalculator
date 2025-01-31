<?php

// this function performs calculations based on user input from a form.
function calculate() {

    // Check if the request method is POST 
    //is a globall array
    //is a key within a a array that that stores thr http method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//check if the form was accually submitted
// Get the numbers and operation from the form, making sure they're valid.
// Get form inputs: numbers ($num1, $num2) and operation
// Get numbers and operation from form, using 0 for missing numbers.
//converts input value to float
//makes a short hand if statement
        $num1 = isset($_POST["num1"]) ? floatval($_POST["num1"]) : 0; // Get num1, default to 0 if not set or not a number.
        $num2 = isset($_POST["num2"]) ? floatval($_POST["num2"]) : 0; // Get num2, default to 0 if not set or not a number.

        $operation = isset($_POST["dropdown"]) ? $_POST["dropdown"] : ""; // Get the selected operation from the dropdown.

        // Perform the calculation based on the selected operation
        //check the value of oparation
        switch ($operation) {
            case "addition":
                $sum = $num1 + $num2;
                return $sum; // Return the sum.
                break; //  Exit the switch case after the calculation.

            case "subtraction":
                $diff = $num1 - $num2;
                return $diff; // Return the difference.
                break;

            case "division":
                // Check for division by zero.
                if ($num2 == 0) {
                    return "Division by zero error!"; 
                } else {
                    $div = $num1 / $num2;
                    return $div; // Return the quotient.
                }
                break;

            case "multiplication":
                $prod = $num1 * $num2;
                return $prod; // Return the product.
                break;

            default:
                return "Invalid operation"; // Return an error message for invalid operations.
        }

    } else {
        return "No operation selected"; // Return a message if the script is accessed directly (not via POST).
    }
}

// Output the result of the calculation.
echo "The result is " . calculate(); // Call the calculate() function and display the returned value.
//links the calchtmlfile
?>

<a href="calchtml.php">Back</a>
