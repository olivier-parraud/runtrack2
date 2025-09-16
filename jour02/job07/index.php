<?php

$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    // Affiche les espaces classiques
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo " ";
    }
    // Affiche les étoiles
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br />";
}
?>