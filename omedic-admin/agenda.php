<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'agenda';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AGENDA - OMEDIC</title>
    <?php include('styles.php'); ?>
    <link href="css/agenda.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>
        <div class="container">
            <div class="area">
                <div class="title">
                    <h3>AGENDA</h3>
                    
                </div>
            </div>
        </div>
    </div>

    <?php include('scripts.php'); ?>
</body>
</html>