<?php
function AIRECERCLE(&$a){
	$a=$a*$a*pi();
	return($a);
}
$a=$_GET["rayon"];
AIRECERCLE($a);
echo "L'aire est de ".$a." unité(s) d'aire.";
?>