<?php

$result = "";

function calcule($a, $operation, $b)
{

    switch ($operation) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/" :
            return $a / $b;
        case "%" : 
            return $a % $b;
    }
}



$result = calcule(6,"-",9);

echo $result;

