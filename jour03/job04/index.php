<?php

$str = "Dans l'espace, personne ne vous entend crier";
$nbCaracteres = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $nbCaracteres++;
}

echo "Il y a " . $nbCaracteres . " caractères.";
?>