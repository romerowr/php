<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici5</title>
</head>
<body>
	<?php 
		$aleat=rand(1,3);
		
		if($aleat == 1){
			echo "El numero ".$aleat." es uno";
		}elseif($aleat == 2){
			echo "El numero ".$aleat." es dos";
		}elseif($aleat == 3){
			echo "El numero ".$aleat." es tres";
		}
	?>
</body>
</html>