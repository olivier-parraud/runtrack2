<?php


function occurence($str,$char) {

$count = 0;
$i = 0;

while (isset($str[$i])) {
        if ($str[$i] === $char) {
            $count++;
        }
        if ($str[$i] === "E") {
            $count++;
        }
            
        $i++;
    }   

    return $count;
}

$texte = "Bienvenue en enfer, suiviez votre guide Ely";
$caractères = "e";
$resultat = occurence($texte,$caractères);

echo "Le nombre de caractères . <b>$caractères</b> . apparait . <b>$resultat</b> . fois dans : <u>$texte.</u>";