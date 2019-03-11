<?php 
include('conexi.php');
$link = Conectarse();

$respuesta = array();

$titulo_blog = $_POST['titulo_blog'];
$resumen_blog = $_POST['resumen_blog'];
$contenido_blog = $_POST['contenido_blog'];
$id_usuario = $_POST['id_usuario'];
$id_blog = $_POST['id_blog'];

$new_contenido = nl2br($contenido_blog,false);


//=======ALMACENAR LA IMAGEN EN EL SERVIDOR========
$foto = $_FILES['imagen_blog']['name'];
$extension = pathinfo($foto,PATHINFO_EXTENSION); //Obtenemos la extension del archivo
$nombre_imagen = $id_blog.".".$extension; //Establecemos el nombre del archivo
$ruta_carpeta = "../../imagenes/blog/".$nombre_imagen; //Establecemos la ruta donde se almacenará

/*
Copia un archivo y lo pega en una nueva ruta
move_uploaded_file(archivo a copiar, donde y como se pegará)
*/
move_uploaded_file($_FILES['imagen_blog']['tmp_name'],$ruta_carpeta);

/*===Establecemos la ruta en la base de datos=====*/
$ruta_query = "UPDATE blogs SET
titulo_blog = '$titulo_blog',
resumen_blog = '$resumen_blog',
contenido_blog = '$new_contenido',
fecha_blog = CURDATE(),
id_usuario = '$id_usuario', 
imagen_blog = '$nombre_imagen' 
WHERE id_blog='$id_blog'";

$execute_ruta = mysqli_query($link,$ruta_query);
if($execute_ruta){
    $respuesta['estatus'] = 'success';
}else{
    $respuesta['estatus'] = 'error';
    $respuesta['erno'] = 'Error en '.$ruta_query.mysqli_error($link);
}

echo json_encode($respuesta);
?>