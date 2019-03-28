<?php 
include('conexi.php');
$link = Conectarse();
SESSION_START();

$method = $_POST['method'];

switch($method){
    case 'add':
        $id_servicio = $_POST['id_servicio'];
        $respuesta = agregarServicio($id_servicio,$link);
        $_SESSION['servicios'][] = $respuesta;
    break;
    case 'list':

    break;
    default: 
    echo 'No existe';
}




function agregarServicio($id_servicio,$link){
    $respuesta = array();
    $query = "SELECT id_servicio,nombre_servicio,precio_servicio FROM servicios WHERE id_servicio='$id_servicio'";
    $execute = mysqli_query($link,$query);
    if($execute){
        $_SESSION['estatus'] = 'success';
        $row = mysqli_fetch_assoc($execute);
        $respuesta['datos'] = $row;

        return $respuesta;
    }else{
        $_SESSION['estatus'] = 'error';
        $_SESSION['erno'] = 'Error en '.$query.mysqli_error($link);
        return $respuesta;
    }
}

//Retornar en formato json los servicios en el carrito
echo json_encode($_SESSION['servicios']);
?>