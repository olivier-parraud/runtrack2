<?php

// Fonction qui convertit un texte en "leetspeak" (remplace certaines lettres par des chiffres)
function leetSpeak($str)
{
    $result = ''; // Initialise une chaîne vide pour stocker le résultat
    $i = 0;      // Initialise un compteur pour parcourir chaque caractère

    // Parcours chaque caractère de la chaîne tant qu'il existe
    while (isset($str[$i])) {
        $char = $str[$i]; // Stocke le caractère courant dans une variable temporaire

        // Évalue chaque caractère et le remplace selon les règles du leetspeak
        switch ($char) {
            case 'A': // Si le caractère est 'A' majuscule
            case 'a': // Ou 'a' minuscule
                $result .= '4'; // Remplace par '4'
                break; // Sort du switch pour passer au caractère suivant

            case 'B': // Si le caractère est 'B' majuscule
            case 'b': // Ou 'b' minuscule
                $result .= '8'; // Remplace par '8'
                break;

            case 'E': // Si le caractère est 'E' majuscule
            case 'e': // Ou 'e' minuscule
                $result .= '3'; // Remplace par '3'
                break;

            case 'G': // Si le caractère est 'G' majuscule
            case 'g': // Ou 'g' minuscule
                $result .= '6'; // Remplace par '6'
                break;

            case 'L': // Si le caractère est 'L' majuscule
            case 'l': // Ou 'l' minuscule
                $result .= '1'; // Remplace par '1'
                break;

            case 'S': // Si le caractère est 'S' majuscule
            case 's': // Ou 's' minuscule
                $result .= '5'; // Remplace par '5'
                break;

            case 'T': // Si le caractère est 'T' majuscule
            case 't': // Ou 't' minuscule
                $result .= '7'; // Remplace par '7'
                break;

            default: // Pour tous les autres caractères
                $result .= $char; // Conserve le caractère original
        }

        $i++; // Passe au caractère suivant
    }

    return $result; // Renvoie la chaîne convertie en leetspeak
}

// Définit le texte à convertir
$texte = "Ely et Mika sabrent le champagne en bavardant";

// Appelle la fonction leetSpeak et stocke le résultat
$result = leetSpeak($texte);

// Affiche le résultat
echo $result;
