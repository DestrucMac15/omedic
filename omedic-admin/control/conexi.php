<?php
function Conectarse()
{
	$host="localhost";
	$db="omedic2019";
	$usuario="omedic2019";
	$pass="omedic2019colibri";
	$set_local = "SET time_zone = '-05:00'";
	$set_names = "SET NAMES 'utf8'";
	date_default_timezone_set('America/Mexico_City');

    if (!($link=mysqli_connect($host,$usuario,$pass))){
     	die( "Error conectando a la base de datos.". mysqli_error($link));
	}

	if (!mysqli_select_db($link, $db)){
		die( "Error seleccionando la base de datos.". mysqli_error($link));
	}


	mysqli_query($link, "SET NAMES 'utf8'") or die("Error Cambiando charset").mysqli_error($link);

	setlocale(LC_ALL,"es_ES");
	mysqli_query($link, "SET CHARACTER SET utf8") or die("Error en charset UTF8".mysqli_error($link));

   	return $link;
}
?>
