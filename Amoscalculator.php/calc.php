<?php

function calculate() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $num1 = isset($_POST["num1"]) ? floatval($_POST["num1"]) : 0; 
        $num2 = isset($_POST["num2"]) ? floatval($_POST["num2"]) : 0; 

        $operation = isset($_POST["dropdown"]) ? $_POST["dropdown"] : ""; 

        switch ($operation) {
            case "addition":
                $sum = $num1 + $num2; 
                return $sum;
                break;
            case "subtraction":
                $diff = $num1 - $num2; 
                return $diff;
                break;
            case "division":
                if ($num2 == 0) {
                    return "Division by zero error!"; 
                } else {
                    $div = $num1 / $num2; 
                    return $div;
                }
                break;
            case "multiplication":
                $prod = $num1 * $num2; 
                return $prod;
                break;
            default:
                return "Invalid operation"; 
        }
    } else {
      return "No operation selected"; 
    }
}

echo "The result is " . calculate();
?>
<a href="calchtml.php">Back</a>