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
            <div class="container_blog">
                <div class="title">
                    <h3>ENTRADAS DEL BLOG</h3>
                </div>
                <div class="list_blogs">
                    <div class="blog">
                        <div class="imagen">
                            <img src="../imagenes/entrada2.jpg" alt="">
                        </div>
                        <div class="title_blog">
                            <span>Hola que hace</span> (esto se trata de otra cosa)
                        </div>
                        <div class="controles">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="imagen">
                            <img src="../imagenes/entrada1.gif" alt="">
                        </div>
                        <div class="title_blog">
                            <span>Hola que hace</span> (Esto se trata de algo)
                        </div>
                        <div class="controles">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('scripts.php'); ?>
</body>
</html>