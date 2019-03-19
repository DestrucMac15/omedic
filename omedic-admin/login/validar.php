<?php 
    include('../control/conexi.php');
    $link = Conectarse();

    $respuesta = array();

    $usuario = $_POST['nick_usuario'];
    $password = $_POST['pass_usuario'];

    $nombre_usuario = stripslashes($usuario);
    $pass_usuario = stripslashes($password);

    $query = "SELECT * FROM usuarios WHERE nick_usuario='$nombre_usuario' AND 
    pass_usuario='$pass_usuario' and estatus_usuario='activo'";

    $execute = mysqli_query($link,$query);

    if($execute){
        $respuesta['estatus'] = 'success';
        $num_rows = mysqli_num_rows($execute);
        $respuesta['num_rows'] = $num_rows;

        if($num_rows > 0){
            session_start();
            session_regenerate_id(true);
            $id_sesion = session_id();
            $row = mysqli_fetch_assoc($execute);
            
            $id_usuario = $row['id_usuario'];
            $usuario = $row['nick_usuario'];
            $nombre = $row['nombre_usuario'];
            $correo = $row['correo_usuario'];

            $_SESSION["id_usuario"] = $id_usuario or die("Error al asignar id usuario");
            $_SESSION["nick_usuario"] = $usuario or die("Error al iniciar usuario");
            $_SESSION["nombre_usuario"] = $nombre or die("Error al iniciar nombre del usuario");
            $_SESSION["correo_usuario"] = $correo or die("Error al iniciar correo del usuario");

            $respuesta['login'] = 'valido';
        }else{
            $respuesta['login'] = 'invalido';
            $respuesta['mensaje'] = 'Usuario o Contraseña incorrectos';
        }

    }else{
        $respuesta['estatus'] = 'error';
        $respuesta['erno'] = 'Error en '.$query.mysqli_error($link);
    }

    echo json_encode($respuesta);
?>