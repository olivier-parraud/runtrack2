<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
$voyelle = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
//const B = "toto";
$consonne = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z', 'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];


$dic = [
    "voyelle" => 0,
    "consonne" => 0
];


$i = 0;
while (isset($str[$i])) {
    foreach ($voyelle as $val) {
        if ($str[$i] == $val) {
            $dic["voyelle"] += 1;
        }
    }
    $i++;
}
//echo $dic["voyelle"];


$i = 0;
while (isset($str[$i])) {
    foreach ($consonne as $val) {
        if ($str[$i] == $val) {
            $dic["consonne"] += 1;
        }
    }
    $i++;
}
//echo $dic["consonne"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Comptage des voyelles et consonnes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
    <h1 style=text-align:center><em><?php echo $str; ?></em></h1>
    
    <table>
        <tr>
            <th>Type</th>
            <th>Nombre</th>
        </tr>
        <tr>
            <td>Voyelles</td>
            <td><?php echo $dic["voyelle"]; ?></td>
        </tr>
        <tr>
            <td>Consonnes</td>
            <td><?php echo $dic["consonne"]; ?></td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td><strong><?php echo $dic["voyelle"] + $dic["consonne"]; ?></strong></td>
        </tr>
    </table>
</body>
</html>