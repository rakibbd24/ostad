<?php

//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

// Function to check if a number is even or odd
function isEven($check)
{
    // Check if the number is divisible by 2
    if ($check % 2 == 0) {
        // If divisible, return "Even"
        return "Even";
    }
    // Otherwise, return "Odd"
    return "Odd";
}

// Example number to check
$number = 11;

// Call the function and store the result
$isEven = isEven($number);

// Print the result
echo $number . " is a " . $isEven . " number \n";

//2. 1+2+3...…….100  Write a loop to calculate the summation of the series

// Calculate the sum of the series 1 to 100
$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    $sum += $i;
}

// Print the result
echo "The summation of the series 1 to 100 is: $sum";
