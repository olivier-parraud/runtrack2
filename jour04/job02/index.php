<!DOCTYPE html>
<html>
<head>
    <title>Tableau des arguments GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Liste des arguments GET</h2>

<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr> 
    <tr>   
      <?php
      foreach ($_GET as $val) {
        echo "<td> $val </td>"; 
      }
      if (isset($_GET[$val]) !== "")  {
        echo "";
      }
      ?>
    </tr>

</table>

<form method="get" action="">
    
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <input type="submit" value="Envoyer">
</form>

