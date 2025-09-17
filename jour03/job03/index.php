<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$i = 0;
while (isset($str[$i])) {
	if (in_array($str[$i], $voyelles)) {
		echo $str[$i];
	}
	$i++;
}

?>