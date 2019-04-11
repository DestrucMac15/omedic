<?php 
include('conexi.php');
$link = Conectarse();
SESSION_START();

$accion = $_POST['accion'];
$_SESSION['estatus'] = '';

switch($accion){
    case 'add': //agregar servicio al carrito
        $id_servicio = $_POST['id_servicio'];
        $fecha = $_POST['fecha'];
        $respuesta = agregarServicio($id_servicio,$link,$fecha);
        $_SESSION['servicios'][] = $respuesta;

        echo json_encode($_SESSION['servicios']);
    break;
    case 'list': 
        if(isset($_SESSION['servicios'])){
            $num_rows = sizeof($_SESSION['servicios']);
            if($num_rows == 0){
                $_SESSION['estatus'] = 'error';
                echo json_encode($_SESSION['estatus']);
            }else{
                echo json_encode($_SESSION['servicios']);
            }
        }else{
            $_SESSION['estatus'] = 'error';
                echo json_encode($_SESSION['estatus']);
        }
    break;
    case 'delete': //eliminar un servicio
        $id_servicio = $_POST['id_servicio'];
        eliminarServicio($id_servicio);
        $num_rows = sizeof($_SESSION['servicios']);
        if($num_rows == 0){
            $_SESSION['estatus'] = 'error';
            echo json_encode($_SESSION['estatus']);
        }else{
            echo json_encode($_SESSION['servicios']);
        }
    break;
    case 'verificar':
        $_SESSION['verificacion'] = 'success';
        echo json_encode($_SESSION['verificacion']);  
    break;
    case 'save':
        $respuesta = array();

        $nombre_cliente = $_POST['nombre_cliente'];
        $correo_cliente = $_POST['correo_cliente'];
        $direccion_cliente = $_POST['direccion_cliente'];
        $edad_cliente = $_POST['edad_cliente'];
        $telefono_cliente = $_POST['telefono_cliente'];
        
        $query_cliente = "INSERT INTO clientes SET
        nombre_cliente = '$nombre_cliente',
        correo_cliente = '$correo_cliente',
        direccion_cliente = '$direccion_cliente',
        edad_cliente = '$edad_cliente',
        telefono_cliente = '$telefono_cliente'
        ";
        $execute_clientes = mysqli_query($link,$query_cliente);

        if($execute_clientes){
            $respuesta['estatus'] = 'success';
            $id_cliente = mysqli_insert_id($link);

            $query_reservaciones = "INSERT INTO reservaciones SET 
            id_cliente = '$id_cliente'
            ";
            $execute_reservaciones = mysqli_query($link,$query_reservaciones);
            if($execute_reservaciones){
                $respuesta['estatus'] = 'succcess';

                
                foreach($_SESSION['servicios'] as $clave => $valor){
                    $query = "INSERT INTO desc_reservaciones SET
                    id_servicio = '".$valor['id_servicio']."',
                    
                    ";
                }
            }else{
                $respuesta['error'] = 'error';
                $respuesta['erno'] = 'Error en '.$query_reservaciones.mysqli_error($link);
            }

        }else{
            $respuesta['error'] = 'error';
            $respuesta['erno'] = 'Error en '.$query_cliente.mysqli_error($link);
        }
    break;
}




function agregarServicio($id_servicio,$link,$fecha){
    $respuesta = array();
    $query = "SELECT id_servicio,nombre_servicio,precio_servicio,descripcion_servicio FROM servicios WHERE id_servicio='$id_servicio'";
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

?>