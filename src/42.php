<?php
    function randomCodeGenerator() {
        $randomText = 'ABCDEFGHJKL' . str_shuffle(str_repeat('0123456789', 8)) . 'ABCDEFGHJKL';
        return $randomText;
    }
    echo randomCodeGenerator();
?>
