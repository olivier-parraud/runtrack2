<?php

// Ici on a mis une fonction dans une fonction (non demandé dans la consigne).
function bonjour()
{
    echo "bonjour <br><br>";
}
function getHello()
{
    // "return" à mettre en dernier car il termine et ferme la fonction.
    bonjour();
    return "Hello la Plateforme";
}

echo getHello();