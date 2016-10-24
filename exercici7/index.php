<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici7</title>
</head>
<body>
	<?php 
		define('TAM', 10);

		echo "<table border='1px solid black'>";
		echo "<th bgcolor='magenta'>TABLA DE MULTIPLICAR DEL 10</th>";
		
		for($i=0;$i<=10;$i++){
			if ($i%2==0) {
				echo "<tr bgcolor='red'>";
				echo "<td>10x".$i."=".(10*$i)."</td>";
				echo "</tr>";
			}else{
				echo "<tr bgcolor='yellow'>";
				echo "<td>10x".$i."=".(10*$i)."</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
	?>
</body>
</html>