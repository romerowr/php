
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>exercici13</title>
</head>
<body>

	<h1>EXERCICI 13<h1>
	<form method="POST" action="<?= $_SERVER['PHP_SELF'];?>">
		<p>Nom: <input type="text" name="nom"></p>
		<p>Ingressos:</p> 
		<select multiple name="ingresos[]">
			<option value="1-1000">1-1000</option>
			<option value="1001-3000">1001-3000</option>
			<option value=">3000">>3000</option>
		</select>
		<p><input type="submit" value="Envia"></p>

	</form>

<?php

//Comprovació si el camp està definit i no està buit
if(isset($_POST) && !empty($_POST)){
	if(isset($_POST['nom']) && !empty($_POST['nom'])){
		$nom=$_POST['nom'];
	}
	if(isset($_POST['ingresos']) && !empty($_POST['ingresos'])){
		$ingresos=$_POST['ingresos'];
	}

	echo 'Nom: ' .$_POST['nom'];
	$ingresos=$_POST['ingresos'];
	//Recorrem l'array d'ingressos seleccionats
	for($i=0; $i<count($ingresos); $i++){
		echo '<br> ingresos :'  .$ingresos[$i];
		if ($ingresos[$i] == ">3000"){
			echo "<br>Has de pagar impostos";
	}
	}
}	
?>

</body>
</html>