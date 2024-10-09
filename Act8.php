<?php
function factorial($number) {
    $result = 1;
    
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i; 
    }
    
    return $result;
}

$number = 5;
echo "Factorial of $number is: " . factorial($number) . "\n";
?>
