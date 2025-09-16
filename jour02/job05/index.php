<?php

for ($i = 2; $i <= 1000; $i++) {
    $isPrime = true;
    for ($j = 2; $j < $i; $j++) { // On teste tous les diviseurs de 2 à $i-1
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $i . '<br />';
    }
}
?>