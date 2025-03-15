
<?php

$fruits = array("apple", "banana", "orange");

$rand_keys = array_rand($fruits, 2);

echo $fruits[$rand_keys[0]] . ", " . $fruits[$rand_keys[1]];

?>