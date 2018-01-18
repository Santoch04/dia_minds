<?php
function AIRETRAPEZE(&$a,&$b, &$c){
	$a=($a+$b)*$c/2;
	return($a);
}
$a=$_GET["gbase"];
$b=$_GET["pbase"];
$c=$_GET["hauteur"];
AIRETRAPEZE($a, $b, $c);
echo "L'aire est egale à ".$a." unité(s) d'air";
?>