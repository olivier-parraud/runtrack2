<?php
// On défini nos variable "$str" et "$i".
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i = 0;

/*
On parcourt notre boucle avec "While".



*/	
while (isset($str[$i])) {
	echo $str[$i];
	$i += 2;

	/* 
	Dans la boucle "While", à chaques itérations on incrémente de 2.
	On met le $i entre crochet car c'est une chaine de caractère. 
	Isset verifie avec "true" ou "false".
	La commande "isset" parcourt toute la variable. 
	On défini notre valeur de départ à 0 par $i.


	While  : ON CRÉE UNE BOUCLE 
	FOR : ON BOUCLE QUAND ON CONNAIT LA FIN DE NOTRE ITERATION
	FOREACH : ON BOUCLE DANS UN TABLEAU 
	AS : DEFINIR UNE VARIABLE "TEMPORAIRE"
	*/
}
