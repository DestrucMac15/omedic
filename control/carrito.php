<?php 
include('conexi.php');
$link = Conectarse();

SESSION_START();

$id_servicio = $_POST['id_servicio'];
$respuesta = detallesServicio($id_servicio,$link);

$_SESSION['servicios'][] = $respuesta;

function detallesServicio($id_servicio,$link){
    $respuesta = array();
    $query = "SELECT id_servicio,nombre_servicio,precio_servicio FROM servicios WHERE id_servicio='$id_servicio'";
    $execute = mysqli_query($link,$query);
    if($execute){
        $row = mysqli_fetch_assoc($execute);
        $respuesta['datos'] = $row;

        return $respuesta;
    }else{
        $respuesta['estatus'] = 'error';
        $respuesta['erno'] = 'Error en '.$query.mysqli_error($link);
        return $respuesta;
    }
}
echo json_encode($_SESSION['servicios']);
?>