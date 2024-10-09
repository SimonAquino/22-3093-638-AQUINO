<?php
$correctPassword = "password123";
$userInput = "";
do {
    echo "Please enter the password: ";
    $userInput = trim(fgets(STDIN));
    if ($userInput !== $correctPassword) {
        echo "Incorrect password.\n";
    }
} while ($userInput !== $correctPassword);

echo "Access Granted.\n";
?>