<?php
include('conexi.php');
$link = Conectarse();
$respuesta = array();

$id_blog = $_POST['id_blog'];
$query = "SELECT * FROM blogs LEFT JOIN usuarios USING(id_usuario) WHERE id_blog='$id_blog'";

$execute = mysqli_query($link,$query);

if($execute){
    $respuesta['estatus'] = 'success';
    $respuesta['dato'] = mysqli_fetch_assoc($execute);
}else{
    $respuesta['estatus'] = 'error';
}

echo json_encode($respuesta);
?>