<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = 0;
    
    switch($operator) {
        case '+':
            $result = $num1 + $num2;
            $operatorText = "penjumlahan";
            break;
        case '-':
            $result = $num1 - $num2;
            $operatorText = "pengurangan";
            break;
        case '*':
            $result = $num1 * $num2;
            $operatorText = "perkalian";
            break;
        case '/':
            if($num2 != 0) {
                $result = $num1 / $num2;
                $operatorText = "pembagian";
            } else {
                echo "<h2>Error: Pembagian dengan nol tidak diperbolehkan!</h2>";
                exit;
            }
            break;
    }
    
    echo "<h2>Hasil Perhitungan</h2>";
    echo "<p>Hasil {$operatorText} dari {$num1} {$operator} {$num2} = {$result}</p>";
}
?> 