<?php
// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return mt_rand(1, 10);
}

// Function to generate a random word from an array of words
function getRandomWord($words) {
    $word = $words[array_rand($words)];
    return $word;
}

// Function to generate a random string with a length of $length
function getRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $string;
}
?>