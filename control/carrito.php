<?php 
include('conexi.php');
$link = Conectarse();
SESSION_START();

$accion = $_POST['accion'];

switch($accion){
    case 'add': //agregar servicio al carrito
        $id_servicio = $_POST['id_servicio'];
        $fecha = $_POST['fecha'];
        $respuesta = agregarServicio($id_servicio,$link,$fecha);
        $_SESSION['servicios'][] = $respuesta;
    break;
    case 'list': //listar los servicio al carrito
        
    break;
    case 'delete': //eliminar un servicio
        $id_servicio = $_POST['id_servicio'];
        unset($_SESSION['servicios'][$id_servicio]);
    break;
    default: 
    echo 'No existe';
}




function agregarServicio($id_servicio,$link,$fecha){
    $respuesta = array();
    $query = "SELECT id_servicio,nombre_servicio,precio_servicio FROM servicios WHERE id_servicio='$id_servicio'";
    $execute = mysqli_query($link,$query);
    if($execute){
        $_SESSION['estatus'] = 'success';
        $row = mysqli_fetch_assoc($execute);
        $row['fecha_reserva'] = $fecha;
        $respuesta['datos'] = $row;

        return $respuesta;
    }else{
        $_SESSION['estatus'] = 'error';
        $_SESSION['erno'] = 'Error en '.$query.mysqli_error($link);
        return $respuesta;
    }
}

function eliminarServicio($id_servicio){
    unset($_SESSION['servicios'][$id_servicio]);
    $_SESSION['estatus'] = 'success';
}

//Retornar en formato json los servicios en el carrito
echo json_encode($_SESSION['servicios']);
?>