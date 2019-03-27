<?php 
include('conexi.php');
$link = Conectarse();
$respuesta = array();
$datos = array();

$id_categoria = $_POST['id_categoria'];

$query = "SELECT fecha_desreservacion FROM desc_reservaciones LEFT JOIN servicios USING(id_servicio) WHERE id_categoria='$id_categoria'";

echo json_encode($respuesta);
?>