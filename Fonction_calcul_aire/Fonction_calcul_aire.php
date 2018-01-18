<?php


$a=$_GET["grouperadio"];
switch ($a) {
	case "carre":
echo '<form id="formulaire" action="aire_carre.php" method ="get">
			<legend>Veuillez indiquer le côté du carre : </legend>
		    <input id="cote" name="cote" type="number" step="0.01" value="cote" /> 
		    <input id="envoyer" name="envoyer" type="submit" value="Envoyer"/> </form>';
break;

	case "rectangle":
		echo '<form id="formulaire" action="aire_rectangle.php" method ="get">
				<legend>Veuillez indiquer la longueur du rectangle : </legend>
		   		<input id="longueur" name="longueur" type="number" step="0.01" value="longueur" />
				
				<legend>Veuillez indiquer la largeur du rectangle : </legend>
		    	<input id="largeur" name="largeur" type="number" step="0.01" value="largeur"/>
		    <input id="envoyer" name="envoyer" type="submit" value="Envoyer"/>
			</form>';
		break;
		
	case "triangle":
		echo '<form id="formulaire" action="aire_triangle.php" method ="get">
				<legend>Veuillez indiquer la  valeur de la base du triangle : </legend>
		   		<input id="base" name="base" type="number" step="0.01" value="base" />

				<legend>Veuillez indiquer la valeur de la hauteur du triangle : </legend>
		    	<input id="hauteur" name="hauteur" type="number" step="0.01" value="hauteur"/>
		    <input id="envoyer" name="envoyer" type="submit" value="Envoyer"/> 
			</form>';
		break;
	
	case"trapeze":
		echo '<form id="formulaire" action="aire_trapeze.php" method ="get">
				<legend>Veuillez indiquer la  valeur de grande base du trapèze : </legend>
		   		<input id="gbase" name="gbase" type="number" step="0.01" value="gbase" />
				
				<legend>Veuillez indiquer la valeur de la petite base du trapèze : </legend>
		    	<input id="pbase" name="pbase" type="number" step="0.01" value="pbase"/>

				<legend>Veuillez indiquer la hauteur du trapèze: </legend>
		    	<input id="hauteur" name="hauteur" type="number" step="0.01" value="hauteur"/>
		    <input id="envoyer" name="envoyer" type="submit" value="Envoyer"/>
			</form>';
		break;
	
	case "cercle":
		echo '<form id="formulaire" action="aire_cercle.php" method ="get">
				<legend>Veuillez indiquer le rayon du cercle : </legend>
		   		<input id="rayon" name="rayon" type="number" step="0.01" value="rayon" />
				
		    <input id="envoyer" name="envoyer" type="submit" value="Envoyer"/>
			</form>';
		break;
}

?>