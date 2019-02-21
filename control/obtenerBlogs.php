<?php 
include('conexi.php');
$link = Conectarse();
$respuesta = array();
$datos = array();
$query = "SELECT * FROM blogs LEFT JOIN usuarios USING(id_usuario)";

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
    $respuesta['estatus'] = 'error';
    $respuesta['erno'] = 'respuesta';
}

echo json_encode($respuesta);
?>