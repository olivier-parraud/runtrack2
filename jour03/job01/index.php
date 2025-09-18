<?php
$nombres = [200, 204, 173, 98, 171, 404, 459];

$i = 0;
while (isset($nombres[$i])) {
    if ($nombres[$i] % 2 == 0) {
        echo $nombres[$i] . ' est paire<br />';
    } else {
        echo $nombres[$i] . ' est impaire<br />';
    }
    $i++;
}
?>