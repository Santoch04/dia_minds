<?php
function AIRERECTANGLE(&$a,&$b){
	$a=$a*$b;
	return($a);
}
$a=$_GET["longueur"];
$b=$_GET["largeur"];
AIRERECTANGLE($a, $b);
echo "L'aire est egale à ".$a." unité(s) d'aire";
?>