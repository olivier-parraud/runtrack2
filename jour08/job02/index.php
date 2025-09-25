<?php

if (isset($_POST["reset"])) {
     // Réinitialise le cookie en le mettant à 0 et expire dans un an
    setcookie("nbvisite", 0, time() + 365*24*3600);
    // Redirection pour éviter la soumission du formulaire lors du rafraîchissement
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit; 
}

// Si le bouton ajout est cliqué
if (isset($_POST['ajout'])) {
    $nbvisite = isset($_COOKIE['nbvisite']) ? $_COOKIE['nbvisite'] +1 : 1;
    setcookie('nbvisite', $nbvisite, time() + 365*24*3600);
    header('Location : ' . $_SERVER['PHP_SELF']);
    exit; 

}

// Incrémente le compteur à chaque visite (si le cookie existe)
if (isset($_COOKIE['nbvisite'])) {
    $nbvisite = $_COOKIE['nbvisite'] +1;
    setcookie('nbvisite', $nbvisite, time() + 365*24*3600);
} else {
    // Si le cookie n'existe pas, on l'initialise à 1
    setcookie('nbvisite', 1, time() + 365*57*3600);
     $nbvisite = 1;
}

echo "Le nombre de cookies mangés est de " . (isset($_COOKIE['nbvisite']) ? $_COOKIE['nbvisite'] : 1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    
<form method="POST">
    <button type="submit" name="reset">RESET</button>        
    <button type="submit" name="ajout">+1</button>          
</form>      

</body>
</html>