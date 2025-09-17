<?php
$nombres = [200, 204, 173, 98, 171, 404, 459];

for ($i = 0; $i < count($nombres); $i++) {
    if ($nombres[$i] % 2 == 0) {
        echo $nombres[$i] . ' est paire';
    } else {
        echo $nombres[$i] . ' est impaire';
    }

    echo '<hr />';
}
?>