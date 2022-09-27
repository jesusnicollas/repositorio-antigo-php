<?php
    $i = 1;
    while ($i <= 10) {
        $j = 1;
        echo "Tabuada do $i" . PHP_EOL;
        while ($j <= 10) {
            echo "$j * $i = " . $j * $i  . PHP_EOL;
            $j += 1;
        }
        $i ++; 
    }
?>