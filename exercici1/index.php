<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici1</title>
</head>
<body>
	<?php 
		$dia=date("d");

		if($dia <= 10){
			echo "el lloc es troba disponible";
		}else{
			echo "fora de servei";
		}
	?>
</body>
</html>