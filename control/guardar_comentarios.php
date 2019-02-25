<?php 
include('conexi.php');
$link = Conectarse();

$respuesta = array();

$nombre_comentario = $_POST['nombre_comentario'];
$correo_comentario = $_POST['correo_comentario'];
$texto_comentario = $_POST['texto_comentario'];
$id_blog = $_POST['id_blog'];

$query = "INSERT INTO comentarios SET
nombre_comentario = '$nombre_comentario',
correo_comentario = '$correo_comentario',
texto_comentario = '$texto_comentario',
id_blog = '$id_blog',
fecha_comentario = CURDATE(),
hora_comentario = CURTIME()
";

$execute = mysqli_query($link,$query);

if($execute){
    $respuesta['estatus'] = 'success';
}else{
    $respuesta['estatus'] = 'error';
    $respuesta['erno'] = 'Error en '.$query.mysqli_error($link);
}

echo json_encode($respuesta);
?>