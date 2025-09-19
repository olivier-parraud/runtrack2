<!DOCTYPE html>
<html>
<head>
    <title>Compteur d'arguments GET</title>
</head>
<body>

<form method="get" action="">
    
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Âge : <input type="text" name="age"></label><br>
    <label>Ville : <input type="text" name="ville"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET)) {
    $compteur = 0;

    // Parcours manuel de $_GET pour compter les arguments
    foreach ($_GET as $cle => $valeur) {
        // On vérifie si la clé est bien définie (sécurité inutile ici mais demandée par l'énoncé)
        if (isset($_GET[$cle]) && $_GET[$cle] !== "")  {
            $compteur = $compteur + 1; // ou $compteur++;
        }
    }

    // On affiche le résultat uniquement s’il y a au moins un argument
    if ($compteur > 0) {
        echo "<p>Nombre d’arguments GET reçus : <strong>$compteur</strong></p>";
    }
}
?>

</body>
</html>
