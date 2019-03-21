<?php 
include('conexi.php');
$link = Conectarse();

$respuesta = array();

$nombre_servicio = $_POST['nombre_servicio'];
$descripcion_servicio = $_POST['descripcion_servicio'];
$tiempo_servicio = $_POST['tiempo_servicio'];
$precio_servicio = $_POST['precio_servicio'];
$espera_servicio = $_POST['espera_servicio'];
$id_categoria = $_POST['id_categoria'];
$id_servicio = $_POST['id_servicio'];

$query = "UPDATE servicios SET
nombre_servicio = '$nombre_servicio',
descripcion_servicio = '$descripcion_servicio',
tiempo_servicio = '$tiempo_servicio',
precio_servicio = '$precio_servicio',
espera_servicio = '$espera_servicio',
id_categoria = '$id_categoria'
WHERE id_servicio='$id_servicio'
";

$execute = mysqli_query($link,$query);

if($execute){
    $respuesta['estatus'] = 'success';

    if($_FILES['imagen_servicio']['name'] != ""){

        //=======ALMACENAR LA IMAGEN EN EL SERVIDOR========
        $foto = $_FILES['imagen_servicio']['name'];
        $extension = pathinfo($foto,PATHINFO_EXTENSION); //Obtenemos la extension del archivo
        $nombre_imagen = $id_servicio.".".$extension; //Establecemos el nombre del archivo
        $ruta_carpeta = "../../imagenes/blog/".$nombre_imagen; //Establecemos la ruta donde se almacenará

        /*
        Copia un archivo y lo pega en una nueva ruta
        move_uploaded_file(archivo a copiar, donde y como se pegará)
        */
        move_uploaded_file($_FILES['imagen_servicio']['tmp_name'],$ruta_carpeta);
    
    
        $ruta_query = "UPDATE servicios SET foto_servicio='$nombre_imagen' WHERE id_servicio='$id_servicio'";
        
        $ruta_execute = mysqli_query($link,$ruta_query);
        if($ruta_execute){
            $respuesta['estatus'] = 'success';
        }else{
            $respuesta['estatus'] = 'error';
            $respuesta['erno'] = 'Error al almacenar imagen';
            $respuesta['mensaje'] = $_FILES['imagen_servicio']['name'];
        }
    }
}else{
    $respuesta['estatus'] = 'error';
    $respuesta['error'] = 'Error en '.$query.mysqli_error($link);
}

echo json_encode($respuesta);
?>