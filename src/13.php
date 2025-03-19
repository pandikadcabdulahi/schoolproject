
<?php

// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Test the function with different inputs
echo "Test 1: ";
var_dump(getRandomNumber());
echo "\n";

echo "Test 2: ";
var_dump(getRandomNumber());
echo "\n";

echo "Test 3: ";
var_dump(getRandomNumber());
echo "\n";
?>