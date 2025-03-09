
<?php
// get a random number between 1 and 10
$rand = mt_rand(1, 10);

// check if the number is even or odd
if ($rand % 2 == 0) {
    echo "$rand is even";
} else {
    echo "$rand is odd";
}
?>