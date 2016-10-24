<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>EXERCICI9</title>
</head>
<body>

	<h1>EXERCICI 9<h1> 

	<?php
	$dir="../img";

	echo '<table border="1 solid black">';
	if (is_dir($dir)){
		if($dh = opendir($dir)){
			echo '<tr border="1 solid black">';
			while (($file = readdir($dh)) !== false){
				if ($file != "." && $file != ".."){
					echo "<td><img width='107px' src=" .$dir.'/'.$file."></td>";
				}
			}
			echo "</tr>";
		}
	}
	echo "</table>"
?>

</body>
</html>