<?php 
include('conexi.php');
$link = Conectarse();
$respuesta = array();
$datos = array();

$clave = $_POST['clave'];
$valor = $_POST['valor'];

    $query = "SELECT * FROM servicios LEFT JOIN categorias USING(id_categoria) WHERE $clave = '$valor'";
    
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
    $respuesta['erno'] = 'Error en '.$query.mysqli_error($link);
}


echo json_encode($respuesta);
?>