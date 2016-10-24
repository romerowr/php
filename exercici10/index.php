<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>EXERCICI10</title>
</head>
<body>


	<?php
	$dir="../img";

	echo '<table border="1 solid black">';
	if (is_dir($dir)){
		if($dh = opendir($dir)){
			echo '<tr border="1 solid black">';
			while (($file = readdir($dh)) !== false){
				if ($file != "." && $file != ".."){
					echo "<td><img width='100px' height='100px'src=" .$dir.'/'.$file."></td>";
				}
			}
			echo "</tr>";
		}
	}
	echo "</table>"
?>

</body>
</html>