<?php 
include('conexi.php');
$link = Conectarse();

$nombre_usuario = $_POST['nombre_usuario'];
$correo_usuario = $_POST['correo_usuario'];
$id_blog = $_POST['id_blog'];
$texto_comentario = $_POST['texto_comentario'];

$query = "INSERT INTO comentarios SET
nombre_comentario = '$nombre_usuario',
correo_comentario = '$correo_usuario',
fecha_comentario = CURDATE(),
hora_comentario = CURTIME(),
id_blog = '$id_blog',
texto_comentario = '$texto_comentario',
tipo_usuario = 'admin'
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