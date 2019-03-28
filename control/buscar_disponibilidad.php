<?php 
include('conexi.php');
$link = Conectarse();
$respuesta = array();
$datos = array();

$id_categoria = $_POST['id_categoria'];

if($_POST['fecha'] == ""){
    $query = "SELECT DISTINCT fecha_desreservacion FROM desc_reservaciones LEFT JOIN servicios USING(id_servicio) WHERE id_categoria='$id_categoria' AND fecha_desreservacion > CURDATE()";
}else{
    $fecha = $_POST['fecha'];
    $query = "SELECT DISTINCT fecha_desreservacion FROM desc_reservaciones LEFT JOIN servicios USING(id_servicio) WHERE id_categoria='$id_categoria' AND fecha_desreservacion='$fecha'";
    
}



$execute = mysqli_query($link,$query);

if($execute){
    $respuesta['estatus'] = 'success';
    $num_rows = mysqli_num_rows($execute);
    $respuesta['num_rows'] = $num_rows;
    if($num_rows > 0){
        while($row = mysqli_fetch_assoc($execute)){
            $datos[] = $row;
        }
        $respuesta['datos'] = $datos;
    }
}else{
    $respuesta['estatus'] = 'error';
    $respuesta['erno'] = 'Error en '.$query.mysqli_error($link);
}

echo json_encode($respuesta);
?>