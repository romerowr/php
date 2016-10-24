<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<h1>EXERCICI 11<h1> 

	<form name="formulari" method="GET" action="index.php">
	Nom: <input type="text" name="nom"><br>
	Cognoms: <input type="text" name="cognoms"><br>
	Comentaris: <input type="text" name="comentaris"><br>
	<input type="submit" value="Desar">

	<?php

	if(isset($_GET) && !empty($_GET)){
		if(isset($_GET['nom']) && !empty($_GET['nom'])){
		$nom=$_GET['nom'];
		}
		if(isset($_GET['cognoms']) && !empty($_GET['cognoms'])){
		$cognoms=$_GET['cognoms'];
		}
		if(isset($_GET['comentaris']) && !empty($_GET['comentaris'])){
		$comentaris=$_GET['comentaris'];
		}
	
	function recollirDades($nom, $cognoms, $comentaris){
		$fp=fopen("/var/www/php.dev/public_html/PHP/exercici11/dades.txt", "w");
		fputs($fp, $nom."\n".$cognoms."\n".$comentaris);
		fclose($fp);
	}

	recollirDades($nom, $cognoms, $comentaris);
}	
				
?>

</body>
</html>