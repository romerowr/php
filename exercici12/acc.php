<?php
$nom=$_GET['nom'];
$edat=$_GET['edat'];

if($edat >= 18){
	echo $nom. ' tens ' .$edat. ' anys per tant ets major dedat ';
}else{
	echo $nom. ' tens ' .$edat. ' anys per tant ets menor dedat ';
}
