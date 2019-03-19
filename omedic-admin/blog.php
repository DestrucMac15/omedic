<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'blog';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG - OMEDIC</title>
    <?php include('styles.php'); ?>
    <link href="css/blog.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>

        <div class="container">
            <div class="area">
                <div class="title">
                    <h3>ENTRADAS DEL BLOG</h3>
                    <form action="" id="form_blog">
                        <input type="text" id="busqueda_blog" placeholder="Buscar entrada">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="list_blogs" id="list_blogs">
                   
                </div>
                <div id="mensaje"></div>
            </div>
        </div>
    </div>

    <a href="nuevo_blog.php">
        <button class="nueva_entrada" title="Nueva Entrada" id="btn_nuevaEntrada"><i class="fas fa-plus"></i></button>
    </a>

  

    <?php include('scripts.php'); ?>
    <script src="js/blog.js"></script>
</body>
</html>