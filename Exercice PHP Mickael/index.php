<!DOCTYPE html>
<html>
<head>
    <title>Compteur d'arguments GET</title>
</head>
<body>

<!-- On crée notre formulaire en dessous pour définir notre méthode ($_GET ou $_POST) -->
<!-- Action : envoie vers une autre page, ex "nom_de_la_page" -->
 <!-- La méthode "($_GET)" est une variable super globale publique.
   Ça va s'afficher dans barre URL.
  La méthode "($_POST)" est privé. Sert pour des des donnés privés (mots de passe) -->
<form method="get" action="">
    
    <!-- On défini notre formulaire avec les noms voulus -->
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Âge : <input type="text" name="age"></label><br>
    <input type="submit" value="Envoyer">
</form>
