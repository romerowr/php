<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici2</title>
</head>
<body>
	<?php 
		$num=rand(1,100);

		echo $num.": ";

		if($num < 50){
			echo "el valor random es menor a 50";
		}elseif($num == 50){
			echo "el valor random es igual a 50";
		}elseif($num > 50){
			echo "el valor random es mayor a 50";
		}

	?>
</body>
</html>