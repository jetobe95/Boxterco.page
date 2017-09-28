<?php
include("conexion.php");

$fecha=$_GET['fecha'];
$hora=$_GET['hora'];
$lat=$_GET['lat'];
$lon=$_GET['lon'];
$velocidad=$_GET['velocidad'];


$con=mysql_connect($host,$user,$pw) or die
("problemas en el servidor");

mysql_select_db($db,$con) or die
("problemas con base de datos");

// abrir archivo de posiciones en modo lectura
//if($file = fopen("posicion", "r")) {
// creamos objeto json con la informacion dentro del archivo posicion (asumiendo q este esta en el formato correcto)
//$obj=json_decode(fread($file,filesize("posicion")),true);
//fclose($file);
//}
// agregamos o modificamos un array con la latitud y la longitud que tiene como identificador el id
//	$obj[$id]=array("lat" => $lat , "lon" => $lon , "stateC" => $statenow , "stateL" => $stateload);
// abrimos archivo poscion en modo de escritura
//	if($file = fopen("posicion", "w")){
		
		// guardamos objeto json modificado y cerramos archivo
//		fwrite($file, json_encode($obj) );
//		fclose($file);
//	}

mysql_query("INSERT INTO `datos` (`Hora`, `Fecha`, `Latitud`, `Longitud`, `Velocidad`) VALUES ( $fecha, $hora, $lat, $lon, $velocidad)",
$con) or die (mysql_error()); 
	
?>