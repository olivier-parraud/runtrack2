<?php

function bonjour($jour) {
    if ($jour==false) {
        echo "Bonsoir";
    }

    elseif ($jour==true) {
        echo "Bonjour <br><br>";
    }
}

bonjour(true);
bonjour(false);


?>