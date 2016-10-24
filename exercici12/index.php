<?php
function get_array(){
	return $_SERVER;
}	

$global=get_array();
	
				
?>


<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>exercici12</title>
</head>
<body>

	<h1>EXERCICI 12<h1> <br>
	<form method="GET" action="acc.php">
		<p>Nom: <input type="text" name="nom"></p>
		<p>Edat: <input type="text" name="edat"></p>
		<p><input type="submit" value="Envia"></p>

	</form>


</body>
</html>