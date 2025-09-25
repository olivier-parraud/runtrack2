<?php    

// Démarrer ou reprendre la session
session_start();
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

// Vérifie si la variable de session 'nbvisites' existe déjà
if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}

if (isset($_POST['reset'])) {
              $_SESSION['nbvisites'] = 0;
// ou sinon : session_destroy();
// Puis refaire une : session_start();
}

echo "Le nombre de visite est de " . $_SESSION['nbvisites'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
    <button type = "submit" name = "reset">RESET</button>        
    <button type = "submit" name = "ajout">+1 </button>          
</form>      

</body>
</html>