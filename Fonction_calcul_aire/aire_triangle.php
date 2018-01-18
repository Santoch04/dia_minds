<?php
function AIRETRIANGLE(&$a,&$b){
	$a=$a*$b/2;
	return($a);
}
$a=$_GET["base"];
$b=$_GET["hauteur"];
AIRETRIANGLE($a, $b);
echo "L'aire est egale à ".$a." unité(s) d'aire";
?>