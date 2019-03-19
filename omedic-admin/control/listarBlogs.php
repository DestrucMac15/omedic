<?php 
include('conexi.php');
$link = Conectarse();

$respuesta = array();
$datos = array();

$query = "SELECT
id_blog,
titulo_blog,
nombre_usuario,
count(id_comentario) as num_comentarios,
fecha_blog
FROM
	blogs
left JOIN comentarios using(id_blog)
LEFT JOIN usuarios USING (id_usuario)
GROUP BY id_blog
";

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
    $respuesta['error'] = 'error';
    $respuesta['erno'] = 'Error en '.$query.mysqli_error($link);
}

echo json_encode($respuesta);
?>