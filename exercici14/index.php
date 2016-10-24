<?php

//CONNEXIÓ
//agafa el codi del fitxer config.php i l'engantxa
include 'config.php';

//creem la connexio
$db=new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
	if($db->connect_errno)
		die('Error de connexio');	
	else{
		//TODO
		//COMPROVAR VALORS FORMULARI
		if($_POST){
		if($_POST['nom'] && !empty($_POST['nom'])
				&& $_POST['cognoms'] && !empty($_POST['cognoms'])
				&& $_POST['curs'] && !empty($_POST['curs'])){
					
					//PREPAREM LA CONSULTA
					$sql="INSERT INTO alumnes(nom, cognoms, curs)
					  VALUES ('$_REQUEST[nom]','$_REQUEST[cognoms]
					',' $_REQUEST[curs]')";

					if(!$result=$db->query($sql)){
						die('Error en insert');
					}
					//TANCAR CONNEXIO ABANS DE REDIRIGIR
					$db->close();
					//SI TOT BE TORNAR A PÀGINA PRINCIPAL

					header('Location: ./index.php');
		}
	}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<header>
		<h1>EXERCICI 14</h1>
	</header>
	<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
		<p><label for="nom">Nom: <input type="text" name="nom"></label></p>
		<p><label for="cognoms">Cognoms: <input type="text" name="cognoms"></label></p>
		<p><label for="curs">Curs: <input type="Radio" name="curs" value="1SMIX">1SMIX
		<input type="Radio" name="curs" value="2SMIX">2SMIX
		<input type="Radio" name="curs" value="1DAW">1DAW
		<input type="Radio" name="curs" value="2DAW">2DAW
		</label></p>
		<p><input type="submit" value="Inserta"></p>
	</form>
	
</body>
</html>