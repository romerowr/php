<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercici8</title>
</head>
<body>
	<?php 
		$valores = array();
		$max_num = 100;
		$buscar = 69;
     
    	for ($x=0;$x<$max_num;$x++) {  
    		$num_aleatorio = rand(1,100);
  			array_push($valores,$num_aleatorio);
  			if($num_aleatorio == $buscar)
  				echo '<br>El numero buscado se encuentra en la posicion: '.$x.' del vector<br><br>';
  		}

  		for ($x=0;$x<count($valores);$x++)
      		echo 'POS: '.$x.'=>'.$valores[$x].'<br/>';
	?>
</body>
</html>