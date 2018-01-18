<?php
function AIRECARRE(&$a){
	$a=$a*$a;
	return($a);
}
$a=$_GET["cote"];
AIRECARRE($a);
echo "L'aire est de ".$a." unité(s) d'aire.";
?>